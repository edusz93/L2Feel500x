<?php include("includes/connection.php"); ?>
<?php
  $raidspawn_queen = mysqli_query($acis, "SELECT * FROM spawn_data WHERE name = 'queen_ant'");
while($raid = mysqli_fetch_array($raidspawn_queen))
{
	$status_queen = $raid['status'];
	$respawn_queen = date('d/m/Y',($raid['respawn_time'] / 1000-10800));
}
?>
<?php
  $raidspawn_core = mysqli_query($acis, "SELECT * FROM spawn_data WHERE name = 'core'");
while($raid = mysqli_fetch_array($raidspawn_core))
{
	$status_core = $raid['status'];
	$respawn_core = date('d/m/Y',($raid['respawn_time'] / 1000-10800));
}
?>  
<?php
  $raidspawn_orfen = mysqli_query($acis, "SELECT * FROM spawn_data WHERE name = 'orfen'");
while($raid = mysqli_fetch_array($raidspawn_orfen))
{
	$status_orfen = $raid['status'];
	$respawn_orfen = date('d/m/Y',($raid['respawn_time'] / 1000-10800));
}
?>  
<?php
  $raidspawn_tezza = mysqli_query($acis, "SELECT * FROM grandboss_data WHERE boss_id = 29045");
while($raid = mysqli_fetch_array($raidspawn_tezza))
{
	$status_tezza = $raid['status'];
	$respawn_tezza = date('d/m/Y',($raid['respawn_time'] / 1000-10800));
}
?>  
<?php
  $raidspawn_zaken = mysqli_query($acis, "SELECT * FROM spawn_data WHERE name = 'zaken'");
while($raid = mysqli_fetch_array($raidspawn_zaken))
{
	$status_zaken = $raid['status'];
	$respawn_zaken = date('d/m/Y',($raid['respawn_time'] / 1000-10800));
}
?>  
<?php
  $raidspawn_baium = mysqli_query($acis, "SELECT * FROM grandboss_data WHERE boss_id = 29020");
while($raid = mysqli_fetch_array($raidspawn_baium))
{
	$status_baium = $raid['status'];
	$respawn_baium = date('d/m/Y',($raid['respawn_time'] / 1000-10800));
}
?>  
<?php
  $raidspawn_Antharas = mysqli_query($acis, "SELECT * FROM grandboss_data WHERE boss_id = 29019");
while($raid = mysqli_fetch_array($raidspawn_Antharas))
{
	$status_antharas = $raid['status'];
	$respawn_antharas = date('d/m/Y',($raid['respawn_time'] / 1000-10800));
}
?>
<?php
  $raidspawn_valakas = mysqli_query($acis, "SELECT * FROM grandboss_data WHERE boss_id = 29028");
while($raid = mysqli_fetch_array($raidspawn_valakas))
{
	$status_valakas = $raid['status'];
	$respawn_valakas = date('d/m/Y',($raid['respawn_time'] / 1000-10800));
}
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<meta HTTP-EQUIV="Expires" CONTENT="-1">
<title>Lineage II : The Chaotic Throne</title>
<meta http-equiv="Content-Type" content="text/html;charset=windows-1251">
<style type="text/css">
body {margin:0px;}
img { border:0; }
div, td {font-size:12px; font-family : Dotum,Helvetica,sans-serif;color:#655A5A;}
a:link, a:visited,a:active { color:#020D1A; text-decoration: none;}
a:hover { color:#020201;text-decoration: none; color:#FFFFFF;}
.tm {padding:13px 0 0 55px; height:26px; width:710px;}
.tm_left { float:left; width:500px; color:#655A5A; }
.tm_left a:link, .tm_left a:visited, .tm_left a:active { color:#655A5A; text-decoration: none;}
.tm_left a:hover { text-decoration: none; color:#FFFFFF; background:#3E82B8;}
.tm_right { float:left; width:150px; color:#333333; font-size:11px; padding:1px 0  15px; text-align:right;}
.tm_right a:link, .tm_right a:visited, .tm_right a:active { color:#333333; text-decoration: none; font-size:11px; }
.tm_right a:hover { text-decoration: none; color:#FFFFFF; background:#686868; font-size:11px; }
p { margin:1px; }
.date1 {font-size:10px;float:right; color:#666667; font-family:Tahoma;}
.date2 {font-size:10px;float:right; color:#666667; font-family:Tahoma;}
.bbs { clear:both; padding:35px 0 0 431px; width:325px; }
.news {width:342px; position:relative; right:15px; }
.news a:link, .news a:visited, .news a:active {color:#666666; text-decoration: none;font-size:12px;}
.news a:hover { color:#7A4A2A;text-decoration: none; font-weight:bold; }
.plus {width:325px;}
.plus a:link, .plus a:visited, .plus a:active {color:#666666; text-decoration: none;font-size:12px;}
.plus a:hover { color:#0E5688;text-decoration: none; font-weight:bold; }
.icon {margin:3px 0 2px 5px;}
.cmarea { position:absolute; top:250px; left:129px; display:none; }
.eventBanner { position:absolute; top:250px; left:415px; }
.icones img {MARGIN-left:3px; border-radius:50%; width:23px; height:auto;}

</style>
<script language="javascript" src="global.js"></script>
<SCRIPT language="javascript">
function GetClickCountRate(fileName)
{
	try {
			var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			var strURL	= "/public_inc/statistics/" + fileName;
			var strSend = "";			
	}
	catch(e) {}
}

function disableselect(e){
	return false
}

function reEnable(){
	return true
}

// IE4+ ? ??
document.onselectstart=new Function ("return false")

// NS6 ? ??
if (window.sidebar){
	document.onmousedown=disableselect
	document.onclick=reEnable
}

// ??
function openNotice(url)
{
	var url = url;
	var posi = "width=660,height=465,toolbar=no,location=no,status=no,menubar=no,top=10,left=50,scrollbars=0,resizable=no" ;
	window.open(url,"l2postNotice",posi);
}

curPage=1; 
document.oncontextmenu = function() { return false }

if(document.layers)
{ 
	window.captureEvents(Event.MOUSEDOWN); 
	window.onmousedown = function(e)
	{ 
		if(e.target==document)
			return false; 
	}
} 
else
{ 
	document.onmousedown = function(){return false} 
} 
</SCRIPT>

</head>
<body style="margin:0" scroll="no" onLoad="runSlideShow();">

<div style="background:url('img/bg_web1.jpg') no-repeat; width:780px; height:445px;">
	<div class="tm">
		<div class="tm_left">
						75x SERVER STATUS:
		
						<?php 
                 	    $fp = @fsockopen("192.99.174.194", 7777, $errno, $errstr, 1);
						echo !empty($fp) ? "<font color='green'><strong>ONLINE</strong></font>" : "<font color='red'><strong>OFFLINE</strong></font>";
                        ?>
         </div>
         
         

         
         
         
		<div class="tm_right" style="color:#06F;">
			<strong sty>WWW.L2FEEL.COM</strong>
			
		</div>
	</div>

	
	<div class="bbs">
		<!--???II ???? & ????-->
		<div class="news">
			<div style="margin-top:-9px;"><?php include("toppvp_update.php");?></div>
            <div style="margin-top:45px;"><?php include("toppk_update.php");?></div>
			</div>
		</div>	
		<!--?? ???II ???-->
	</div>
	
	<!-- start :: CM AREA -->
	<table cellspacing="0" cellpadding="0" width="286" border="0" class="cmarea">
	<col width="4" /><col width="277" /><col width="5" />
	<tr><td colspan="3"><img src="img/cmbox_top.jpg" width="286" height="4"></td></tr>
	<tr>

		<td><img src="img/cmbox_left.jpg" width="4" height="156"></td>
		<td><script language="JavaScript">
<!--
//--></script>

</td>
		<td><img src="img/cmbox_right.jpg" width="5" height="156"></td>
	</tr>
	<tr><td colspan="3"><img src="img/cmbox_bottom.jpg" width="286" height="4"></td></tr>
	</table>
	<!-- end :: CM AREA -->

	
	<!-- start :: banner AREA -->
	<script language="javascript">
		// =======================================
		// set the following variables
		// =======================================
		// Set slideShowSpeed (milliseconds)
		var slideShowSpeed = 1500
		// Duration of crossfade (seconds)
		var crossFadeDuration = 3
		// to add more images, just continue
		// the pattern, adding to the array below
	</script>
	<script language='javascript'>
var g_MainEvent_title = new Array(4);
var g_MainEvent_url = new Array(4);
var g_MainEvent_image = new Array(4);
var g_MainEvent_flag = new Array(4);
var g_MainEvent_defaultImage = '0';
g_MainEvent_title[0] = 'Queen Ant <?php if($status_queen==1) echo "Is Alive"; else echo "Dead, respawn in: ", $respawn_queen;?>';
g_MainEvent_url[0] = '#';
g_MainEvent_image[0] = 'img/ant_<?php if($status_queen==1) echo "vivo"; else echo "morto";?>.jpg';
g_MainEvent_title[1] = 'Core <?php if($status_core==1) echo "Is Alive"; else echo "Dead, respawn in: ", $respawn_core;?>';
g_MainEvent_url[1] = '#';
g_MainEvent_image[1] = 'img/core_<?php if($status_core==1) echo "vivo"; else echo "morto";?>.jpg';
g_MainEvent_title[2] = 'Orfen <?php if($status_orfen==1) echo "Is Alive"; else echo "Dead, respawn in: ", $respawn_orfen;?>';
g_MainEvent_url[2] = '#';
g_MainEvent_image[2] = 'img/orfen_<?php if($status_orfen==1) echo "vivo"; else echo "morto";?>.jpg';
g_MainEvent_title[3] = 'Frintezza <?php if($status_tezza<=2) echo "Is Alive"; elseif($status_tezza>2) echo "Dead, respawn in: ", $respawn_tezza;?>';
g_MainEvent_url[3] = '#';
g_MainEvent_image[3] = 'img/frintezza_<?php if($status_tezza<=2) echo "vivo"; elseif($status_tezza>2)  echo "morto";?>.jpg';
g_MainEvent_title[4] = 'Zaken <?php if($status_zaken==1) echo "Is Alive"; else echo "Dead, respawn in: ", $respawn_zaken;?>';
g_MainEvent_url[4] = '#';
g_MainEvent_image[4] = 'img/zaken_<?php if($status_zaken==1) echo "vivo"; else echo "morto";?>.jpg';
g_MainEvent_title[5] = 'Baium <?php if($status_baium<=1) echo "Is Alive"; elseif($status_baium>1) echo "Dead, respawn in: ", $respawn_baium;?>';
g_MainEvent_url[5] = '#';
g_MainEvent_image[5] = 'img/baium_<?php if($status_baium<=1) echo "vivo"; elseif($status_baium>1) echo "morto";?>.jpg';
g_MainEvent_title[6] = 'Antharas <?php if($status_antharas<=2) echo "Is Alive"; elseif($status_antharas>2) echo "Dead, respawn in: ", $respawn_antharas;?>';
g_MainEvent_url[6] = '#';
g_MainEvent_image[6] = 'img/antharas_<?php if($status_antharas<=2) echo "vivo"; elseif($status_antharas>2) echo "morto";?>.jpg';
g_MainEvent_title[7] = 'Valakas <?php if($status_valakas<=2) echo "Is Alive"; elseif($status_valakas>2) echo "Dead, respawn in: ", $respawn_valakas;?>';
g_MainEvent_url[7] = '#';
g_MainEvent_image[7] = 'img/valakas_<?php if($status_valakas<=2) echo "vivo"; elseif($status_valakas>2) echo "morto";?>.jpg';

</script>

	  <div class="eventBanner">
		<table cellspacing="0" cellpadding="0" width="343" border="0">
		<col width="5" /><col width="333" /><col width="5" />
		<tr><td colspan="3"><img src="img/bannerbox_top.jpg" width="343" height="4"></td></tr>
		<tr>
			<td><img src="img/bannerbox_left.jpg" width="5" height="156"></td>
			<td><a href="http://bbs.lineage2.co.kr/event/eventList.asp" id="chgEvent" target=""><img src="img/blank.gif" name="SlideShow" width="333" height="156" border="0" onclick="GetClickCountRate('eventCount.xml');"></a></td>
			<td><img src="img/bannerbox_right.jpg" width="5" height="156"></td>
		</tr>
		<tr><td colspan="3"><img src="img/bannerbox_bottom.jpg" width="343" height="4"></td></tr>
		</table>
		
		<div style="padding: 1px 7px 0 0;" align="center" class="icones">
		<script language="javascript">		
		
		// =======================================
		// do not edit anything below this line
		// =======================================
		var t
		var j = 0
		var p, pEventCount = 0;
		
		for (var i=0; i < g_MainEvent_image.length; i++) {
			if (g_MainEvent_image[i] != "") {
				pEventCount = pEventCount + 1;
			}
		}
		p = pEventCount;
		
		var preLoad = new Array()
		for (i = 0; i < p; i++){
		   preLoad[i] = new Image()
		   preLoad[i].src = g_MainEvent_image[i]
		}
		
		function runSlideShow(){		
		   if (document.documentElement){
			  document.all['chgEvent'].href = g_MainEvent_url[j];   			  
		   }
		   document.images.SlideShow.src = preLoad[j].src

		   j = j + 1
		   if (j > (p-1)) j=0
		   t = setTimeout('runSlideShow()', slideShowSpeed)
		}
		function windowOpen(url, size)
		{
			var winPop = window.open(url,"",size);
			if (winPop == "[object]") winPop.focus();
		}
	
		function changeEvent(idx) {
			//document.all['eventBanner'].style.backgroundImage = "url("+g_MainEvent_image[idx]+")";
			document.SlideShow.src= g_MainEvent_image[idx];
			//document.all['chgEventLink' + idx].href = g_MainEvent_url[idx];
			document.all['chgEvent'].href = g_MainEvent_url[idx];
			clearTimeout(t);
		}
		
		try{
			var g_main_event_size_str = "";	
			for(var i = 0; i < g_MainEvent_title.length ; i++)
			{
				if (i<p) {
					document.write("");
					if(g_MainEvent_flag[i] == 'true')
					{
						document.write("<a target= href=\"javascript:windowOpen('"+g_MainEvent_url[i]+"','"+g_MainEvent_size[i]+"')\" name='chgEventLink"+i+"' onmouseover=\"changeEvent("+i+");\" onmouseout=\"runSlideShow();\">");
					}
					else
					{
						document.write("<a target= href='"+g_MainEvent_url[i]+"' name='chgEventLink"+i+"' onmouseover=\"changeEvent("+i+");\" onmouseout=\"runSlideShow();\">");
					}
					document.write("<img src='img/no" + (i+1) + "on.jpg' border='0' alt='" + g_MainEvent_title[i] + "' hspace='0'></a>");
				} else {
					document.write("");
				}
			}
		}catch(e){document.write("");}
		changeEvent(g_MainEvent_defaultImage-1 );
		</script>

	</div>
	<!-- end :: banner AREA -->
		

</div>
</body>
</html>














