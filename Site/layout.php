<?php if(!$indexing) { exit; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--
	
	Desenvolvido pela Atualstudio
	www.atualstudio.com

          ##########
       ################
    ######          ######
   #####              #####
  ####         ....    ####
 ####        ########  ####
 ####       ########## ####
  ####      ########## ####
  #####       ######## ####
   #####        ****** ####
     ######################
         ################
	
	Website Version 4.0
	
-->
<?php require('private/seo.php'); ?>
<!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo strtolower($server_name.', '.$server_chronicle); ?>, l2, l2feel, l2 feel, feel, Lineage 2 feel, lineage, lineage2, lineage 2, lainiege, laineage, lainiage, lineage dois, lineage ii, internacional, international, portuguese, english, espanish, espanol, espanhol, portugues, ingles, gringo, br, 1x, 5x, 10x, 30x, 50x, 70x, 100x, 150x, 200x, 300x, 1000x, free fun, diversao gratis, gratuito, gratuitamente, free fun, new server, novo servidor, o melhor servidor de lineage 2, o melhor servidor">
    <meta name="description" content="<?php echo htmlspecialchars($SEO['description'], ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Links -->
    <link rel="shortcut icon" href="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/favicon.png">
    <link rel="image_src" href="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/image_src.jpg">
    <link href="./css/global.css" rel="stylesheet">
    <link href="./css/prettyPhoto.css" rel="stylesheet">
	<link href="./css/soon.min.css" rel="stylesheet">
    
    <!-- Title -->
    <title><?php echo htmlspecialchars($SEO['title'], ENT_QUOTES, 'UTF-8'); ?></title>
    
    <!-- Open Graph Meta Tags -->
    <meta property="fb:app_id" content="966242223397117">
    <meta property="og:title" content="<?php echo htmlspecialchars($SEO['title'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($server_name, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($SEO['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/image_src_v4.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars($SEO['description'], ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:image" content="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/imgs/favicon-300x300.jpg">
    <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($SEO['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Integration URLs -->
    <meta property="ia:markup_url" content="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/docs/markup">
    <meta property="ia:markup_url_dev" content="https://dev.<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/docs/markup">
    <meta property="ia:rules_url" content="https://<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/docs/rules">
    <meta property="ia:rules_url_dev" content="https://dev.<?php echo htmlspecialchars($server_url, ENT_QUOTES, 'UTF-8'); ?>/docs/rules">

<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/global.js?1"></script>

</head>
<body>
	
<?php if($faceBoxOn == 1) {
echo "
<div id=\"fb-root\"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = \"//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=577018195656213\";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
";
}
?>

<div class='all'>
	
	<div class='main <?php echo $language; ?>'><div><div><div>
		
		<div class='langs'><?php $addp = "&url=https://".urlencode($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?>
			<a href='?changelang=en' class='en' title='English' onclick="document.location.replace('./index.php?changelang=en<?php echo $addp; ?>');return false;"></a>
			<a href='?changelang=pt' class='pt' title='Portugu&ecirc;s' onclick="document.location.replace('./index.php?changelang=pt<?php echo $addp; ?>');return false;"></a>
			<a href='?changelang=es' class='es' title='Espa&ntilde;ol' onclick="document.location.replace('./index.php?changelang=es<?php echo $addp; ?>');return false;"></a>
		</div>
		
		<div class='menu'></div>
		
		<div class='content'>
			
			<div class='menu_opcs'>
				<a href='./' class='o1'></a>
				<a href='./?page=info' class='o2'></a>
				<a href='./?page=rules' class='o3'></a>
				<a href='./?page=download' class='o4'></a>
				<a href='./?page=register' class='o5'></a>
				<a href='./?page=donations' class='o6'></a>
				<a href='./forum' class='o7'></a>
			</div>		
			
			<div class='esq'>
				
				<div class='box'>
					<div class='title stpPNG t1'><span title='<?php echo $LANG[12018]; ?>'></span></div>
					<div class='ctt'>
						
						<?php if($logged != 1) { ?>
						
							<div class='loginarea'>
								<img src='imgs/nm/loader.gif' style='width:0;height:0;display:none;' />
								<form id='login_form' action='<?php echo (file_exists('ucp/engine/login.php') ? "./ucp/?engine=login&fromsite" : "./?engine=login"); ?>' method='POST'>
									<?php
									$_SESSION['lkey'] = md5(time().rand(100,999).$uniqueKey); echo "<input type='hidden' name='lkey' value='".$_SESSION['lkey']."' />";
									if(isset($_GET['lerror'])) {
										echo "<div class='error'>".((intval($_GET['lerror']) == 1) ? $LANG[11979] : $LANG[11990])."</div>";
									}
									?>
									<div class='fieldsBox'>
										<label>
											<input type='text' name='ucp_login' class='inpt' placeholder='Login' title='Username' autocomplete='off' />
											<div class='acc_icon user'></div>
										</label>
										<label>
											<input type='password' name='ucp_passw' class='inpt pass' placeholder='Password' title='Password' autocomplete='off' />
											<div class='acc_icon pass'></div>
										</label>
										<?php if($captcha_cp_on == 1) {
											echo "<input type='button' onclick='opencaptcha();' class='default gologin' value='Login' />";
										} else {
											echo "<input type='submit' class='default gologin' value='Login' />";
										} ?>
									</div>
									<div class='ess'><a href='./?page=forgot'><?php echo $LANG[12020]; ?></a></div>
									<input type='hidden' value='<?php echo md5(uniqid()) ?>' name='ucp_uniqid' id='ucp_uniqid' />
									<input type='hidden' value='' name='captcha' id='ucp_captcha' />
									<div class='anpc'><?php echo $LANG[12019]; ?> <a href='./?page=register'><?php echo $LANG[12077]; ?></a></div>
								</form>
							</div>
							
						<?php } else { ?>
							
							<div class='logged'><?php echo $LANG[12021]; ?> <span><?php echo $_SESSION['acc']; ?></span></div>
							<?php if(file_exists('ucp/index.php')) { ?><a href='./ucp' class='default'>DASHBOARD</a><?php } ?>
							<a href='./?page=ucp_changepass' class='default'><?php echo $LANG[12022]; ?></a>
							<?php if($chaemail == 1) { ?><a href='./?page=ucp_changeemail' class='default'><?php echo $LANG[11014]; ?></a><?php } ?>
							<?php if($dpage['unstuk'] == 1) { ?><a href='./?page=ucp_unstuck' class='default'>Unstuck Char</a><?php } ?>
							<a href='./?engine=logout' class='default'><?php echo $LANG[12023]; ?></a>
							
						<?php } ?>
						
					</div>
				</div>
				
				<a href='./?page=donations' class='stylebutton donate'>
					<div class='ball'></div>
					<div class='desc'><?php echo $LANG[60000]; ?></div>
				</a>
				
				<?php
				
				if($dpage['bosstt'] == 1 || $dpage['csiege'] == 1) {
					
					if($dpage['csiege'] == 1) {
						echo "
						<a href='./?page=siege' class='stylebutton castle'>
							<div class='ball'></div>
							<div class='desc'>".$LANG[60001]."</div>
						</a>";
					}
						
					if($dpage['bosstt'] == 1) {
						echo "
						<a href='./?page=boss' class='stylebutton boss'>
							<div class='ball'></div>
							<div class='desc'>".$LANG[60002]."</div>
						</a>";
					}
					
				}
				
				?>
				
				<div class='box'>
					<div class='title stpPNG t2'><span title='<?php echo $LANG[13005]; ?>'></span></div>
					<div class='ctt support'>
						<a href='./?page=support'><img src='imgs/chat_on.png' /></a>
					</div>
				</div>
				
				<?php

				if($dpage['topcla'] == 1 || $dpage['toponl'] == 1 || $dpage['toppkp'] == 1 || $dpage['toppvp'] == 1) {
					echo"
					<div class='box'>
						<div class='title stpPNG t3'><span title='".$LANG[12024]."'></span></div>
						<div class='ctt'>
								
				".($dpage['toppvp'] == 1 ? "<a href='./?page=toppvp' class='default'>Top PvP</a>" : "")."
				".($dpage['toppkp'] == 1 ? "<a href='./?page=toppk' class='default'>Top Pk</a>" : "")."
				".($dpage['toponl'] == 1 ? "<a href='./?page=toponline' class='default'>Top Online</a>" : "")."
				".($dpage['topcla'] == 1 ? "<a href='./?page=topclan' class='default'>Top Clan</a>" : "")."
				".($dpage['toppvp'] == 1 ? "<a href='./?page=toppvp'class='default'>Top PvP</a>" : "")."
		         ".($dpage['toplvl'] == 1 ? "<a href='./?page=toplevel'class='default'>Top Level</a>" : "")."
		        ".($dpage['topadn'] == 1 ? "<a href='./?page=topadena'class='default'>Top Adena</a>" : "")."
                ".($dpage['bossjl'] == 1 ? "<a href='./?page=boss_jewels_loc'class='default'>Boss Jewels Loc</a>" : "")."

						</div>
						
					</div>";
				}
				
				if($dpage['olyall'] == 1 || $dpage['olyher'] == 1 || $dpage['olyrak'] == 1) {
					echo "
					<div class='box'>
						<div class='title stpPNG t9'><span title='Grand Olympiad'></span></div>
						<div class='ctt'>
							".($dpage['olyrak'] == 1 ? "<a href='./?page=oly_rank' class='default'>Ranking</a>" : "")."
							".($dpage['olyher'] == 1 ? "<a href='./?page=oly_heroes' class='default'>".$LANG[12999]."</a>" : "")."
							".($dpage['olyall'] == 1 ? "<a href='./?page=oly_allheroes' class='default'>".$LANG[12025]."</a>" : "")."
						</div>
					</div>";
				}
				?>
				<div class='box'>
					<div class='title stpPNG t10'><span title='Fraps'></span></div>
					<div class='ctt'>
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/g2xvAXpBw9s?si=RfVI4e1XQyfDfNTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/pk6jnCrcIQo?si=yP7UuoH3Rj8CsDA-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/g0l0389JT48?si=jV1kg3MRUPGaJjh9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/6QpEP_Ki65E?si=fdjGjLyd7d2EwiZt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/Hl0FkHXaivg?si=OIICkrHYIYTCwDGP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/-xv_N4k2Urw?si=mvLosT11cjFFro3_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/0Y-fz6nxnvQ?si=eMLYRd-1ZHqX1cvt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<iframe width="100%" height="auto"  src="https://www.youtube.com/embed/B39WVG_69eI?si=VSRyO0c6xD913BMg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/qJdU_WFNIBg?si=Fw1clYSqqB9fDYKH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/DuQed3ly4js?si=o-JdpoNT636gAQPH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/_KCpl3CloFE?si=_r-a-EXF0OOPOhlp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
				</div>
			</div>
			
			
			<div class='cen'><div><div><div><div><div>
				
				<?php require('pages/'.$p.'.php'); ?>
				
			</div></div></div></div></div></div>
			
			
			<div class='dir'>
				
				<?php
				if($forceServerStatus == 'on') { $serverStatus = 'on'; }
				elseif($forceServerStatus == 'off') { $serverStatus = 'off'; }
				else {
					$check_game = @fsockopen(''.$serverIp.'', ''.$gamePort.'', $errno, $errstr, 1);
					if($check_game){ $serverStatus = 'on'; } else { $serverStatus = 'off'; }
				}
				?>
				<div class='server_status <?php echo $serverStatus; ?>'><span></span></div>
				
				<?php
				if($showPlayersOn == '1') {
					$cacheFile = "cache/playerson.xml";
					$genNew = 0;
					if(!file_exists($cacheFile)) { $genNew = 1; } else {
						$xml = simplexml_load_file($cacheFile);
						$configs = $xml->configs;
						$updated = intval($configs->updated);
						$delay = 1;
						if(($updated+($delay*60)) < time()) {
							$genNew = 1;
						}
					}
					if($genNew == 1) {
						require("private/playerson.php");
					}
					$playersOnline = $xml->players; $playersOnline = intval($playersOnline[0]->online);
					if($serverStatus == 'off') { $playersOnline = 0; }
					echo "<div class='players_on'><span>".intval($playersOnline*$fakePlayers)."</span> Players Online</div>";
				}
				?>
				
				<div class='box'>
					<div class='title stpPNG t4'><span title='<?php echo $LANG[12980]; ?>'></span></div>
					<div class='ctt'>
						<a href='http://top.l2jbrasil.com/index.php?a=in&u=L2FEEL' target='_blank' class='default'>TOP L2JBRASIL</a>
						<a href='https://www.top100arena.com/listing/99644/vote' target='_blank' class='default'>TOP100ARENA</a>
						<a href='https://vgw.hopzone.net/site/vote/104671/1' target='_blank' class='default'>HOPZONE</a>
						<a href='https://www.l2servers.com/servers/vote-59055.php' target='_blank' class='default'>L2TOPSERVERS</a>
					</div>
				</div>
				
				<?php
				
				if($dpage['galler'] == 1) {
					echo "
					<div class='box'>
						<div class='title stpPNG t5'><span title='".$LANG[12026]."'></span></div>
						<div class='ctt'>
							<div class='galleryBox'><div>
								";
								$xml = @simplexml_load_file("cache/gallery.xml");
								$line = @$xml->line;
								$asideRankCountG = (!empty($galleCount) ? intval($galleCount) : 6);
								if(count($line) < $asideRankCountG) { $asideRankCountG = count($line); }
								if($asideRankCountG > 0) {
									for($i=0, $c=$asideRankCountG; $i < $c; $i++) {
										if(intval($line[$i]->isvideo) != '1') {
											echo "
											<a href='".$dir_gallery.$line[$i]->url."' rel='prettyPhoto[fullGallery]'>
												<img src='".$dir_gallery."thumbnail/".$line[$i]->url."' />
												<div></div>
											</a>
											";
										} else {
											echo "
											<a href='//www.youtube.com/watch?v=".$line[$i]->url."&rel=0' class='iframe' rel='prettyPhoto[fullGallery]'>
												<img src='".$dir_gallery."thumbnail/".$line[$i]->url.".jpg' />
												<div></div>
												<span></span>
											</a>
											";
										}
									}
								}
								for($i=$asideRankCountG, $c=(!empty($galleCount) ? intval($galleCount) : 6); $i < $c; $i++) {
									echo "<a href='javascript:void(0)'><div></div></a>";
								}
								echo "
							</div></div>
							
							<div class='vermais'>
								<a href='./?page=gallery'>".$LANG[12027]." &raquo;</a>
							</div>
						</div>
					</div>";
				}
				
				if($dpage['topcla'] == 1) {
					echo "
					<div class='box'>
						<div class='title stpPNG t6'><span title='Top Clan'></span></div>
						<div class='ctt'>
							<div class='indexRank'>
							";
							$xml = @simplexml_load_file("cache/topclan.xml"); $line = @$xml->line;
							if(count($line) < $asideRankCount) { $asideRankCount = count($line); }
							if($asideRankCount > 0) {
								for($i=0, $c=$asideRankCount; $i < $c; $i++) {
									echo "<div>".$line[$i]->pos."&ordm;&nbsp;&nbsp; ".$line[$i]->name." <span>".$line[$i]->level." lvl</span></div>";
								}
							} else {
								for($i=1, $c=(!empty($asideRankCount) ? intval($asideRankCount) : 3); $i <= $c; $i++) {
									echo "<div>".$i."&ordm;&nbsp;&nbsp; Clan <span>0 lvl</span></div>";
								}
							}
							echo "
							</div>
							<div class='vermais'>
								<a href='./?page=topclan'>".$LANG[12027]." &raquo;</a>
							</div>
						</div>
					</div>";
				}
				
				if($dpage['toppvp'] == 1) {
					echo "
					<div class='box'>
						<div class='title stpPNG t7'><span title='Top PvP'></span></div>
						<div class='ctt'>
							<div class='indexRank'>
							";
							$xml = @simplexml_load_file("cache/toppvp.xml"); $line = @$xml->line;
							if(count($line) < $asideRankCount) { $asideRankCount = count($line); }
							if($asideRankCount > 0) {
								for($i=0, $c=$asideRankCount; $i < $c; $i++) {
									echo "<div>".$line[$i]->pos."&ordm;&nbsp;&nbsp; ".$line[$i]->name." <span>".$line[$i]->pvp." pvps</span></div>";
								}
							} else {
								for($i=1, $c=(!empty($asideRankCount) ? intval($asideRankCount) : 3); $i <= $c; $i++) {
									echo "<div>".$i."&ordm;&nbsp;&nbsp; Player <span>0 pvps</span></div>";
								}
							}
							echo "
							</div>
							<div class='vermais'>
								<a href='./?page=toppvp'>".$LANG[12027]." &raquo;</a>
							</div>
						</div>
					</div>";
				}
	
				if($dpage['toppkp'] == 1) {
					echo "
					<div class='box'>
						<div class='title stpPNG t8'><span title='Top Pk'></span></div>
						<div class='ctt'>
							<div class='indexRank'>
							";
							$xml = @simplexml_load_file("cache/toppk.xml"); $line = @$xml->line;
							if(count($line) < $asideRankCount) { $asideRankCount = count($line); }
							if($asideRankCount > 0) {
								for($i=0, $c=$asideRankCount; $i < $c; $i++) {
									echo "<div>".$line[$i]->pos."&ordm;&nbsp;&nbsp; ".$line[$i]->name." <span>".$line[$i]->pk." pks</span></div>";
								}
							} else {
								for($i=1, $c=(!empty($asideRankCount) ? intval($asideRankCount) : 3); $i <= $c; $i++) {
									echo "<div>".$i."&ordm;&nbsp;&nbsp; Player <span>0 pks</span></div>";
								}
							}
							echo "
							</div>
							<div class='vermais'>
								<a href='./?page=toppk'>".$LANG[12027]." &raquo;</a>
							</div>
						</div>
					</div>";
				}
				
				?>
				<div>
					<center>
						<!-- BEGIN: Powered by Supercounters.com -->
						<script type="text/javascript" src="//widget.supercounters.com/ssl/online_t.js"></script><script type="text/javascript">sc_online_t(1701396,"Users Online","E4B970");</script><br><noscript><a href="https://www.supercounters.com/">supercounters.com</a></noscript>
						<!-- END: Powered by Supercounters.com -->
					</center>
				</div>
			</div>
			
		</div>
		
		<script type='text/javascript'>
			$(document).ready(function(){
				var lateralESQ = ($('.content > .esq').height());
				var lateralDIR = ($('.content > .dir').height());
				var centralH = ($('.content > .cen > div > div > div > div').height());
				if(lateralDIR > lateralESQ && lateralDIR > centralH) {
					$('.content > .cen > div > div > div > div').css({ 'min-height': ''+(lateralDIR)+'px' })
				} else if(lateralDIR < lateralESQ && lateralESQ > centralH) {
					$('.content > .cen > div > div > div > div').css({ 'min-height': ''+(lateralESQ)+'px' })
				}
			});
		</script>

		
	</div></div></div></div>
	
	<div class='rodape'>
		&copy; <?php echo date('Y'); ?> <?php echo $server_name; ?> - All rights reserved
		<a class='atualstudio stpPNG' href='http://www.atualstudio.com' title='<?php echo $LANG[12028]; ?>' target='_blank'></a>
		<a class='atualstudio stpPNG' href='http://www.atualstudio.com' title='<?php echo $LANG[12028]; ?>' target='_blank'></a>
	</div>
	
</div>

<?php
if(!empty($_SESSION['aAlert_msg'])) {
	echo "<script>atualAlert('".$_SESSION['aAlert_msg']."', '".$_SESSION['aAlert_act']."', '".(isset($_SESSION['aAlert_url']) ? $_SESSION['aAlert_url'] : '')."');</script>";
	$_SESSION['aAlert_msg'] = ''; $_SESSION['aAlert_act'] = ''; $_SESSION['aAlert_url'] = ''; unset($_SESSION['aAlert_msg']); unset($_SESSION['aAlert_act']); unset($_SESSION['aAlert_url']);
}
?>


<!-- PrettyPhoto -->
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script><script type="text/javascript" charset="utf-8">$(document).ready(function(){ $("a[rel^='prettyPhoto']").prettyPhoto({ theme: 'atualstudio', social_tools: '', markup: '<div class="pp_pic_holder"><div class="ppt">&nbsp;</div><div class="pp_top"><div class="pp_left"></div><div class="pp_middle"></div><div class="pp_right"></div></div><div class="pp_content_container"><div class="pp_left"><div class="pp_right"><div class="pp_content"><div class="pp_loaderIcon"></div><div class="pp_fade"><a href="#" class="pp_expand" title="Expand the image">Expand</a><div class="pp_hoverContainer"><a class="pp_next" href="#">next</a><a class="pp_previous" href="#">previous</a></div><div id="pp_full_res"></div><div class="pp_details"></div></div></div></div></div></div><div class="pp_bottom"><div class="pp_left"></div><div class="pp_middle"></div><div class="pp_right"></div></div></div><div class="pp_overlay"></div>' }); });</script>

<!-- Important Terms to JS Scripts -->
<input type='hidden' id='l11015' value='<?php echo ($LANG[11015]); ?>' /><input type='hidden' id='l12055' value='<?php echo ($LANG[12055]); ?>' /><input type='hidden' id='l11017' value='<?php echo ($LANG[11017]); ?>' /><input type='hidden' id='l11018' value='<?php echo ($LANG[11018]); ?>' /><input type='hidden' id='l20001' value='<?php echo ($LANG[20001]); ?>' /><input type='hidden' id='l40044' value='<?php echo ($LANG[40044]); ?>' />

<!-- Facebook PopUp -->
<?php if($facePopupOn == 1) {
echo "
<div id='fanback'><div id='fan-exit'></div><div id='fanbox'><div id='fanclose'></div><iframe src='//www.facebook.com/plugins/likebox.php?href=".$facePage."&amp;width=402&amp;height=255&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23E2E2E2&amp;stream=false&amp;header=false&amp;appId=577018195656213' scrolling='no' frameborder='0' allowTransparency='true'></iframe></div></div>
<script src='js/jquery.cookie.js' type='text/javascript'></script>
<script type='text/javascript'>
	$(function() { if($.cookie('atualstudioPopup') != 'yes'){ $('#fanback').delay(100).fadeIn('medium'); $('#fanclose, #fan-exit').click(function(){ $('#fanback').stop().fadeOut('medium'); }); } $.cookie('atualstudioPopup', 'yes', { path: '/', expires: ".intval(trim($fbPopupDelay))." }); });
</script>";
} ?>

<!-- Control JS Flash Size -->
<script>
	$(function(){ $('section object').attr('width', $('article > .page').width()).attr('height', ((360 / 640) * $('article > .page').width())).children('embed').attr('width', $('article > .page').width()).attr('height', ((360 / 640) * $('article > .page').width())); });
</script>


</body>
</html>
