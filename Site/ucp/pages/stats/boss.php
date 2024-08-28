<?php if((!$indexing) || ($logged != 1)) { exit; } 
if($funct['gamst6'] != 1) { fim($LANG[40003], 'ERROR', './'); }
?>
<?php
$hostname_acis = $host;
$username_acis = $user;
$password_acis = $pass;
$database_acis = $dbnm;
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$acis = mysqli_connect($hostname_acis, $username_acis, $password_acis, $database_acis);
?>

<ul class="breadcrumb">
	<li><b><i class='fa fa-bar-chart'></i> Game Stats</b></li>
	<li>Boss Status</li>
</ul>

<h1>Boss Status</h1>

<center>
<table width="98%" height="auto" border="0" cellpadding="0" cellspacing="0">
	<tr style="background-color:#333; color:#FFF; font-size:14px; font-weight:600; text-align:center;">
		<td style="padding-top:10px;padding-bottom:12px; border-radius: 5px 0 0 0;" width="35%" align="center" nowrap="nowrap">BOSS NAME</td>
		<td style="padding-top:10px;padding-bottom:12px;" width="20%" nowrap="nowrap">LEVEL</td>
		<td style="padding-top:10px;padding-bottom:12px;" width="45%" nowrap="nowrap">STATUS</td>
	</tr>
</table>
<table class="rank_table" width="98%" height="auto" border="0" cellpadding="2" cellspacing="0"  align="center" style="border:1px solid #eee; font-weight:400; font-size:15px; letter-spacing:-0.6px;">
	<tr>
		<?php
			$raidspawn_queen = mysqli_query($acis, "SELECT * FROM spawn_data WHERE name = 'queen_ant'");
			while($raid = mysqli_fetch_array($raidspawn_queen))
			{
				$status_queen = $raid['status'];
				$dead_queen= $raid['respawn_time'];
			}
		?>
		<td align="center" style="padding:0px; border-right: 1px solid #ddd;" width="35%">Queen Ant<br />
			 <img class="boss" src="../imgs/boss/queen_ant.jpg" width="auto" height="35" style="border-radius:50%; border:2px solid #222;" /> 
		</td>
		<td style="border-right: 1px solid #ddd;" align="center" width="20%">
			80
		</td>
		<td style="border-right: 1px solid #ddd;" align="center" width="45%">
			<?php
				if($status_queen != 0) 
				{
					echo "<font class='is_alive' color='green'>".$LANG[12030]."</font>";
				}
				else
				{
					$dead = date('d/m',($dead_queen / 1000));
					$dead_hours = date('H:i:s',($dead_queen / 1000));
					echo "<font color='FF0000'>".$LANG[12029]."</font>(<font color='#000'>".$dead.", ".$dead_hours.")</font>";
				}
			?>
		</td>
	</tr>

	<tr bgcolor="#E5E5E5">
		<?php
			$raidspawn_core = mysqli_query($acis, "SELECT * FROM spawn_data WHERE name = 'core'");
			while($raid = mysqli_fetch_array($raidspawn_core))
			{
				$status_core = $raid['status'];
				$dead_core = $raid['respawn_time'];
			}
		?>
		<td style="border-right: 1px solid #ddd;" align="center" style="padding:0px;">Core<br /> 
			<img class="boss" src="../imgs/boss/core.jpg" width="auto" height="35" style="border-radius:50%; border:2px solid #222;;"  /> 
		</td>
		<td style="border-right: 1px solid #ddd;" align="center">
			80
		</td>
		<td style="border-right: 1px solid #ddd;" align="center" width="20%">
			<?php
				if($status_core != 0) 
				{
					echo "<font class='is_alive' color='green'>".$LANG[12030]."</font>";
				}
				else
				{
					$dead = date('d/m',($dead_core / 1000));
					$dead_hours = date('H:i:s',($dead_core / 1000));
					echo "<font color='FF0000'>".$LANG[12029]."</font>(<font color='#000'>".$dead.", ".$dead_hours.")</font>";
				}
			?>
		</td>
	</tr>
	<tr>
		<?php
			$raidspawn_orfen = mysqli_query($acis, "SELECT * FROM spawn_data WHERE name = 'orfen'");
			while($raid = mysqli_fetch_array($raidspawn_orfen))
			{
				$status_orfen = $raid['status'];
				$dead_orfen = $raid['respawn_time'];
			}
		?>
		<td align="center" style="padding:0px; border-right: 1px solid #ddd;">Orfen<br />
			<img class="boss" src="../imgs/boss/orfen.jpg" width="auto" height="35" style="border-radius:50%; border:2px solid #222;" /> 
		</td>
		<td style="border-right: 1px solid #ddd;" align="center">
			80
		</td>
		<td style="border-right: 1px solid #ddd;" align="center" width="20%">
			<?php
				if($status_orfen != 0) 
				{
					echo "<font class='is_alive' color='green'>".$LANG[12030]."</font>";
				}
				else
				{
					$dead = date('d/m',($dead_orfen / 1000));
					$dead_hours = date('H:i:s',($dead_orfen / 1000));
					echo "<font color='FF0000'>".$LANG[12029]."</font>(<font color='#000'>".$dead.", ".$dead_hours.")</font>";
				}
			?>
		</td>
	</tr>

	<tr bgcolor="#E5E5E5">
		<?php
			$raidspawn_tezza = mysqli_query($acis, "SELECT * FROM grandboss_data WHERE boss_id = 29045");
			while($raid = mysqli_fetch_array($raidspawn_tezza))
			{
				$status_tezza = $raid['status'];
				$dead_tezza = $raid['respawn_time'];
			}
		?>
		<td align="center" style="padding:0px; border-right: 1px solid #ddd;">Frintezza<br />
			 <img class="boss" src="../imgs/boss/frintezza.jpg" width="auto" height="35" style="border-radius:50%; border:2px solid #222;" />
		</td>
		<td style="border-right: 1px solid #ddd;" align="center">
			90
		</td>
		<td style="border-right: 1px solid #ddd;" align="center" width="20%">
			<?php
				if($status_tezza == 0)
				{
					echo "<font class='is_alive' color='green'>".$LANG[12030]."</font>";
				}
				elseif($status_tezza == 1)
				{
					echo "<font color='green'>".$LANG[12117]."</font>";
				}
				elseif($status_tezza == 1)
				{
					echo "<font color='green'>".$LANG[12117]."</font>";
				}
				elseif($status_tezza == 3)
				{
					$dead = date('d/m',($dead_tezza / 1000));
					$dead_hours = date('H:i:s',($dead_tezza / 1000));
					echo "<font color='FF0000'>".$LANG[12029]."</font>(<font color='#000'>".$dead.", ".$dead_hours.")</font>";
				}
			?>
		</td>
	</tr>


	<tr>
		<?php
			$raidspawn_zaken = mysqli_query($acis, "SELECT * FROM spawn_data WHERE name = 'zaken'");
			while($raid = mysqli_fetch_array($raidspawn_zaken))
			{
				$status_zaken = $raid['status'];
				$dead_zaken = $raid['respawn_time'];
			}
		?>
		<td align="center" style="padding:0px; border-right: 1px solid #ddd;">Zaken<br />
			<img class="boss" src="../imgs/boss/zaken.jpg" width="auto" height="35" style="border-radius:50%; border:2px solid #222;" /> 
		</td>
		<td style="border-right: 1px solid #ddd;" align="center">
			80
		</td>
		<td style="border-right: 1px solid #ddd;" align="center" width="20%">
			<?php
				if($status_zaken != 0)
				{
					echo "<font class='is_alive' color='green'>".$LANG[12030]."</font>";
				}
				else
				{
					$dead = date('d/m',($dead_zaken / 1000));
					$dead_hours = date('H:i:s',($dead_zaken / 1000));
					echo "<font color='FF0000'>".$LANG[12029]."</font>(<font color='#000'>".$dead.", ".$dead_hours.")</font>";
				}
			?>
		</td>
	</tr>
	<tr bgcolor="#E5E5E5">
		<?php
			$raidspawn_baium = mysqli_query($acis, "SELECT * FROM grandboss_data WHERE boss_id = 29020");
			while($raid = mysqli_fetch_array($raidspawn_baium))
			{
				$status_baium = $raid['status'];
				$dead_baium = $raid['respawn_time'];
			}
		?>
		<td  align="center" style="padding:0px; border-right: 1px solid #ddd;">Baium<br />
			<img class="boss" src="../imgs/boss/baium.jpg" width="auto" height="35" style="border-radius:50%; border:2px solid #222;" /> 
		</td>
		<td style="border-right: 1px solid #ddd;" align="center">
			80
		</td>
		<td style="border-right: 1px solid #ddd;" align="center">
			<?php
			if($status_baium == 0) 
			{
				echo "<font class='is_alive' color='green'>".$LANG[12030]."</font>";
			}
			elseif($status_baium == 1)  
			{
				echo "<font color='green'>".$LANG[12117]."</font>";
			}
			elseif($status_baium == 2)  
			{
				$dead = date('d/m',($dead_baium / 1000));
				$dead_hours = date('H:i:s',($dead_baium / 1000));
				echo "<font color='FF0000'>".$LANG[12029]."</font>(<font color='#000'>".$dead.", ".$dead_hours.")</font>";
			}
			?>
		</td>
	</tr>
	<tr>
		<?php
			$raidspawn_Antharas = mysqli_query($acis, "SELECT * FROM grandboss_data WHERE boss_id = 29019");
			while($raid = mysqli_fetch_array($raidspawn_Antharas))
			{
				$status_antharas = $raid['status'];
				$dead_antharas = $raid['respawn_time'];
			}
		?>
		<td align="center" style="padding:0px; border-right: 1px solid #ddd;">Antharas<br />
			<img class="boss" src="../imgs/boss/Antharas.jpg" width="auto" height="35" style="border-radius:50%; border:2px solid #222;" /> 
		</td>
		<td style="border-right: 1px solid #ddd;" align="center">
			80
		</td>
		<td style="border-right: 1px solid #ddd;" align="center">
			<?php
				if($status_antharas == 0) 
				{
					echo "<font class='is_alive' color='green'>".$LANG[12030]."</font>";
				}
				elseif($status_antharas == 1) 
				{
					echo "<font class='is_alive' color='green'>".$LANG[12030]."</font>";
				}
				elseif($status_antharas == 2) 
				{
					echo "<font color='green'>".$LANG[12117]."</font>";
				}
				elseif($status_antharas == 3) 
				{
				$dead = date('d/m',($dead_antharas / 1000));
				$dead_hours = date('H:i:s',($dead_antharas / 1000));
				echo "<font color='FF0000'>".$LANG[12029]."</font>(<font color='#000'>".$dead.", ".$dead_hours.")</font>";
			}
			?>
		</td>
	</tr>
	<tr bgcolor="#E5E5E5">
		<?php
			$raidspawn_valakas = mysqli_query($acis, "SELECT * FROM grandboss_data WHERE boss_id = 29028");
			while($raid = mysqli_fetch_array($raidspawn_valakas))
			{
				$status_valakas = $raid['status'];
				$dead_valakas = $raid['respawn_time'];
			}
		?>
		<td align="center" style="padding:0px; border-right: 1px solid #ddd;">Valakas<br />
			<img class="boss" src="../imgs/boss/valakas.jpg" width="auto" height="35" style="border-radius:50%; border:2px solid #222;" /> 
		</td>
		<td style="border-right: 1px solid #ddd;" align="center">
			85
		</td>
		<td style="border-right: 1px solid #ddd;" align="center">
			<?php
			if($status_valakas == 0) 
			{
				echo "<font class='is_alive' color='green'>".$LANG[12030]."</font>";
			}
			elseif ($status_valakas == 1) 
			{
				echo "<font class='is_alive' color='green'>".$LANG[12030]."</font>";
			}
			elseif ($status_valakas == 2) 
			{
				echo "<font color='green'>".$LANG[12117]."</font>";
			}
			elseif ($status_valakas == 3) 
			{
				$dead = date('d/m',($dead_valakas / 1000));
				$dead_hours = date('H:i:s',($dead_valakas / 1000));
				echo "<font color='FF0000'>".$LANG[12029]."</font>(<font color='#000'>".$dead.", ".$dead_hours.")</font>";
			}
			?>
		</td>
	</tr>
</table>
<br><br>
<?php // include('raid_boss.php'); ?>
</center>