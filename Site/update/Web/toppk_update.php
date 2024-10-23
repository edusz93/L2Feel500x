<?php
$buscar_pvp_pk = mysqli_query($acis, "SELECT obj_Id, char_name, level, pvpkills, pkkills, online, clanid FROM characters WHERE accesslevel = 0 ORDER BY pkkills  DESC LIMIT 4") or die(mysqli_error());
?>

<table width="100%"  border="0" cellpadding="0" cellspacing="0" style=" margin-top:-32px; margin-right:15px;" align="center">
<tr style="background-color:#A4CAD2; color:#FFF; font-size:14px; font-weight:600;">
<td style="padding-top:5px;padding-bottom:6px; border-radius: 1px 0 0 0; color:#FFF; font-size:11px;" align="center" id="titulo_tabela" width="8%">Pos</td>
<td style="padding-top:5px;padding-bottom:6px; color:#FFF; font-size:11px;"align="CENTER" id="titulo_tabela" width="21%">Name</td>
<td style="padding-top:5px;padding-bottom:6px; color:#FFF; font-size:11px;"align="CENTER" id="titulo_tabela" width="21%">Clan</td>
<td style="padding-top:5px;padding-bottom:6px; color:#FFF; font-size:11px;" align="CENTER" id="titulo_tabela" width="9%">PvP</td>
<td style="padding-top:5px;padding-bottom:6px; border-radius: 0 1px 0px 0px; color:#FFF; font-size:11px;" align="center" id="titulo_tabela" width="9%">Pk</td>
</tr>
</table>


<table class="rank_table" width="100%" height="auto" border="0" cellpadding="0" cellspacing="0"  align="center" style="margin-top:0px; margin-right:15px;">

<?php
$ranking = 1;
while($mostrar = mysqli_fetch_object($buscar_pvp_pk)){

//Verificar si PLayer Esta Online
if($mostrar->online == 1){
$p_online = '<font color="green">Online</font>';
}else{
$p_online = '<font color="red">Offline</font>';
}
$ranking_auto = $ranking++;
if($ranking_auto == 1){
$exibir_rank = 1;
}else if($ranking_auto == 2){
$exibir_rank = 2;
}else if($ranking_auto == 3){
$exibir_rank = 3;
}else{
$exibir_rank = $ranking_auto;
}

if($exibir_rank%2==0) { $bgcolor="#DEECEF"; $fontcolor="#000";}
	else { $bgcolor="#ffffff"; $fontcolor="#000"; }


//CLAN
$id_do_lider = $mostrar->clanid;
$buscar_clan = mysqli_query($acis, "SELECT * FROM clan_data WHERE clan_id = '$id_do_lider'") or die(mysqli_error());

$mostrar_clan = mysqli_fetch_array($buscar_clan);
$name_clan = empty($mostrar_clan['clan_name']) ? "-" : $mostrar_clan['clan_name'];

//Ally
$id_do_lider = $mostrar->clanid;
$buscar_ally = mysqli_query($acis, "SELECT * FROM clan_data WHERE clan_id = '$id_do_lider'") or die(mysqli_error());

$mostrar_ally = mysqli_fetch_array($buscar_ally);
$name_ally = empty($mostrar_ally['ally_name']) ? "-" : $mostrar_ally['ally_name'];	

?>
<tr bgcolor="<?php echo $bgcolor;?>" style="color:<?php echo $fontcolor;?>" >
<td align="center" width="8%" style="border-right: 1px solid #EBF3F5;" >
<?php
 if($exibir_rank == 1){
	 echo '<img src="img/top1.gif" />';
	  }
else if($exibir_rank == 2){
	 echo '<img src="img/top2.gif" />';
	  } 
else if($exibir_rank == 3){
	 echo '<img src="img/top3.gif" />';
	  } 	  
	else { echo  $exibir_rank; echo "°";  }
	  ?>
</td>
<td style="border-right: 1px solid #EBF3F5; font-size:11px;" align="center" width="21%"><?php echo $mostrar->char_name;?></td>
<td style="border-right: 1px solid #EBF3F5; font-size:11px;" align="center" width="21%"><?php echo $name_clan; ?></td>
<td style="border-right: 1px solid #EBF3F5; font-size:11px;" align="center" width="9%"><?php echo $mostrar->pvpkills; ?></td>
<td align="center" width="9%" style="font-size:11px;"><?php echo $mostrar->pkkills; ?></td>
</tr>
<?php } ?>
</table>
