<?php 
if(!$indexing || $dpage['bosstt'] != 1) { 
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
	['name' => 'Boss Event: Sailren', 'level' => 80, 'image' => 'sailren.jpg', 'query' => "SELECT * FROM grandboss_data WHERE boss_id = 49999"],
    ['name' => 'Queen Ant', 'level' => 80, 'image' => 'queen_ant.jpg', 'query' => "SELECT * FROM spawn_data WHERE name = 'queen_ant'"],
    ['name' => 'Core', 'level' => 80, 'image' => 'core.jpg', 'query' => "SELECT * FROM spawn_data WHERE name = 'core'"],
    ['name' => 'Orfen', 'level' => 80, 'image' => 'orfen.jpg', 'query' => "SELECT * FROM spawn_data WHERE name = 'orfen'"],
    ['name' => 'Zaken', 'level' => 80, 'image' => 'zaken.jpg', 'query' => "SELECT * FROM spawn_data WHERE name = 'zaken'"]
];

$EpicBosses = [
	['name' => 'Frintezza', 'level' => 90, 'image' => 'frintezza.jpg', 'query' => "SELECT * FROM grandboss_data WHERE boss_id = 29045"],
    ['name' => 'Baium', 'level' => 80, 'image' => 'baium.jpg', 'query' => "SELECT * FROM grandboss_data WHERE boss_id = 29020"],
    ['name' => 'Antharas', 'level' => 80, 'image' => 'Antharas.jpg', 'query' => "SELECT * FROM grandboss_data WHERE boss_id = 29019"],
    ['name' => 'Valakas', 'level' => 85, 'image' => 'valakas.jpg', 'query' => "SELECT * FROM grandboss_data WHERE boss_id = 29028"]
];

$RaidBosses = [
	['name' => 'Flame of Splendor Barakiel', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25325', 'query' => "SELECT * FROM grandboss_data WHERE boss_id = 39999"],
	['name' => 'Shilens Messenger Cabrio', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25035', 'query' => "SELECT * FROM spawn_data WHERE name = 'domb_death_cabrio'"],
	['name' => 'Death Lord Hallate', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25220', 'query' => "SELECT * FROM spawn_data WHERE name = 'hallate_the_death_lord'"],
	['name' => 'Kernon', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25054', 'query' => "SELECT * FROM spawn_data WHERE name = 'kernon'"],
	['name' => 'Longhorn Golkonda', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25126', 'query' => "SELECT * FROM spawn_data WHERE name = 'golkonda_longhorn'"],
	['name' => 'Ketras Chief Brakki', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25305', 'query' => "SELECT * FROM spawn_data WHERE name = 'ketra_chief_brakki'"],
	['name' => 'Ketras Hero Hekaton', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25299', 'query' => "SELECT * FROM spawn_data WHERE name = 'ketra_hero_hekaton'"],
	['name' => 'Ketras Commander Tayr', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25302', 'query' => "SELECT * FROM spawn_data WHERE name = 'ketra_commander_tayr'"],
	['name' => 'Varkas Commander Mos', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25312', 'query' => "SELECT * FROM spawn_data WHERE name = 'varka_commnder_mos'"],
	['name' => 'Varkas Hero Shadith', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25309', 'query' => "SELECT * FROM spawn_data WHERE name = 'varka_hero_shadith'"],
	['name' => 'Storm Winged Naga', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25229', 'query' => "SELECT * FROM spawn_data WHERE name = 'storm_winged_naga'"],
	['name' => 'Last Lesser Giant Olkuth', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25244', 'query' => "SELECT * FROM spawn_data WHERE name = 'last_lesser_olkuth'"],
	['name' => 'Death Lord Ipos', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25276', 'query' => "SELECT * FROM spawn_data WHERE name = 'ipos_the_death_lord'"],
	['name' => 'Death Lord Shax', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25282', 'query' => "SELECT * FROM spawn_data WHERE name = 'shax_the_death_lord'"],
	['name' => 'Ocean Flame Ashakiel', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25205', 'query' => "SELECT * FROM spawn_data WHERE name = 'ocean_flame_ashakiel'"],
	['name' => 'Fafurions Herald Lokness', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25198', 'query' => "SELECT * FROM spawn_data WHERE name = 'faf_herald_lokness'"],
	['name' => 'Water Dragon Seer Sheshark', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25199', 'query' => "SELECT * FROM spawn_data WHERE name = 'wdragon_priest_sheshark'"],
	['name' => 'Krokian Padisha Sobekk', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25202', 'query' => "SELECT * FROM spawn_data WHERE name = 'krokian_padisha_sobekk'"],
	['name' => 'Fire of Wrath Shuriel', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25143', 'query' => "SELECT * FROM spawn_data WHERE name = 'shuriel_fire_of_wrath'"],
	['name' => 'Last Lesser Giant Glaki', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25245', 'query' => "SELECT * FROM spawn_data WHERE name = 'last_lesser_glaki'"],
	['name' => 'Bloody Empress Decarbia', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25266', 'query' => "SELECT * FROM spawn_data WHERE name = 'bloody_empress_decarbia'"],
	['name' => 'Cherub Galaxia', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25450', 'query' => "SELECT * FROM spawn_data WHERE name = 'cherub_garacsia'"],
	['name' => 'Varkas Chief Horus', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25315', 'query' => "SELECT * FROM spawn_data WHERE name = 'varka_chief_horuth'"],
	['name' => 'Uruka', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25527', 'query' => "SELECT * FROM spawn_data WHERE name = 'uruka'"],
	['name' => 'Queen Shyeed', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25514', 'query' => "SELECT * FROM spawn_data WHERE name = 'spike_stakato_qn_shyid'"],
	['name' => 'Ember', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25319', 'query' => "SELECT * FROM spawn_data WHERE name = 'amber'"],
	['name' => 'Hestia Guardian Deity of the Hot Springs', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25293', 'query' => "SELECT * FROM spawn_data WHERE name = 'geyser_guardian_hestia'"],
	['name' => 'Palatanos of Horrific Power', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25249', 'query' => "SELECT * FROM spawn_data WHERE name = 'bloody_tree_vermilion'"],
	['name' => 'Flamestone Giant', 'level' => 80, 'image' => 'https://l2j.ru/npc_picture.php?id=25524', 'query' => "SELECT * FROM spawn_data WHERE name = 'flame_stone_golem'"]
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
?>
<?php require('private/classes/classIndex.php'); ?>
<?php require('private/seo.php'); ?>
<html lang="<?php echo $language ?>" style="background-color: #000000">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1800"> <!-- Atualiza a página a cada 30 segundos -->
    <!-- Links -->
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/css2.css" rel="stylesheet">
    <!-- Title -->
    <title>Boss Status | <?php echo $server_name; ?></title>
    <!-- CSS Styles -->
    <style>
        .boss-info {
            padding: 0px;
            font-size: 20px;
            font-weight: bold;
            color: #e0e0e0;
            margin-bottom: 10px;
            transition: all 0.3s ease-in-out;
        }
        .boss-info img {
            width: 60px;
            height: 50px;
            vertical-align: middle;
            margin-right: 10px;
			border-radius:50%;
        }
        .boss-info span {
            color: #76ff03;
        }
    </style>
    <!-- JavaScript -->
    <script>
        function startCountdown(respawnTime, elementId) {
            function updateCountdown() {
                var now = Date.now();
                var timeLeft = respawnTime - now;
                if (timeLeft <= 0) {
                    document.getElementById(elementId).innerText = "Agora!";
                } else {
                    var hours = Math.floor(timeLeft / (1000 * 60 * 60));
                    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                    document.getElementById(elementId).innerText = hours + "h " + minutes + "m " + seconds + "s";
                }
            }
            setInterval(updateCountdown, 1000);
            updateCountdown();
        }
    </script>
</head>
<body style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 1); color:#000000">
<div style="text-align: left;">
    <div id="clock"></div>
    <?php if ($nextGrandBoss): ?>
    <div class="boss-info grand-boss">
        <img src="./assets/images/boss/<?php echo $nextGrandBoss['image']; ?>" alt="<?php echo $nextGrandBoss['name']; ?>">
        <span><?php echo $nextGrandBoss['name']; ?></span>
    </div>
    <?php endif; ?>

    <?php if ($nextEpicBoss): ?>
    <div class="boss-info epic-boss">
        <img src="./assets/images/boss/<?php echo $nextEpicBoss['image']; ?>" alt="<?php echo $nextEpicBoss['name']; ?>">
        <span><?php echo $nextEpicBoss['name']; ?></span>
    </div>
    <?php endif; ?>

    <?php if ($nextRaidBoss): ?>
    <div class="boss-info raid-boss">
        <img src="<?php echo $nextRaidBoss['image']; ?>" alt="<?php echo $nextRaidBoss['name']; ?>">
        <span><?php echo $nextRaidBoss['name']; ?></span> em <span id="countdown-raidboss"></span>
    </div>
    <script>startCountdown(<?php echo $nextRaidBoss['respawn_time']; ?>, 'countdown-raidboss');</script>
    <?php endif; ?>
</div>
</body>
</html>