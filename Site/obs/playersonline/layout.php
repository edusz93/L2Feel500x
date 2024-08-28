<?php require('private/classes/classIndex.php'); ?>
<?php require('private/seo.php'); ?>
<html lang="<?php echo $language ?>">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
	<meta http-equiv="refresh" content="30"> <!-- Atualiza a página a cada 30 segundos -->
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="keywords" content="<?php echo strtolower($server_name.', '.$server_chronicle); ?>, l2, l2ignis, l2 ignis, ignis, Lineage 2 ignis, lineage, lineage2, lineage 2, lainiege, laineage, lainiage, lineage dois, lineage ii, internacional, international, portuguese, english, espanish, espanol, espanhol, portugues, ingles, gringo, br, 1x, 5x, 10x, 30x, 50x, 70x, 100x, 150x, 200x, 300x, 1000x, free fun, diversao gratis, gratuito, gratuitamente, free fun, new server, novo servidor, o melhor servidor de lineage 2, o melhor servidor">
    <meta name="description" content="<?php echo htmlspecialchars($SEO['description'], ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Links -->
    <link rel="shortcut icon" href="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/favicon.png">
    <link rel="image_src" href="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/image_src.jpg">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/css2.css" rel="stylesheet">
    
    <!-- Title -->
    <title>Players Online | <?php echo $server_name; ?></title>
    
    <!-- Open Graph Meta Tags -->
    <meta property="fb:app_id" content="966242223397117">
    <meta property="og:title" content="<?php echo htmlspecialchars($SEO['title'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($server_name, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($SEO['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/image_src_v2.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars($SEO['description'], ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:image" content="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/favicon-300x300.jpg">
    <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($SEO['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:card" content="summary_large_image">
    
    <!-- Icons -->
    <link rel="icon" href="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/favicon-150x150.jpg" sizes="32x32">
    <link rel="icon" href="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/favicon-300x300.jpg" sizes="192x192">
    <link rel="apple-touch-icon" href="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/favicon-300x300.jpg">
    <meta name="msapplication-TileImage" content="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/favicon-300x300.jpg">

    <!-- Integration URLs -->
    <meta property="ia:markup_url" content="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/docs/markup">
    <meta property="ia:markup_url_dev" content="https://dev.<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/docs/markup">
    <meta property="ia:rules_url" content="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/docs/rules">
    <meta property="ia:rules_url_dev" content="https://dev.<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/docs/rules">
	
	<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
	</style>	
</head>
<body style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 1); color:#000000">
	<div class="topPanel-right">
		<div class="online">
			<div class="online-flex flex-c-c">
				<?php
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
				?>
				<div class="online-block <?php echo $serverStatus; ?>-block-active">
					<?php
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
								require("./private/playerson.php");
							}
							$playersOnline = $xml->players;
							$playersOnline = intval($playersOnline[0]->online);
							if ($serverStatus == 'off') {
								$playersOnline = 0;
							}
							$playersOnline = $playersOnline * $fakePlayers;
							echo ceil($playersOnline);
						}
					?>
					<span class="<?php echo $serverStatus == 'online' ? 'green-blinking' : 'color-red'; ?>">
						<?php echo ucfirst($serverStatus); ?>
					</span>
				</div>
			</div>
		</div>
	</div>
</body>
</html>