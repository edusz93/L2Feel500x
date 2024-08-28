// players_online.php
<?php
$serverStatus = 'offline';
// Verificação do status do servidor
if ($forceServerStatus == 'on') {
    $serverStatus = 'online';
} elseif ($forceServerStatus == 'off') {
    $serverStatus = 'offline';
} else {
    $check_game = @fsockopen(''.$serverIp.'', ''.$gamePort.'', $errno, $errstr, 1);
    if ($check_game) {
        $serverStatus = 'online';
    } else {
        $serverStatus = 'offline';
    }
}

// Verificação de jogadores online
$playersOnline = 0;
if ($showPlayersOn == '1') {
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
        require("private/playerson.php");
    }
    $playersOnline = $xml->players;
    $playersOnline = intval($playersOnline[0]->online);
    if ($serverStatus == 'offline') {
        $playersOnline = 0;
    }
    $playersOnline = $playersOnline * $fakePlayers;
}

echo json_encode([
    'players_online' => ceil($playersOnline),
    'server_status' => ucfirst($serverStatus)
]);
?>