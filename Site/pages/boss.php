<?php 
if (!$indexing || $dpage['bosstt'] != 1) { 
    echo "<script>document.location.replace('./');</script>"; 
    exit; 
}

$hostname_acis = $host;
$username_acis = $user;
$password_acis = $pass;
$database_acis = $dbnm;

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

$acis = mysqli_connect($hostname_acis, $username_acis, $password_acis, $database_acis);
if (!$acis) {
    die("Connection failed: " . mysqli_connect_error());
}

$GrandBosses = [
    [
        'name' => 'Boss Event: Sailren',
        'level' => 80,
        'image' => 'sailren.jpg',
        'query' => "SELECT * FROM grandboss_data WHERE boss_id = 49999",
        'random' => '0m',
        'fixedHour' => '14:00,19:00,00:00'
    ],
    [
        'name' => 'Queen Ant',
        'level' => 80,
        'image' => 'queen_ant.jpg',
        'query' => "SELECT * FROM spawn_data WHERE name = 'queen_ant'",
        'random' => '15m',
        'fixedHour' => '22:15'
    ],
    [
        'name' => 'Core',
        'level' => 80,
        'image' => 'core.jpg',
        'query' => "SELECT * FROM spawn_data WHERE name = 'core'",
        'random' => '15m',
        'fixedHour' => '23:15'
    ],
    [
        'name' => 'Orfen',
        'level' => 80,
        'image' => 'orfen.jpg',
        'query' => "SELECT * FROM spawn_data WHERE name = 'orfen'",
        'random' => '15m',
        'fixedHour' => '23:15'
    ],
    [
        'name' => 'Zaken',
        'level' => 80,
        'image' => 'zaken.jpg',
        'query' => "SELECT * FROM spawn_data WHERE name = 'zaken'",
        'random' => '15m',
        'fixedHour' => '21:15'
    ]
];

$EpicBosses = [
    [
        'name' => 'Frintezza',
        'level' => 90,
        'image' => 'frintezza.jpg',
        'query' => "SELECT * FROM grandboss_data WHERE boss_id = 29045",
        'random' => '15m',
        'fixedHour' => '22:15'
    ],
    [
        'name' => 'Baium',
        'level' => 80,
        'image' => 'baium.jpg',
        'query' => "SELECT * FROM grandboss_data WHERE boss_id = 29020",
        'random' => '15m',
        'fixedHour' => '23:15'
    ],
    [
        'name' => 'Antharas',
        'level' => 80,
        'image' => 'Antharas.jpg',
        'query' => "SELECT * FROM grandboss_data WHERE boss_id = 29019",
        'random' => '15m',
        'fixedHour' => '16:15'
    ],
    [
        'name' => 'Valakas',
        'level' => 85,
        'image' => 'valakas.jpg',
        'query' => "SELECT * FROM grandboss_data WHERE boss_id = 29028",
        'random' => '15m',
        'fixedHour' => '16:15'
    ]
];

$RaidBosses = [
	['name' => 'Baylor', 'level' => 90, 'image' => 'https://forum.battleclub.ws/uploads/monthly_2022_07/baylor.jpg.02e0df864753bf47b1ef76303b993a1d.jpg', 'query' => "SELECT * FROM spawn_data WHERE name = 'baylor'", 'random' => '0m'],
	['name' => 'Flame of Splendor Barakiel', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25325', 'query' => "SELECT * FROM grandboss_data WHERE boss_id = 39999", 'random' => '0m'],
	['name' => 'Shilens Messenger Cabrio', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25035', 'query' => "SELECT * FROM spawn_data WHERE name = 'domb_death_cabrio'", 'random' => '0m'],
	['name' => 'Death Lord Hallate', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25220', 'query' => "SELECT * FROM spawn_data WHERE name = 'hallate_the_death_lord'", 'random' => '0m'],
	['name' => 'Kernon', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25054', 'query' => "SELECT * FROM spawn_data WHERE name = 'kernon'", 'random' => '0m'],
	['name' => 'Longhorn Golkonda', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25126', 'query' => "SELECT * FROM spawn_data WHERE name = 'golkonda_longhorn'", 'random' => '0m'],
	['name' => 'Ketras Chief Brakki', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25305', 'query' => "SELECT * FROM spawn_data WHERE name = 'ketra_chief_brakki'", 'random' => '0m'],
	['name' => 'Ketras Hero Hekaton', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25299', 'query' => "SELECT * FROM spawn_data WHERE name = 'ketra_hero_hekaton'", 'random' => '0m'],
	['name' => 'Ketras Commander Tayr', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25302', 'query' => "SELECT * FROM spawn_data WHERE name = 'ketra_commander_tayr'", 'random' => '0m'],
	['name' => 'Varkas Commander Mos', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25312', 'query' => "SELECT * FROM spawn_data WHERE name = 'varka_commnder_mos'", 'random' => '0m'],
	['name' => 'Varkas Hero Shadith', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25309', 'query' => "SELECT * FROM spawn_data WHERE name = 'varka_hero_shadith'", 'random' => '0m'],
	['name' => 'Storm Winged Naga', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25229', 'query' => "SELECT * FROM spawn_data WHERE name = 'storm_winged_naga'", 'random' => '0m'],
	['name' => 'Last Lesser Giant Olkuth', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25244', 'query' => "SELECT * FROM spawn_data WHERE name = 'last_lesser_olkuth'", 'random' => '0m'],
	['name' => 'Death Lord Ipos', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25276', 'query' => "SELECT * FROM spawn_data WHERE name = 'ipos_the_death_lord'", 'random' => '0m'],
	['name' => 'Death Lord Shax', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25282', 'query' => "SELECT * FROM spawn_data WHERE name = 'shax_the_death_lord'", 'random' => '0m'],
	['name' => 'Ocean Flame Ashakiel', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25205', 'query' => "SELECT * FROM spawn_data WHERE name = 'ocean_flame_ashakiel'", 'random' => '0m'],
	['name' => 'Fafurions Herald Lokness', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25198', 'query' => "SELECT * FROM spawn_data WHERE name = 'faf_herald_lokness'", 'random' => '0m'],
	['name' => 'Water Dragon Seer Sheshark', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25199', 'query' => "SELECT * FROM spawn_data WHERE name = 'wdragon_priest_sheshark'", 'random' => '0m'],
	['name' => 'Krokian Padisha Sobekk', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25202', 'query' => "SELECT * FROM spawn_data WHERE name = 'krokian_padisha_sobekk'", 'random' => '0m'],
	['name' => 'Fire of Wrath Shuriel', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25143', 'query' => "SELECT * FROM spawn_data WHERE name = 'shuriel_fire_of_wrath'", 'random' => '0m'],
	['name' => 'Last Lesser Giant Glaki', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25245', 'query' => "SELECT * FROM spawn_data WHERE name = 'last_lesser_glaki'", 'random' => '0m'],
	['name' => 'Bloody Empress Decarbia', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25266', 'query' => "SELECT * FROM spawn_data WHERE name = 'bloody_empress_decarbia'", 'random' => '0m'],
	['name' => 'Cherub Galaxia', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25450', 'query' => "SELECT * FROM spawn_data WHERE name = 'cherub_garacsia'", 'random' => '0m'],
	['name' => 'Varkas Chief Horus', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25315', 'query' => "SELECT * FROM spawn_data WHERE name = 'varka_chief_horuth'", 'random' => '0m'],
	['name' => 'Uruka', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25527', 'query' => "SELECT * FROM spawn_data WHERE name = 'uruka'", 'random' => '0m'],
	['name' => 'Queen Shyeed', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25514', 'query' => "SELECT * FROM spawn_data WHERE name = 'spike_stakato_qn_shyid'", 'random' => '0m'],
	['name' => 'Ember', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25319', 'query' => "SELECT * FROM spawn_data WHERE name = 'amber'", 'random' => '0m'],
	['name' => 'Hestia Guardian Deity of the Hot Springs', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25293', 'query' => "SELECT * FROM spawn_data WHERE name = 'geyser_guardian_hestia'", 'random' => '0m'],
	['name' => 'Palatanos of Horrific Power', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25249', 'query' => "SELECT * FROM spawn_data WHERE name = 'bloody_tree_vermilion'", 'random' => '0m'],
	['name' => 'Flamestone Giant', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25524', 'query' => "SELECT * FROM spawn_data WHERE name = 'flame_stone_golem'", 'random' => '0m']
];

// Obter o filtro selecionado pelo usuário
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
$currentTimeMillis = time() * 1000;

function shouldShowBoss($respawnTime, $filter) {
    global $currentTimeMillis;
    if ($filter === 'all') return true;
    $isDead = $respawnTime >= $currentTimeMillis;
    return ($filter === 'alive') !== $isDead; // Inverte a lógica
}

function displayBossRow($name, $level, $image, $respawnTime, $lang, $isEpic = false, $random, $fixedHour, $rowIndex) {
    global $filter, $currentTimeMillis;
    $isDead = $respawnTime >= $currentTimeMillis;
    if (!shouldShowBoss($respawnTime, $filter)) return;

    // Definindo cores para "morto"
    $darkRed = '#992600'; // vermelho escuro
    $lighterRed = '#c0483b'; // vermelho um pouco mais escuro que o anterior

    // Alternar as cores com base no índice
    if ($isDead) {
        $bgColor = ($rowIndex % 2 == 0) ? $darkRed : $lighterRed;
    } else {
        // Cor de fundo alternada para vivo
        $bgColor = ($rowIndex % 2 == 0) ? '#2a1d14' : '#34271E';
    }

    $imgWidth = '100px'; // Largura reduzida da imagem
    $imgHeight = '100px'; // Altura da imagem
    $imgFilter = $isDead ? 'grayscale(100%)' : 'none';
    $statusColor = $isDead ? 'orange' : '#32CD32'; // Cor para vivo ou morto
    $respawnTextColor = '#cccccc'; // Cor do texto do tempo de respawn
    ?>

    <tr class="<?php echo $isDead ? 'dead' : 'alive'; ?>" style="background-color: <?php echo $bgColor; ?>; transition: background-color 0.3s;">
        <td align="center" style="padding: 15px; border-right: 1px solid #4e3b29; vertical-align: middle; width: 150px;">
            <h4 style="margin: 0; color: #fff;"><?php echo $name; ?></h4><br>
            <div style="display: inline-block; overflow: hidden; width: <?php echo $imgWidth; ?>; height: <?php echo $imgHeight; ?>; border-radius: 5px; border: 2px solid #4e3b29; position: relative;">
                <img src="<?php echo $isEpic ? './assets/images/boss/' : ""; ?><?php echo $image; ?>" alt="Image" style="filter: <?php echo $imgFilter; ?>; width: 100%; height: 100%; object-fit: cover; border-radius: 5px; display: block; margin: auto;"/>
            </div>
        </td>
        <td style="border-right: 1px solid #4e3b29; vertical-align: middle; padding: 15px; color: #f0c674; text-align: center; width: 50px;">
            <strong><?php echo $level; ?></strong>
        </td>
        <td style="border-right: 1px solid #4e3b29; vertical-align: middle; padding: 15px; color: #000; text-align: center; width: 200px;">
            <?php
            if ($respawnTime < $currentTimeMillis) {
                echo "<span style='color: $statusColor; font-weight: bold;'>" . $lang[12030] . "</span>";
            } else {
                $date = date('d/m', ($respawnTime / 1000));
                $time = $random == "0m" ? date('H:i', ($respawnTime / 1000)) : $fixedHour . " +- " . $random;
                echo "<span style='color: orange; font-weight: bold;'>" . $lang[12029] . "</span> <br><span style='color: $respawnTextColor;'>(" . $date . ", " . $time . ")</span>";
            }
            ?>
        </td>
    </tr>

    <?php
}

?><h1>Boss Status</h1>
<!-- Formulário de filtro -->
<form method="GET" action="" style="margin-bottom: 20px; display: flex; align-items: center;">
    <input type="hidden" name="page" value="boss" />
    <label for="filter" style="margin-right: 10px; font-weight: bold; color: #fff;">Filtrar por status:</label>
    <select name="filter" id="filter" style="padding: 8px 12px; background-color: #2a1d14; color: #f0c674; border: 1px solid #4e3b29; border-radius: 5px; margin-right: 15px;">
        <option value="all" <?php if ($filter == 'all') echo 'selected'; ?>>Todos</option>
        <option value="alive" <?php if ($filter == 'alive') echo 'selected'; ?>>Vivos</option>
        <option value="dead" <?php if ($filter == 'dead') echo 'selected'; ?>>Mortos</option>
    </select>
    <button type="submit" style="padding: 8px 15px; background-color: #4e3b29; color: #f0c674; border: none; border-radius: 5px; cursor: pointer;">Filtrar</button>
</form>
<div class='pddInner'>
    <?php echo $LANG[12115] . "<br />" . $LANG[30500] . " <b>" . date('d/m/Y', $updated) . "</b> " . $LANG[30501] . " <b>" . date('H:i', $updated) . "</b>."; ?><br /><br />
</div>
<center>
    <table width="98%" height="auto" border="0" cellpadding="0" cellspacing="0">
        <tr style="background-color:#333; color:#FFF; font-size:14px; font-weight:600; text-align:center;">
            <td style="padding-top:10px;padding-bottom:12px; border-radius: 5px 0 0 0;" width="35%" align="center" nowrap="nowrap">BOSS NAME</td>
            <td style="padding-top:10px;padding-bottom:12px;" width="20%" nowrap="nowrap">LEVEL</td>
            <td style="padding-top:10px;padding-bottom:12px;" width="45%" nowrap="nowrap">STATUS</td>
        </tr>
    </table>

    <table width="98%" height="auto" border="0" cellpadding="0" cellspacing="0" align="center" style="border:1px solid #444; font-weight:400; font-size:15px; letter-spacing:-0.6px; color:#cccccc;">
	<?php

	function displayBosses($bosses, $acis, $LANG, &$rowIndex, $isGrandOrEpic) {
		$bossesWithRespawnTimes = []; // Array para armazenar os bosses com respawn times

		foreach ($bosses as $boss) {
			$result = mysqli_query($acis, $boss['query']);
			while ($raid = mysqli_fetch_array($result)) {
				// Armazena os dados do boss junto com o respawn_time
				$bossData = [
					'name' => $boss['name'],
					'level' => $boss['level'],
					'image' => $boss['image'],
					'respawn_time' => $raid['respawn_time'],
					'random' => $boss['random'],
					'fixedHour' => $boss['fixedHour']
				];
				$bossesWithRespawnTimes[] = $bossData; // Adiciona ao array
			}
		}

		// Ordena o array por respawn_time de forma ascendente
		usort($bossesWithRespawnTimes, function($a, $b) {
			return $a['respawn_time'] <=> $b['respawn_time']; // Ordem ascendente
		});

		// Exibe os bosses ordenados
		foreach ($bossesWithRespawnTimes as $boss) {
			displayBossRow($boss['name'], $boss['level'], $boss['image'], $boss['respawn_time'], $LANG, $isGrandOrEpic, $boss['random'], $boss['fixedHour'], $rowIndex);
			$rowIndex++; // Incrementa o contador de linhas
		}
	}

	$rowIndex = 0; // Inicializa o contador de linhas
	displayBosses($GrandBosses, $acis, $LANG, $rowIndex, true); // Exibe Grand Bosses
	displayBosses($EpicBosses, $acis, $LANG, $rowIndex, true); // Exibe Epic Bosses
	displayBosses($RaidBosses, $acis, $LANG, $rowIndex, false); // Exibe Raid Bosses

	?>
    </table>
</center>