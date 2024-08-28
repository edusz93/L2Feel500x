// players_online.php
<?php
require_once('config.php'); // Inclua suas configurações aqui, se necessário

// Verificação do status do servidor
if ($forceServerStatus == 'on') {
    $serverStatus = 'online';
} elseif ($forceServerStatus == 'off') {
    $serverStatus = 'offline';
} else {
    $check_game = @fsockopen($serverIp, $gamePort, $errno, $errstr, 1);
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
    require("playerson.php"); // Atualiza o cache
    
    if (file_exists($cacheFile)) {
        $xml = simplexml_load_file($cacheFile);
        $playersOnline = intval($xml->players[0]->online);
        if ($serverStatus == 'offline') {
            $playersOnline = 0;
        }
        $playersOnline = $playersOnline * $fakePlayers;
    }
}

echo json_encode([
    'players_online' => ceil($playersOnline),
    'server_status' => ucfirst($serverStatus)
]);
?>
