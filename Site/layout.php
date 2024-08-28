<?php require('private/classes/classIndex.php'); ?>
<?php require('private/seo.php'); ?>
<html lang="<?php echo $language ?>">
<head>
   <!-- Meta Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '836750097965439');
		fbq('track', 'PageView');
	</script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16628570268">
	</script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-16628570268');
	</script>
	<noscript>
		<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=836750097965439&ev=PageView&noscript=1"/>
	</noscript>
    
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="keywords" content="<?php echo strtolower($server_name.', '.$server_chronicle); ?>, l2, l2ignis, l2 ignis, ignis, Lineage 2 ignis, lineage, lineage2, lineage 2, lainiege, laineage, lainiage, lineage dois, lineage ii, internacional, international, portuguese, english, espanish, espanol, espanhol, portugues, ingles, gringo, br, 1x, 5x, 10x, 30x, 50x, 70x, 100x, 150x, 200x, 300x, 1000x, free fun, diversao gratis, gratuito, gratuitamente, free fun, new server, novo servidor, o melhor servidor de lineage 2, o melhor servidor">
    <meta name="description" content="<?php echo htmlspecialchars($SEO['description'], ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Links -->
    <link rel="shortcut icon" href="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/favicon.png">
    <link rel="image_src" href="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/image_src.jpg">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/css2.css" rel="stylesheet">
    
    <!-- Title -->
    <title><?php echo htmlspecialchars($SEO['title'], ENT_QUOTES, 'UTF-8'); ?></title>
    
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
    .vote {
        justify-content: center;
        background-color: #21202C; /* Fundo cinza escuro */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        padding:20px;
    }
    
    .vote a {
        text-align: center;
        transition: transform 0.3s;
    }
    
    .vote a:hover {
        transform: scale(1.05);
    }
    
    .vote img {
        width: 25.67%;
        height: 60px; /* Ajuste de altura automático para manter proporção */
        transition: opacity 0.3s;
		padding: 5px;
    }
    
    .vote img:hover {
        opacity: 0.7;
    }
    
    .vote a {
        color: #ffffff; /* Cor do texto */
    }
    </style>


</head>
<body style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 1); color:#FFFFFF">
	<div class="smoke"></div>
		<div class="wrapper">
			<div class="topPanel flex-s-c">
				<div class="btn-mobile btn-drop" data-class="topPanel-left">
					<span></span>
					<span></span>
					<span></span>
				</div>
			<div class="topPanel-left">
				<div class="mobile-menu">
					<ul>
						<li><a href="./">Home</a></li>
						<li><a href="./ucp/?page=register"><?php echo $LANG[12032]; ?></a></li>
						<li><a href="./?page=download">Download</a></li>
						<li><a href="./?page=info"><?php echo $LANG[12996]; ?></a></li>
						<li><a href="https://chat.whatsapp.com/IbwqkEyLpmd97xmgauF8No" target="_blank">WhatsApp</a></li>
					</ul>
					<div class="atualstudioCountdown" style="padding-top:20%;"><!-- Countdown INI -->
						<?php if($counterActived == 1) { $inauguracao = mktime($cHor,$cMin,0,$cMes,$cDia,$cAno); if(time() < $inauguracao) { ?>
						<div style="font-size: 20px; text-align:center; padding: 0 0 0 25px;">
							<?php echo $cDia." ".date('F', $inauguracao).", ".$cAno." &bullet; ".$cHor.":".$cMin; ?> <span style='font-size:11px; font-weight:bold; font-style:italic; vertical-align: super;'>(UTC <?php echo $cGMT; ?>)</span>
						</div>
						<link href="css/soon.min.css" rel="stylesheet" />
						<div class="atualstudioCountdown">
							<style>
								@import url(http://fonts.googleapis.com/css?family=Quicksand);
								#soon-glow { font-family: 'Quicksand', sans-serif; color: #FFF; background: transparent; text-transform:lowercase; }
								#soon-glow .soon-label { color: #FFF; text-shadow:0 0 .25rem rgba(0,0,0,.75); }
								#soon-glow .soon-ring-progress { color: #FDFCC4; background-color:rgba(255,255,255,.15); }
								#soon-glow>.soon-group { margin-bottom:-.5em; }
								.soon[data-layout*="group"] { padding-top: 20px; }
								.soon[data-face*="glow"] .soon-separator, .soon[data-face*="glow"] .soon-slot-inner { text-shadow: 0 0 .125em rgba(0,0,0,.75); }
							</style>
							<div class="soon" id="soon-glow" data-layout="group overlap" data-face="slot doctor glow" data-padding="false" data-scale-max="l" data-visual="ring color-light width-thin glow-progress length-70 gap-0 offset-65"></div>
						</div>
						<script>(function(){ var i=0,soons = document.querySelectorAll('.atualstudioCountdown .soon'),l=soons.length; for(;i<l;i++) { soons[i].setAttribute('data-due','<?php echo date("Y-m-d\TH:i:s", mktime(($cHor+$sumH), $cMin, 0, $cMes, $cDia, $cAno)); ?>'); soons[i].setAttribute('data-now','<?php echo date("Y-m-d\TH:i:s"); ?>'); } }());</script>
						<script src="js/soon.min.js" data-auto="false"></script><script>var soons = document.querySelectorAll('.atualstudioCountdown .soon'); for(var i=0;i<soons.length;i++) { Soon.create(soons[i]); }</script>
						<?php } } ?>
					</div><!-- Countdown  FIM -->
				</div>
				<nav class="menu-wrapper">
					<ul class="menu menu-main">
						<li class="menu__item"><a href="./" class="menu__link">Home</a></li>
						<li class="menu__item"><a href="./ucp/?page=register" class="menu__link"><?php echo $LANG[12032]; ?></a></li>
						<li class="menu__item"><a href="./?page=download" class="menu__link">Download</a></li>
						<li class="menu__item"><a href="./?page=info" class="menu__link"><?php echo $LANG[12996]; ?></a></li>
						<li class="menu__item"><a href="https://chat.whatsapp.com/IbwqkEyLpmd97xmgauF8No" target="_blank" class="menu__link">WhatsApp</a></li>
						<li class="menu__item"></li>
					</ul>
				</nav>
				<div class="langBlock parent_block" style="left:200px;">
					<div class="langBlock-active flex-c buttonDrop" data-class="langBlock-dropdown">
						<?php
						// Define o caminho da imagem baseado no idioma atual
						switch ($language) {
							case 'en':
								echo '<img src="./assets/images/english.png" alt="English">';
								break;
							case 'es':
								echo '<img src="./assets/images/espanol.png" alt="Español">';
								break;
							case 'pt':
							default:
								echo '<img src="./assets/images/portuguese.png" alt="Português">';
								break;
						}
						?>
						<span></span>
					</div>
					
					<?php $addp = "&url=https://".urlencode($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?>
					
					<ul class="langBlock-dropdown toggled_block">
						<?php if ($language !== 'en') { ?>
						<li>
							<a href='?changelang=en' class='en' title='English' onclick="document.location.replace('./index.php?changelang=en<?php echo $addp; ?>');return false;">
								<img src="./assets/images/english.png" alt="English">
							</a>
						</li>
						<?php } ?>
						<?php if ($language !== 'es') { ?>
						<li>
							<a href='?changelang=es' class='es' title='Español' onclick="document.location.replace('./index.php?changelang=es<?php echo $addp; ?>');return false;">
								<img src="./assets/images/espanol.png" alt="Español">
							</a>
						</li>
						<?php } ?>
						<?php if ($language !== 'pt') { ?>
						<li>
							<a href='?changelang=pt' class='pt' title='Português' onclick="document.location.replace('./index.php?changelang=pt<?php echo $addp; ?>');return false;">
								<img src="./assets/images/portuguese.png" alt="Português">
							</a>
						</li>
						<?php } ?>
					</ul>
				</div><!-- langBlock -->
			</div><!-- topPanel-left -->
			<div class="topPanel-right">
				<a href="./ucp" class="user-enter"><i class="icon icon-enter"></i> <?php echo $LANG[40000]; ?></a>
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
		</div><!--topPanel-->
		<header class="header flex-s-c">
			<div class="hero hero_1">
			</div>
			<div class="logo">
				<a href="./"><img src="./assets/images/logo.png" alt="logo"></a>
			</div>
			<div class="headerInfo">
				<div class="atualstudioCountdown"><!-- Countdown INI -->
					<?php if($counterActived == 1) { $inauguracao = mktime($cHor,$cMin,0,$cMes,$cDia,$cAno); if(time() < $inauguracao) { ?>
					<div style="font-size: 20px; text-align:center; padding: 0 0 0 25px;">
						<?php echo $cDia." ".date('F', $inauguracao).", ".$cAno." &bullet; ".$cHor.":".$cMin; ?> <span style='font-size:11px; font-weight:bold; font-style:italic; vertical-align: super;'>(UTC <?php echo $cGMT; ?>)</span>
					</div>
					<link href="css/soon.min.css" rel="stylesheet" />
					<style>
						@import url(http://fonts.googleapis.com/css?family=Quicksand);
						#soon-glow { font-family: 'Quicksand', sans-serif; color: #FFF; background: transparent; text-transform:lowercase; }
						#soon-glow .soon-label { color: #FFF; text-shadow:0 0 .25rem rgba(0,0,0,.75); }
						#soon-glow .soon-ring-progress { color: #FDFCC4; background-color:rgba(255,255,255,.15); }
						#soon-glow>.soon-group { margin-bottom:-.5em; }
						.soon[data-layout*="group"] { padding-top: 20px; }
						.soon[data-face*="glow"] .soon-separator, .soon[data-face*="glow"] .soon-slot-inner { text-shadow: 0 0 .125em rgba(0,0,0,.75); }
					</style>
					<div class="soon" id="soon-glow" data-layout="group overlap" data-face="slot doctor glow" data-padding="false" data-scale-max="1" data-visual="ring color-light width-thin glow-progress length-70 gap-0 offset-65"></div>
					<script>(function(){ var i=0,soons = document.querySelectorAll('.atualstudioCountdown .soon'),l=soons.length; for(;i<l;i++) { soons[i].setAttribute('data-due','<?php echo date("Y-m-d\TH:i:s", mktime(($cHor+$sumH), $cMin, 0, $cMes, $cDia, $cAno)); ?>'); soons[i].setAttribute('data-now','<?php echo date("Y-m-d\TH:i:s"); ?>'); } }());</script>
					<script src="js/soon.min.js" data-auto="false"></script><script>var soons = document.querySelectorAll('.atualstudioCountdown .soon'); for(var i=0;i<soons.length;i++) { Soon.create(soons[i]); }</script>
					<?php } } ?>
				</div><!-- Countdown  FIM -->
				<div class="headerInfo-title">
					<?php echo $LANG[12121]; ?>
				</div>
			<div class="headerInfo-text">
				<?php echo $LANG[12122]; ?>
			</div>
				<div class="headerInfo-button">
					<a href="./?page=download" class="button"><i class="icon icon-battle"></i> <?php echo $LANG[12118] ?></a>
				</div>
			</div>
			<div class="sparks sparks_2">
				<div class="spark_1"></div>
				<div class="spark_2"></div>
				<div class="spark_3"></div>
				<div class="spark_4 spark-big"></div>
				<div class="spark_5 spark-big"></div>
			</div>
		</header>
		<div class="main">
			<div class="sidebar">
				<div class="top">
					<div class="tabs tabsBlock">
						<ul class="tabs-caption tabs-button">
							<li class="active">Top PvP</li>
							<li>Top Pk</li>
							<li>Top Clan</li>
							<?php require('private/includes/rankoptions.php'); ?>
						</ul>
						<div class="tabBlock">
							<div class="tabs-content active tabContent">
								<div class="table">
									<?php
									$cacheFile = "cache/toppvp.xml";
									$genNew = 0;

									// Verifica se o arquivo de cache não existe
									if (!file_exists($cacheFile)) {
										$genNew = 1;
									} else {
										// Carrega o arquivo XML existente
										$xml = simplexml_load_file($cacheFile);
										if ($xml === false) {
											die('' . $cacheFile);
										}

										$configs = $xml->configs;
										$updated = intval($configs->updated);
										$rcount = intval($configs->rcount);

										// Verifica se o cache precisa ser atualizado
										$delay = $cacheDelayMin; // Suponho que $cacheDelayMin seja definido em outro lugar
										if (($updated + ($delay * 60)) < time()) {
											$genNew = 1;
										}

										// Verifica se o número de registros no cache é o esperado
										if ($rcount != $countTopPVP) {
											$genNew = 1;
										}
									}

									// Verifica se a exibição do ranking está desativada até uma data específica
									$dateReg = mktime($reg['hr'], $reg['min'], 0, $reg['mes'], $reg['dia'], $reg['ano']);
									if ($showRankReg == 0 && time() < $dateReg) {
										$genNew = 1;
									}

									// Se necessário, gera um novo arquivo de cache
									if ($genNew) {
										// Cria diretório cache se não existir
										if (!file_exists("cache")) {
											@mkdir("cache", 0775, true);
											@chmod("cache", 0775);
										}

										// Cria index.html dentro do diretório cache se não existir
										if (!file_exists("cache/index.html")) {
											$secIndexFile = fopen("cache/index.html", "w+");
											@fclose($secIndexFile);
										}

										// Cria .htaccess dentro do diretório cache se não existir
										if (!file_exists("cache/.htaccess")) {
											$secHtacsFile = fopen("cache/.htaccess", "w+");
											@fwrite($secHtacsFile, "Options -Indexes\ndeny from all");
											@fclose($secHtacsFile);
										}

										// Abre o arquivo de cache para escrita
										$wFile = fopen($cacheFile, "w+");
										if ($wFile === false) {
											die('Não foi possível abrir o arquivo ' . $cacheFile . ' para escrita.');
										}

										// Cria o conteúdo do arquivo XML
										$updated = time();
										$line = "\n<configs>\n<atualstudio>Cache script by Atualstudio.com</atualstudio>\n<updated>" . $updated . "</updated>\n<delay>" . $cacheDelayMin . "</delay>\n<rcount>" . $countTopPVP . "</rcount>\n</configs>";

										// Verifica se deve exibir o ranking
										if ($showRankReg == 1 || ($showRankReg == 0 && time() > $dateReg)) {
											require_once('private/classes/classStats.php');

											// Chama a função para obter os dados do ranking de PvP
											$query = Stats::TopPvP($countTopPVP);

											// Verifica se há dados retornados
											if (count($query) > 0) {
												// Itera sobre os resultados e cria as linhas no XML
												foreach ($query as $key => $data) {
													$dias = intval($data['onlinetime'] / 86400);
													$marcador = $data['onlinetime'] % 86400;
													$hora = intval($marcador / 3600);
													$marcador = $marcador % 3600;
													$minuto = intval($marcador / 60);

													$line .= "\n<line>\n";
													$line .= "<pos>" . ($key + 1) . "</pos>\n";
													$line .= "<name>" . $data['char_name'] . "</name>\n";
													$line .= "<clan>" . (empty($data['clan_name']) ? '-' : $data['clan_name']) . "</clan>\n";
													$line .= "<pvp>" . $data['pvpkills'] . "</pvp>\n";
													$line .= "<pk>" . $data['pkkills'] . "</pk>\n";
													$line .= "<otdays>" . $dias . "</otdays>\n";
													$line .= "<othrs>" . $hora . "</othrs>\n";
													$line .= "<otmin>" . $minuto . "</otmin>\n";
													$line .= "</line>";
												}
											} else {
												// Caso não haja dados, marca para excluir o cache
												$deleteCache = 1;
											}
										} else {
											// Caso o ranking não deva ser exibido, marca para excluir o cache
											$deleteCache = 1;
										}

										// Escreve o conteúdo no arquivo XML
										if (!@fwrite($wFile, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<ranking>" . $line . "\n</ranking>")) {
											die('' . $cacheFile);
										}
										@fclose($wFile);

										// Verifica se deve excluir o cache
										if (isset($deleteCache) && file_exists($cacheFile)) {
											unlink($cacheFile);
										}
									}
									?>
									<?php
									$xml = @simplexml_load_file("cache/toppvp.xml");
									if ($xml === false) {
										echo "";
									} else {
										$line = @$xml->line;

										// Definindo o número máximo de jogadores a serem exibidos
										$asideRankCount = 10;

										if (count($line) < $asideRankCount) {
											$asideRankCount = count($line);
										}

										if ($asideRankCount > 0) {
											for ($i = 0; $i < $asideRankCount; $i++) {
												$pos = $line[$i]->pos;
												$name = $line[$i]->name;
												$pvp = $line[$i]->pvp;

												echo '<div class="table-row';
												if ($i < 3) {
													echo ' table-row-top';
												}
												echo '">
													<div class="table-td number">
														<span class="n-top-' . $pos . '">' . $pos . '</span>
													</div>
													<div class="table-td name">
														<a href="#">' . $name . '</a>
													</div>
													<div class="table-td points">
														' . $pvp . '
													</div>
												</div>';
											}
										} else {
											for ($i = 1; $i <= 3; $i++) {
												echo '<div class="table-row">
													<div class="table-td number">
														<span>' . $i . '</span>
													</div>
													<div class="table-td name">
														<a href="#">Player</a>
													</div>
													<div class="table-td points">
														0
													</div>
												</div>';
											}
										}
									}
									?>
								</div>
							</div>
							<div class="tabs-content tabContent">
								<div class="table">
									<?php
									$cacheFile = "cache/toppk.xml";
									$genNew = 0;

									// Verifica se o arquivo de cache não existe
									if (!file_exists($cacheFile)) {
										$genNew = 1;
									} else {
										// Carrega o arquivo XML existente
										$xml = simplexml_load_file($cacheFile);
										if ($xml === false) {
											die('' . $cacheFile);
										}

										$configs = $xml->configs;
										$updated = intval($configs->updated);
										$rcount = intval($configs->rcount);

										// Verifica se o cache precisa ser atualizado
										$delay = $cacheDelayMin; // Suponho que $cacheDelayMin seja definido em outro lugar
										if (($updated + ($delay * 60)) < time()) {
											$genNew = 1;
										}

										// Verifica se o número de registros no cache é o esperado
										if ($rcount != $countTopPK) {
											$genNew = 1;
										}
									}

									// Verifica se a exibição do ranking está desativada até uma data específica
									$dateReg = mktime($reg['hr'], $reg['min'], 0, $reg['mes'], $reg['dia'], $reg['ano']);
									if ($showRankReg == 0 && time() < $dateReg) {
										$genNew = 1;
									}

									// Se necessário, gera um novo arquivo de cache
									if ($genNew) {
										// Cria diretório cache se não existir
										if (!file_exists("cache")) {
											@mkdir("cache", 0775, true);
											@chmod("cache", 0775);
										}

										// Cria index.html dentro do diretório cache se não existir
										if (!file_exists("cache/index.html")) {
											$secIndexFile = fopen("cache/index.html", "w+");
											@fclose($secIndexFile);
										}

										// Cria .htaccess dentro do diretório cache se não existir
										if (!file_exists("cache/.htaccess")) {
											$secHtacsFile = fopen("cache/.htaccess", "w+");
											@fwrite($secHtacsFile, "Options -Indexes\ndeny from all");
											@fclose($secHtacsFile);
										}

										// Abre o arquivo de cache para escrita
										$wFile = fopen($cacheFile, "w+");
										if ($wFile === false) {
											die('Não foi possível abrir o arquivo ' . $cacheFile . ' para escrita.');
										}

										// Cria o conteúdo do arquivo XML
										$updated = time();
										$line = "\n<configs>\n<atualstudio>Cache script by Atualstudio.com</atualstudio>\n<updated>" . $updated . "</updated>\n<delay>" . $cacheDelayMin . "</delay>\n<rcount>" . $countTopPK . "</rcount>\n</configs>";

										// Verifica se deve exibir o ranking
										if ($showRankReg == 1 || ($showRankReg == 0 && time() > $dateReg)) {
											require_once('private/classes/classStats.php');

											// Chama a função para obter os dados do ranking de PK
											$query = Stats::TopPk($countTopPK);

											// Verifica se há dados retornados
											if (count($query) > 0) {
												// Itera sobre os resultados e cria as linhas no XML
												foreach ($query as $key => $data) {
													$dias = intval($data['onlinetime'] / 86400);
													$marcador = $data['onlinetime'] % 86400;
													$hora = intval($marcador / 3600);
													$marcador = $marcador % 3600;
													$minuto = intval($marcador / 60);

													$line .= "\n<line>\n";
													$line .= "<pos>" . ($key + 1) . "</pos>\n";
													$line .= "<name>" . $data['char_name'] . "</name>\n";
													$line .= "<clan>" . (empty($data['clan_name']) ? '-' : $data['clan_name']) . "</clan>\n";
													$line .= "<pvp>" . $data['pvpkills'] . "</pvp>\n";
													$line .= "<pk>" . $data['pkkills'] . "</pk>\n";
													$line .= "<otdays>" . $dias . "</otdays>\n";
													$line .= "<othrs>" . $hora . "</othrs>\n";
													$line .= "<otmin>" . $minuto . "</otmin>\n";
													$line .= "</line>";
												}
											} else {
												// Caso não haja dados, marca para excluir o cache
												$deleteCache = 1;
											}
										} else {
											// Caso o ranking não deva ser exibido, marca para excluir o cache
											$deleteCache = 1;
										}

										// Escreve o conteúdo no arquivo XML
										if (!@fwrite($wFile, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<ranking>" . $line . "\n</ranking>")) {
											die('' . $cacheFile);
										}
										@fclose($wFile);

										// Verifica se deve excluir o cache
										if (isset($deleteCache) && file_exists($cacheFile)) {
											unlink($cacheFile);
										}
									}
									?>								
									<?php
									$xml = @simplexml_load_file("cache/toppk.xml");
									if ($xml === false) {
										echo "";
									} else {
										$line = @$xml->line;

										// Definindo o número máximo de jogadores a serem exibidos
										$asideRankCount = 10;

										if (count($line) < $asideRankCount) {
											$asideRankCount = count($line);
										}

										if ($asideRankCount > 0) {
											for ($i = 0; $i < $asideRankCount; $i++) {
												$pos = $line[$i]->pos;
												$name = $line[$i]->name;
												$pk = $line[$i]->pk;

												echo '<div class="table-row';
												if ($i < 3) {
													echo ' table-row-top';
												}
												echo '">
													<div class="table-td number">
														<span class="n-top-' . $pos . '">' . $pos . '</span>
													</div>
													<div class="table-td name">
														<a href="#">' . $name . '</a>
													</div>
													<div class="table-td points">
														' . $pk . '
													</div>
												</div>';
											}
										} else {
											for ($i = 1; $i <= 3; $i++) {
												echo '<div class="table-row">
													<div class="table-td number">
														<span>' . $i . '</span>
													</div>
													<div class="table-td name">
														<a href="#">Player</a>
													</div>
													<div class="table-td points">
														0
													</div>
												</div>';
											}
										}
									}
									?>
								</div>
							</div>
							<div class="tabs-content tabContent">
								<div class="table">
									<?php
									$cacheFile = "cache/topclan.xml";
									$genNew = 0;

									// Verifica se o arquivo de cache não existe
									if (!file_exists($cacheFile)) {
										$genNew = 1;
									} else {
										// Carrega o arquivo XML existente
										$xml = simplexml_load_file($cacheFile);
										if ($xml === false) {
											die('' . $cacheFile);
										}

										$configs = $xml->configs;
										$updated = intval($configs->updated);
										$rcount = intval($configs->rcount);

										// Verifica se o cache precisa ser atualizado
										$delay = $cacheDelayMin; // Suponho que $cacheDelayMin seja definido em outro lugar
										if (($updated + ($delay * 60)) < time()) {
											$genNew = 1;
										}

										// Verifica se o número de registros no cache é o esperado
										if ($rcount != $countTopCLAN) {
											$genNew = 1;
										}
									}

									// Verifica se a exibição do ranking está desativada até uma data específica
									$dateReg = mktime($reg['hr'], $reg['min'], 0, $reg['mes'], $reg['dia'], $reg['ano']);
									if ($showRankReg == 0 && time() < $dateReg) {
										$genNew = 1;
									}

									// Se necessário, gera um novo arquivo de cache
									if ($genNew) {
										// Cria diretório cache se não existir
										if (!file_exists("cache")) {
											@mkdir("cache", 0775, true);
											@chmod("cache", 0775);
										}

										// Cria index.html dentro do diretório cache se não existir
										if (!file_exists("cache/index.html")) {
											$secIndexFile = fopen("cache/index.html", "w+");
											@fclose($secIndexFile);
										}

										// Cria .htaccess dentro do diretório cache se não existir
										if (!file_exists("cache/.htaccess")) {
											$secHtacsFile = fopen("cache/.htaccess", "w+");
											@fwrite($secHtacsFile, "Options -Indexes\ndeny from all");
											@fclose($secHtacsFile);
										}

										// Abre o arquivo de cache para escrita
										$wFile = fopen($cacheFile, "w+");
										if ($wFile === false) {
											die('Não foi possível abrir o arquivo ' . $cacheFile . ' para escrita.');
										}

										// Cria o conteúdo do arquivo XML
										$updated = time();
										$line = "\n<configs>\n<atualstudio>Cache script by Atualstudio.com</atualstudio>\n<updated>" . $updated . "</updated>\n<delay>" . $cacheDelayMin . "</delay>\n<rcount>" . $countTopCLAN . "</rcount>\n</configs>";

										// Verifica se deve exibir o ranking
										if ($showRankReg == 1 || ($showRankReg == 0 && time() > $dateReg)) {
											require_once('private/classes/classStats.php');

											// Chama a função para obter os dados do ranking de Clãs
											$query = Stats::TopClan($countTopCLAN);

											// Verifica se há dados retornados
											if (count($query) > 0) {
												// Itera sobre os resultados e cria as linhas no XML
												foreach ($query as $key => $data) {
													$line .= "\n<line>\n";
													$line .= "<pos>" . ($key + 1) . "</pos>\n";
													$line .= "<name>" . $data['clan_name'] . "</name>\n";
													$line .= "<leader>" . $data['char_name'] . "</leader>\n";
													$line .= "<members>" . $data['membros'] . "</members>\n";
													$line .= "<ally>" . (empty($data['ally_name']) ? '-' : $data['ally_name']) . "</ally>\n";
													$line .= "<level>" . $data['clan_level'] . "</level>\n";
													$line .= "<reputation>" . $data['reputation_score'] . "</reputation>\n";
													$line .= "</line>";
												}
											} else {
												// Caso não haja dados, marca para excluir o cache
												$deleteCache = 1;
											}
										} else {
											// Caso o ranking não deva ser exibido, marca para excluir o cache
											$deleteCache = 1;
										}

										// Escreve o conteúdo no arquivo XML
										if (!@fwrite($wFile, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<ranking>" . $line . "\n</ranking>")) {
											die('' . $cacheFile);
										}
										@fclose($wFile);

										// Verifica se deve excluir o cache
										if (isset($deleteCache) && file_exists($cacheFile)) {
											unlink($cacheFile);
										}
									}
									?>								
									<?php
									$xml = @simplexml_load_file("cache/topclan.xml");
									if ($xml === false) {
										echo "";
									} else {
										$line = @$xml->line;

										// Definindo o número máximo de clãs a serem exibidos
										$asideRankCount = 10;

										if (count($line) < $asideRankCount) {
											$asideRankCount = count($line);
										}

										if ($asideRankCount > 0) {
											for ($i = 0; $i < $asideRankCount; $i++) {
												$pos = $line[$i]->pos;
												$name = $line[$i]->name;
												$level = $line[$i]->level;

												echo '<div class="table-row';
												if ($i < 3) {
													echo ' table-row-top';
												}
												echo '">
													<div class="table-td number">
														<span class="n-top-' . $pos . '">' . $pos . '</span>
													</div>
													<div class="table-td name">
														<a href="#">' . $name . '</a>
													</div>
													<div class="table-td points">
														' . $level . ' lvl
													</div>
												</div>';
											}
										} else {
											for ($i = 1; $i <= 3; $i++) {
												echo '<div class="table-row">
													<div class="table-td number">
														<span>' . $i . '</span>
													</div>
													<div class="table-td name">
														<a href="#">Clan</a>
													</div>
													<div class="table-td points">
														0 lvl
													</div>
												</div>';
											}
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div><!--top-->
				<div class="vote">
					<h1>Vote</h1>
				    <center>
				        <!-- Begin L2jBrasil -->
                        <a href="//top.l2jbrasil.com/index.php?a=in&u=l2ignis" target="_blank">
                            <img src="//top.l2jbrasil.com/button.php?u=l2ignis" alt="Top L2JBrasil  de Servidores de   Lineage2 " border="0" width="32%" height="120px"/>
                        </a>
                        <!-- End L2jBrasil -->				    
						<!-- Begin HopZone.Eu code -->
						<a href="https://hopzone.eu/vote/130" target="_blank">
						<img src="https://hopzone.eu/uploads/pages_media/2_banner-1.png" alt="Vote for us in HopZone.Eu"  width="100%"/>
						</a>
						<!-- End HopZone.Eu code -->
                        <!-- Begin hotservers -->
                        <a href="https://hotservers.org/servers/vote/294" target='_blank'>
                            <img src="https://hotservers.org/voting-banner-image/294/assets/img/voting-banners/140x120_static/140x120_2024_01_30.png" alt="Vote for our sever on Hotservers.org" style="border:0" width="32%" height="120px">
                        </a>
                        <!-- End hotservers -->                    
                        <!-- Begin 4teambr -->
                        <a href="https://top.4teambr.com/index.php?a=in&u=l2ignis" target="_blank">
                            <img src="./images/4teambr.png" alt="4TOP Servers" width="32%" height="120px"/>
                        </a>
                        <!-- End 4teambr -->
                        <!-- Begin l2votes -->
                        <a href='https://l2votes.com/votes.php?sid=753' target='_blank' title='l2votes.com'>
                            <img alt='image' title='image' alt='https://l2votes.com/votes.php?sid=753' src='https://l2votes.com/images/logos/l2votes-1.jpg' width="32%" height="120px"/>
                        </a>
                        <!-- End l2votes -->
                        <!-- Begin hotservers -->
                        <a href="https://l2rankzone.com/lineage2-servers/l2ignis/219/vote" target="_blank" title="l2rankzone lineage 2 private l2servers">
                            <img src="https://files.l2rankzone.com/banners/l2rankzone-l2servers-l2top-v2.png" alt="l2rankzone lineage 2 private l2servers" width="32%" height="120px"/>
                        </a>
                        <!-- End hotservers -->
                        <h4 style="opacity:0.6;">Para receber recompensa após votar:<br> .hopzone .l2jbrasil .l2votes .top4teambr</h4>
				    </center>
				</div>
				<br><br>
				<div class="discordBlock">
					<iframe src="https://discord.com/widget?id=1012356880191983616&theme=dark" width="100%" height="287" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
				</div><!--discordBlock-->
			</div>
<?php if ($p != 'index'): ?>
    <div class="content">
        <?php require('pages/'.$p.'.php'); ?>
    </div>
<?php else: ?>
    <div class="news">
        <div class="news-title">
            <span><?php echo $LANG[13001]; ?></span>
        </div>
        <?php
        $news = Index::News(0, $inewsCount); // Recupera as notícias
        $totalNews = count($news);
        if ($totalNews > 0) {
            $newsBlock = $news[0]; // Primeira notícia
            $smallNewsBlocks = array_slice($news, 1, 2); // Segunda e terceira notícias
            // Primeira notícia principal
            $newsImage = ((strlen(trim($newsBlock['img'])) > 0) ? (file_exists($dir_newsimg.trim($newsBlock['img'])) ? $dir_newsimg.trim($newsBlock['img']) : 'assets/images/no-img-new.jpg') : 'assets/images/no-img-new.jpg');
            $newTxt = strip_tags(($language == 'en' && strlen(trim($newsBlock['content_en'])) > 0 ? trim($newsBlock['content_en']) : ($language == 'es' && strlen(trim($newsBlock['content_es'])) > 0 ? trim($newsBlock['content_es']) : trim($newsBlock['content_pt']))));
            $newTitle = ($language == 'en' && strlen(trim($newsBlock['title_en'])) > 0 ? trim($newsBlock['title_en']) : ($language == 'es' && strlen(trim($newsBlock['title_es'])) > 0 ? trim($newsBlock['title_es']) : $newsBlock['title_pt']));
            ?>
            <div class="newsBlock" style="background-image: url(<?php echo $newsImage; ?>);">
                <div class="newsBlock-date">
                    <?php echo date('d', $newsBlock['post_date']); ?> <span><?php echo strtoupper(date('M', $newsBlock['post_date'])); ?></span>
                </div>
                <div class="newsBlock-title">
                    <a href="./?page=news&id=<?php echo $newsBlock['nid']; ?>"><?php echo $newTitle; ?></a>
                </div>
                <div class="newsBlock-text">
                    <?php echo trim(substr($newTxt, 0, 180)).(strlen($newTxt) > 180 ? '...' : ''); ?>
                </div>
                <div class="newsBlock-button">
                    <a href="./?page=news&id=<?php echo $newsBlock['nid']; ?>" class="button button-white button-small"><?php echo $LANG[12991]; ?></a>
                </div>
            </div>
            <div class="newsBlockFlex">
                <?php
                // Primeira notícia pequena
                $smallNews = $smallNewsBlocks[0];
                $newsImage = 'assets/images/no-img-new-small.jpg'; // Imagem específica
                $newTitle = ($language == 'en' && strlen(trim($smallNews['title_en'])) > 0 ? trim($smallNews['title_en']) : ($language == 'es' && strlen(trim($smallNews['title_es'])) > 0 ? trim($smallNews['title_es']) : $smallNews['title_pt']));
                $newTxt = strip_tags(($language == 'en' && strlen(trim($smallNews['content_en'])) > 0 ? trim($smallNews['content_en']) : ($language == 'es' && strlen(trim($smallNews['content_es'])) > 0 ? trim($smallNews['content_es']) : trim($smallNews['content_pt']))));
                ?>
                <div class="newsBlock newsBlockSmall" style="background-image: url(<?php echo $newsImage; ?>);">
                    <div class="newsBlock-date">
                        <?php echo date('d', $smallNews['post_date']); ?> <span><?php echo strtoupper(date('M', $smallNews['post_date'])); ?></span>
                    </div>
                    <div class="newsBlock-title">
                        <a href="./?page=news&id=<?php echo $smallNews['nid']; ?>"><?php echo $newTitle; ?></a>
                    </div>
                    <div class="newsBlock-text">
                        <?php echo trim(substr($newTxt, 0, 100)).(strlen($newTxt) > 100 ? '...' : ''); ?>
                    </div>
                    <div class="newsBlock-button">
                        <a href="./?page=news&id=<?php echo $smallNews['nid']; ?>" class="button button-white button-small"><?php echo $LANG[12991]; ?></a>
                    </div>
                </div>
                <?php
                // Segunda notícia pequena
                $smallNews = $smallNewsBlocks[1];
                $newsImage = 'assets/images/no-img-new-small-2.jpg'; // Imagem específica
                $newTitle = ($language == 'en' && strlen(trim($smallNews['title_en'])) > 0 ? trim($smallNews['title_en']) : ($language == 'es' && strlen(trim($smallNews['title_es'])) > 0 ? trim($smallNews['title_es']) : $smallNews['title_pt']));
                $newTxt = strip_tags(($language == 'en' && strlen(trim($smallNews['content_en'])) > 0 ? trim($smallNews['content_en']) : ($language == 'es' && strlen(trim($smallNews['content_es'])) > 0 ? trim($smallNews['content_es']) : trim($smallNews['content_pt']))));
                ?>
                <div class="newsBlock newsBlockSmall" style="background-image: url(<?php echo $newsImage; ?>);">
                    <div class="newsBlock-date">
                        <?php echo date('d', $smallNews['post_date']); ?> <span><?php echo strtoupper(date('M', $smallNews['post_date'])); ?></span>
                    </div>
                    <div class="newsBlock-title">
                        <a href="./?page=news&id=<?php echo $smallNews['nid']; ?>"><?php echo $newTitle; ?></a>
                    </div>
                    <div class="newsBlock-text">
                        <?php echo trim(substr($newTxt, 0, 100)).(strlen($newTxt) > 100 ? '...' : ''); ?>
                    </div>
                    <div class="newsBlock-button">
                        <a href="./?page=news&id=<?php echo $smallNews['nid']; ?>" class="button button-white button-small"><?php echo $LANG[12991]; ?></a>
                    </div>
                </div>
            </div>
            <a href="./?page=news" class="show-more"><?php echo $LANG[11000]; ?></a>
        <?php } else {
            // Caso não haja notícias
            echo "<div style='text-align:center;'><b>".$LANG[12063]."</b></div>";
        } ?>
    </div>
<?php endif; ?>

		</div>
		<footer class="footer">
			<div class="footerInfo">
				<div class="footerInfo-title">
					© 2024 <a href="./">L2IGNIS.COM</a>
				</div>
				<div class="footerInfo-text">
				    <!-- BEGIN: Powered by Supercounters.com -->
                    <script type="text/javascript" src="//widget.supercounters.com/ssl/online_t.js">
                    </script>
                    <script type="text/javascript">
                        sc_online_t(1693541,"User online","");
                    </script>
                    <noscript>
                        <a href="https://www.supercounters.com/">
                            supercounters.com
                        </a>
                    </noscript>
                    <!-- END: Powered by Supercounters.com -->
				</div>
				<div class="footerInfo-text">
					<?php echo $LANG[12129]; ?>
				</div>
				<div class="footerInfo-buttons">
					<a href=""><?php echo $LANG[12130]; ?></a>
					<a href=""><?php echo $LANG[12131]; ?></a>
				</div>
			</div><!--footerInfo-->
			<div class="footerMenu flex">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href=""><?php echo $LANG[12118] ?></a></li>
					<li><a href=""><?php echo $LANG[12032]; ?></a></li>
					<li><a href="">Download</a></li>
				</ul>
				<ul>
					<li><a href=""><?php echo $LANG[12108]; ?></a></li>
					<li><a href=""><?php echo $LANG[13005]; ?></a></li>
					<li><a href=""><?php echo $LANG[12119]; ?></a></li>
					<li><a href="">FAQ</a></li>
				</ul>
			</div>
			<div class="footerRight">
				<div class="socBlock">
					<a href="./" class="dc"></a>
					<a href="./" class="fb"></a>
					<a href="./" class="yt"></a>
				</div>
				<div class="dis-logo">
					<img src="./assets/images/mex-vision.png" alt="">
				</div>
			</div>
		</footer>
	</div><!--wrapper-->
	<div id="enter" class="modal_div"> 
		<span class="modal_close"></span>
		<div class="modalContent">
			<div class="modal-title flex-s-c">
				<span><?php echo $LANG[12032]; ?></span>
				<a href="" class="button button-white button-small"><?php echo $LANG[12120]; ?></a>
			</div>
			<form>
				<div class="formGroup">
					<p>Login</p>
					<input type="text" placeholder="LOGIN">
				</div>
				<div class="formGroup">
					<p>E-Mail</p>
					<input type="text" placeholder="E-MAIL">
				</div>
				<div class="formGroup">
					<p><?php echo $LANG[12120]; ?></p>
					<input type="password" placeholder="<?php echo $LANG[12120]; ?>">
				</div>
				<div class="formGroup">
					<p><?php echo $LANG[12048]; ?></p>
					<input type="password" placeholder="<?php echo $LANG[12048]; ?>">
				</div>
				<div class="rules">
					<label class="checkbox-container">
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span>
					</label>
					<span><a href=""><?php echo $LANG[12994]; ?></a></span>
				</div>
				<div class="formButtons flex-c">
					<button><?php echo $LANG[12032]; ?></button>
					<button class="button-white"><?php echo $LANG[13004]; ?></button>
				</div>
			</form>
		</div><!--modalContent-->
	</div>
	<div id="overlay"></div>
	<script src="./js/jquery-3.6.0.min.js"></script>
	<script src="./js/global.js"></script>
</body>
</html>