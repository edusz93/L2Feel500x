<?php
// Este script pode ser nomeado como getPlayerCount.php
$cacheFile = "./cache/playerson.xml";
$genNew = 0;
if (!file_exists($cacheFile)) {
    $genNew = 1;
} else {
    $xml = simplexml_load_file($cacheFile);
    $configs = $xml->configs;
    $updated = intval($configs->updated);
    $delay = 1;
    if (($updated + ($delay * 60)) < time()) {
        $genNew = 1;
    }
}
if ($genNew == 1) {
    require("./private/playerson.php");
}
$playersOnline = $xml->players;
$playersOnline = intval($playersOnline[0]->online);
if ($serverStatus == 'off') {
    $playersOnline = 0;
}
$playersOnline = $playersOnline * $fakePlayers;
echo ceil($playersOnline);
?>
