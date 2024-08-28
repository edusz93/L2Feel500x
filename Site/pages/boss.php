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

function getNextRespawnBoss($bosses, $connection, $excludeNames = []) {
    $nextBoss = null;
    $minRespawnTime = PHP_INT_MAX;

    foreach ($bosses as $boss) {
        if (in_array($boss['name'], $excludeNames)) {
            continue;
        }
        $result = mysqli_query($connection, $boss['query']);
        while ($raid = mysqli_fetch_array($result)) {
            if ($raid['respawn_time'] < $minRespawnTime && $raid['respawn_time'] >= time() * 1000) {
                $minRespawnTime = $raid['respawn_time'];
                $nextBoss = $boss;
                $nextBoss['respawn_time'] = $raid['respawn_time'];
            }
        }
    }

    return $nextBoss;
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

$nextGrandBoss = getNextRespawnBoss($GrandBosses, $acis, ['Boss Event: Sailren']);
$nextEpicBoss = getNextRespawnBoss($EpicBosses, $acis);
$nextRaidBoss = getNextRespawnBoss($RaidBosses, $acis);

// Obter o filtro selecionado pelo usuário
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
$currentTimeMillis = time() * 1000;

function shouldShowBoss($respawnTime, $filter) {
    global $currentTimeMillis;
    if ($filter == 'all') return true;
    $isDead = $respawnTime >= $currentTimeMillis;
    return ($filter == 'alive' && !$isDead) || ($filter == 'dead' && $isDead);
}

function displayBossRow($name, $level, $image, $respawnTime, $lang, $isEpic = false, $random, $fixedHour) {
    global $filter, $currentTimeMillis;
    $isDead = $respawnTime >= $currentTimeMillis;
    if (!shouldShowBoss($respawnTime, $filter)) return;
    ?>
    <tr class="<?php echo $isDead ? 'dead' : ''; ?>" style="<?php echo $isDead ? 'background-color: #2B2A36;' : ''; ?>">
        <td align="center" style="padding:0px; border-right: 1px solid #444; vertical-align: middle;" width="35%">
            <?php echo $name; ?><br />
            <div style="display: inline-block; overflow: hidden; width: auto; height: 75px; border-radius: 1px; border: 2px solid #555; <?php echo $isEpic ? 'border-radius:50%;' :""; ?>">
                <img src="<?php echo $isEpic ? './assets/images/boss/' :""; ?><?php echo $image; ?>" alt="Image" style="<?php if ($respawnTime >= $currentTimeMillis) echo 'filter: grayscale(100%);'; ?> max-width: 100%; height: auto; max-height: 100%;" />
            </div>
        </td>
        <td style="border-right: 1px solid #444; vertical-align: middle;" align="center" width="20%">
            <?php echo $level; ?>
        </td>
        <td style="border-right: 1px solid #444; vertical-align: middle;" align="center" width="45%">
            <?php
            if ($respawnTime < $currentTimeMillis) {
                echo "<font class='is_alive' style='color:#32CD32;'>" . $lang[12030] . "</font>";
            } else {
                $date = date('d/m', ($respawnTime / 1000));
				if($random == "0m") {
					$time = date('H:i:s', ($respawnTime / 1000));
				}
				else {
					$time = $fixedHour . " +- " . $random;
				}
                echo "<font style='color:orange;'>" . $lang[12029] . "</font> <br>(<font style='color:#cccccc;'>" . $date . ", " . $time . "</font>)";
            }
            ?>
        </td>
    </tr>
    <?php
}

?><h1>Boss Status</h1>
<!-- Formulário de filtro -->
<form method="GET" action="">
    <input type="hidden" name="page" value="boss" />
    <label for="filter">Filtrar por status:</label>
    <select name="filter">
        <option value="all" <?php if ($filter == 'all') echo 'selected'; ?>>Todos</option>
        <option value="alive" <?php if ($filter == 'alive') echo 'selected'; ?>>Vivos</option>
        <option value="dead" <?php if ($filter == 'dead') echo 'selected'; ?>>Mortos</option>
    </select>
    <button type="submit">Filtrar</button>
</form>
<div class='pddInner'>
    <?php echo $LANG[12115] . "<br />" . $LANG[30500] . " <b>" . date('d/m/Y', $updated) . "</b> " . $LANG[30501] . " <b>" . date('H:i', $updated) . "</b>."; ?><br /><br />
</div>
<center>
    <?php if ($nextGrandBoss): ?>
    <div style="padding: 5px; font-size: 18px; font-weight: bold; color: #e0e0e0; background-color: ; border-radius: 18px; border: 1px solid #333333;">
        Próximo Grand Boss a renascer: <span style="color: #76ff03;"><?php echo $nextGrandBoss['name']; ?></span>
    </div>
    <?php endif; ?>
    <?php if ($nextEpicBoss): ?>
    <div style="padding: 5px; font-size: 18px; font-weight: bold; color: #e0e0e0; background-color: ; border-radius: 18px; border: 1px solid #333333;">
        Próximo Epic Boss a renascer: <span style="color: #76ff03;"><?php echo $nextEpicBoss['name']; ?></span>
    </div>
    <?php endif; ?>
    <?php if ($nextRaidBoss): ?>
    <div style="padding: 5px; font-size: 18px; font-weight: bold; color: #e0e0e0; background-color: ; border-radius: 18px; border: 1px solid #333333;">
        Próximo Raid Boss a renascer: <span style="color: #76ff03;"><?php echo $nextRaidBoss['name']; ?></span> às <?php echo date('d/m/Y H:i:s', $nextRaidBoss['respawn_time'] / 1000); ?>
    </div>
    <br />
    <?php endif; ?>

    <table width="98%" height="auto" border="0" cellpadding="0" cellspacing="0">
        <tr style="background-color:#333; color:#FFF; font-size:14px; font-weight:600; text-align:center;">
            <td style="padding-top:10px;padding-bottom:12px; border-radius: 5px 0 0 0;" width="35%" align="center" nowrap="nowrap">BOSS NAME</td>
            <td style="padding-top:10px;padding-bottom:12px;" width="20%" nowrap="nowrap">LEVEL</td>
            <td style="padding-top:10px;padding-bottom:12px;" width="45%" nowrap="nowrap">STATUS</td>
        </tr>
    </table>

    <table width="98%" height="auto" border="0" cellpadding="0" cellspacing="0" align="center" style="border:1px solid #444; font-weight:400; font-size:15px; letter-spacing:-0.6px; color:#cccccc;">
    <?php
    foreach ($GrandBosses as $boss) {
        $result = mysqli_query($acis, $boss['query']);
        while ($raid = mysqli_fetch_array($result)) {
            displayBossRow($boss['name'], $boss['level'], $boss['image'], $raid['respawn_time'], $LANG, true, $boss['random'], $boss['fixedHour']);
        }
    }

    foreach ($EpicBosses as $boss) {
        $result = mysqli_query($acis, $boss['query']);
        while ($raid = mysqli_fetch_array($result)) {
            displayBossRow($boss['name'], $boss['level'], $boss['image'], $raid['respawn_time'], $LANG, true, $boss['random'], $boss['fixedHour']);
        }
    }

    foreach ($RaidBosses as $boss) {
        $result = mysqli_query($acis, $boss['query']);
        while ($raid = mysqli_fetch_array($result)) {
            displayBossRow($boss['name'], $boss['level'], $boss['image'], $raid['respawn_time'], $LANG, false, $boss['random'], 0);
        }
    }
    ?>
    </table>
</center>