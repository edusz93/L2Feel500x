<?php if(!$indexing || $dpage['toponl'] != 1) { echo "<script>document.location.replace('./');</script>"; exit; } ?>

<h1>Top Online</h1>

<?php
require('private/includes/rankoptions.php');
$cacheFile = "cache/toponline.xml";
$genNew = 0;

if(!file_exists($cacheFile)) {
	$genNew = 1;
} else {
	
	$xml = simplexml_load_file($cacheFile);
	$configs = $xml->configs;
	$updated = intval($configs->updated);
	$delay = $cacheDelayMin;
	$rcount = intval($configs->rcount);
	
	if(($updated+($delay*60)) < time()) {
		$genNew = 1;
	}
	
	if($rcount != $countTopON) {
		$genNew = 1;
	}
	
}

$dateReg = mktime($reg['hr'],$reg['min'],0,$reg['mes'],$reg['dia'],$reg['ano']);
if($showRankReg == 0 && time() < $dateReg) {
	$genNew = 1;
}

if($genNew) {
	
	if(!file_exists("cache")) { @mkdir("cache", 0775, true); @chmod("cache", 0775); }
	if(!file_exists("cache/index.html")) { $secIndexFile = fopen("cache/index.html","w+"); @fclose($secIndexFile); }
	if(!file_exists("cache/.htaccess")) { $secHtacsFile = fopen("cache/.htaccess","w+"); @fwrite($secHtacsFile, "Options -Indexes\ndeny from all"); @fclose($secHtacsFile); }
	
	$wFile = fopen($cacheFile,"w+");
	
	$updated = time();
	$line = "\n<configs>\n<atualstudio>Cache script by Atualstudio.com</atualstudio>\n<updated>".$updated."</updated>\n<delay>".$cacheDelayMin."</delay>\n<rcount>".$countTopON."</rcount>\n</configs>";
	
	if($showRankReg == 1 || ($showRankReg == 0 && time() > $dateReg)) {
		
		require_once('private/classes/classStats.php');
		
		$query = Stats::TopOnline($countTopON);
		if(count($query) > 0) {
			
			for($i=0, $c=count($query); $i < $c; $i++) {
				
				$dias = intval($query[$i]['onlinetime'] / 86400); $marcador = $query[$i]['onlinetime'] % 86400; $hora = intval($marcador / 3600); $marcador = $marcador % 3600; $minuto = intval($marcador / 60);
				
				$line .= "\n<line>\n";
				$line .= "<pos>".($i+1)."</pos>\n";
				$line .= "<name>".$query[$i]['char_name']."</name>\n";
				$line .= "<clan>".(empty($query[$i]['clan_name']) ? '-' : $query[$i]['clan_name'])."</clan>\n";
				$line .= "<pvp>".$query[$i]['pvpkills']."</pvp>\n";
				$line .= "<pk>".$query[$i]['pkkills']."</pk>\n";
				$line .= "<otdays>".$dias."</otdays>\n";
				$line .= "<othrs>".$hora."</othrs>\n";
				$line .= "<otmin>".$minuto."</otmin>\n";
				$line .= "</line>";
				
			}
			
		} else {
			$deleteCache = 1;
		}
		
	} else {
		$deleteCache = 1;
	}

	@fwrite($wFile, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<ranking>".$line."\n</ranking>");
	@fclose($wFile);
	
	$xml = simplexml_load_file($cacheFile);
	
	if(isset($deleteCache) && file_exists($cacheFile)) {
		unlink($cacheFile);
	}
	
}

$selectedClan = isset($_GET['clan']) ? $_GET['clan'] : '';

?>

<form method="get" action="">
    <input type="hidden" name="page" value="toponl" />
    <label for="clan">Filtrar por clan:</label>
    <select name="clan" id="clan">
        <option value="">Todos</option>
        <?php
        $clans = [];
        foreach ($xml->line as $line) {
            $clanName = (string) $line->clan;
            if (!in_array($clanName, $clans)) {
                $clans[] = $clanName;
                echo '<option value="'.htmlspecialchars($clanName).'"'.($selectedClan === $clanName ? ' selected' : '').'>'.htmlspecialchars($clanName).'</option>';
            }
        }
        ?>
    </select>
    <button type="submit">Filtrar</button>
</form>

<div class='pddInner'>
	<?php echo $LANG[30505]."<br />".$LANG[30500]." <b>".date('d/m/Y', $updated)."</b> ".$LANG[30501]." <b>".date('H:i', $updated)."</b>."; ?><br /><br />
</div>

<table cellspacing="0" cellpadding="0" border="0" class='default'>
    <thead>
        <tr>
            <th class='pos'></th>
            <th><?php echo htmlspecialchars($LANG[12013]); ?></th>
            <th>Clan</th>
            <th>PVP's</th>
            <th>PK's</th>
            <th title='<?php echo htmlspecialchars($LANG[29006]); ?>'><?php echo htmlspecialchars($LANG[12016]); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $line = $xml->line;
        $countView = (!empty($countTopON) ? intval($countTopON) : 100);
        if (count($line) < $countView) { $countView = count($line); }

        for ($i = 0; $i < $countView; $i++) {
            $clan = (string) $line[$i]->clan;
            if ($selectedClan && $clan !== $selectedClan) {
                continue;
            }
            $row_class = ($i % 2 == 0) ? " class='two'" : "";
            $pos = htmlspecialchars($line[$i]->pos);
            $name = htmlspecialchars($line[$i]->name);
            $pvp = htmlspecialchars($line[$i]->pvp);
            $pk = htmlspecialchars($line[$i]->pk);
            $otdays = htmlspecialchars($line[$i]->otdays);
            $othrs = htmlspecialchars($line[$i]->othrs);
            $otmin = htmlspecialchars($line[$i]->otmin);
            $title = "{$otdays} {$LANG[12014]}s, {$othrs} hrs {$LANG[12015]} {$otmin} min";
            $formatted_time = "{$otdays}d, {$othrs}h {$otmin}m";

            echo "
            <tr{$row_class}>
                <td class='pos'>{$pos}&ordm;</td>
                <td><b>{$name}</b></td>
                <td><center>{$clan}</center></td>
                <td style='color: #32CD32;'><center>{$pvp}</center></td>
                <td style='color: orange;'><center>{$pk}</center></td>
                <td class='foco' title='{$title}'><center>{$formatted_time}</center></td>
            </tr>
            ";
        }
        ?>
    </tbody>
</table>