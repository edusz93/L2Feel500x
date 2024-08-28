<?php if(!$indexing || $dpage['bossjl'] != 1) { echo "<script>document.location.replace('./');</script>"; exit; } ?>
<h1>Boss Jeweal</h1>

<?php
require('private/includes/rankoptions.php');
$cacheFile = "cache/boss_jewels_loc.xml";
$genNew = 0;

if(!file_exists($cacheFile)) {
    $genNew = 1;
} else {
    $xml = simplexml_load_file($cacheFile);
    $configs = $xml->configs;
    $updated = intval($configs->updated);
    $delay = $cacheDelayMin;

    if(($updated + ($delay * 60)) < time()) {
        $genNew = 1;
    }
}

if($genNew) {
    if(!file_exists("cache")) { @mkdir("cache", 0775, true); @chmod("cache", 0775); }
    if(!file_exists("cache/index.html")) { $secIndexFile = fopen("cache/index.html","w+"); @fclose($secIndexFile); }
    if(!file_exists("cache/.htaccess")) { $secHtacsFile = fopen("cache/.htaccess","w+"); @fwrite($secHtacsFile, "Options -Indexes"); @fclose($secHtacsFile); }

    $wFile = fopen($cacheFile,"w+");
    
    $updated = time();
    $line = "\n<configs>\n<atualstudio>Cache script by Atualstudio.com</atualstudio>\n<updated>".$updated."</updated>\n<delay>".$cacheDelayMin."</delay>\n</configs>";

    if($showRankReg == 1 || ($showRankReg == 0 && time() > $dateReg)) {
        require_once('private/classes/classStats.php');
        $query = Stats::BossJwlLoc($bossJwlIds);
        if(count($query) > 0) {
            require_once('private/includes/itemlist.php');
            $items = array(); // Array para armazenar itens

            for($i = 0, $c = count($query); $i < $c; $i++) {
                $id = $query[$i]['item_id'];
                $items[$id] = $item[$id][0]; // Salva o nome do item com o ID como chave
                $line .= "\n<line>\n";
                $line .= "<player>".$query[$i]['char_name']."</player>\n";
                $line .= "<clan>".$query[$i]['clan_name']."</clan>\n";
                $line .= "<itemid>".$id."</itemid>\n";
                $line .= "<itemname>".$item[$id][0]."</itemname>\n";
                $line .= "<amount>".$query[$i]['count']."</amount>\n";
                $line .= "</line>";
            }
            // Salva os itens no cache para uso futuro
            $itemCache = fopen("cache/items.json", "w+");
            fwrite($itemCache, json_encode($items));
            fclose($itemCache);
        } else {
            $deleteCache = 1;
        }
    } else {
        $deleteCache = 1;
    }

    @fwrite($wFile, utf8_encode("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<locs>".$line."\n</locs>"));
    @fclose($wFile);

    $xml = simplexml_load_file($cacheFile);

    if(isset($deleteCache) && file_exists($cacheFile)) {
        unlink($cacheFile);
    }
}
?>

<form method="get" action="">
    <input type="hidden" name="page" value="boss_jewels_loc">
    <label for="itemFilter">Filtrar por item:</label>
    <select name="itemFilter" id="itemFilter">
        <option value="">Todos</option>
        <?php
        // Carregar itens do cache
        $items = array();
        if (file_exists("cache/items.json")) {
            $items = json_decode(file_get_contents("cache/items.json"), true);
        }

        // Gerar opções para o select
        foreach ($items as $itemId => $itemName) {
            $selected = (isset($_GET['itemFilter']) && $_GET['itemFilter'] == $itemId) ? 'selected' : '';
            echo "<option value='$itemId' $selected>$itemName</option>";
        }

        if (empty($items)) {
            echo "<option value=''>Nenhum item encontrado</option>";
        }
        ?>
    </select>

    <label for="clanFilter">Filtrar por clan:</label>
    <select name="clanFilter" id="clanFilter">
        <option value="">Todos</option>
        <?php
        // Carregar o XML
        if (file_exists($cacheFile)) {
            $xml = simplexml_load_file($cacheFile);
            $clans = array();

            // Coletar clãs únicos
            foreach ($xml->line as $entry) {
                $clan = (string)$entry->clan;
                if ($clan != '-' && !in_array($clan, $clans)) {
                    $clans[] = $clan;
                }
            }

            // Ordenar clãs para melhor apresentação
            sort($clans);

            // Gerar opções para o select
            foreach ($clans as $clan) {
                $selected = (isset($_GET['clanFilter']) && $_GET['clanFilter'] == $clan) ? 'selected' : '';
                echo "<option value='$clan' $selected>$clan</option>";
            }
        } else {
            echo "<option value=''>Nenhum clã encontrado</option>";
        }
        ?>
    </select>

    <button type="submit">Filtrar</button>
</form>

<div class='pddInner'>

	<?php echo "".$LANG[30500]." <b>".date('d/m/Y', $updated)."</b> ".$LANG[30501]." <b>".date('H:i', $updated)."</b>."; ?><br /><br />

</div>

<table cellspacing='0' cellpadding='0' border='0' class='default'>
    <thead>
        <tr>
            <th style='width: 40px; vertical-align: middle;'></th>
            <th style='vertical-align: middle;'>Item <?php echo $LANG[12013]; ?></th>
            <th style='vertical-align: middle;'>Player <?php echo $LANG[12013]; ?></th>
            <th style='vertical-align: middle;'>Clan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $itemFilter = isset($_GET['itemFilter']) ? $_GET['itemFilter'] : '';
        $clanFilter = isset($_GET['clanFilter']) ? $_GET['clanFilter'] : '';

        if (count($xml->line) > 0) {
            for ($i = 0, $c = count($xml->line); $i < $c; $i++) {
                // Aplica o filtro de item e clã
                $lineItemId = (string)$xml->line[$i]->itemid;
                $lineClan = (string)$xml->line[$i]->clan;

                if (($itemFilter && $lineItemId != $itemFilter) || ($clanFilter && $lineClan != $clanFilter)) {
                    continue;
                }

                $row_class = ($i % 2 == 0) ? ' class="two"' : '';
                echo "<tr$row_class>";
                echo "<td style='text-align: center; padding: 8px; vertical-align: middle;'><img style='max-width: 32px; max-height: 32px; vertical-align: middle;' src='" . htmlspecialchars(getIcon($lineItemId, 1)) . "' /></td>";
                echo "<td style='padding: 8px; vertical-align: middle;'>" . htmlspecialchars($xml->line[$i]->itemname) . " (" . $xml->line[$i]->amount . ")</td>";
                echo "<td style='text-align: center; padding: 8px; vertical-align: middle;'>" . htmlspecialchars($xml->line[$i]->player) . "</td>";
                echo "<td style='text-align: center; padding: 8px; vertical-align: middle;'>" . (!empty($xml->line[$i]->clan) ? htmlspecialchars($xml->line[$i]->clan) : '-') . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4' style='text-align: center;'>Nenhum dado encontrado</td></tr>";
        }
        ?>
    </tbody>
</table>