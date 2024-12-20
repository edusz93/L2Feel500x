<?php if(!$indexing) { echo "<script>document.location.replace('./');</script>"; exit; } ?>

<h1><?php echo $LANG[13001]; ?></h1>
<hr />

<?php
function encodeNew($txt) {
	return stripslashes($txt);
}

$newID = !empty($_GET['id']) ? intval($_GET['id']) : 'all';
if((!is_numeric($newID))&&($newID != 'all')) { echo "<script type='text/javascript'>document.location.replace('./');</script>"; exit; }

require('private/classes/classIndex.php');

if($newID != 'all') {
	
	$new = Index::ViewNew($newID);
	if(count($new) == 0) {
		fim('', 'ERROR', './?page=news&id=all');
	}
	
	$newsImage = ((strlen(trim($new[0]['img'])) > 0) ? (file_exists($dir_newsimg.trim($new[0]['img'])) ? $dir_newsimg.trim($new[0]['img']) : 'images/nm/no-img-new.jpg') : 'images/nm/no-img-new.jpg');
	$newTxt = ($language == 'en' && strlen(trim($new[0]['content_en'])) > 0 ? trim($new[0]['content_en']) : ($language == 'es' && strlen(trim($new[0]['content_es'])) > 0 ? trim($new[0]['content_es']) : trim($new[0]['content_pt'])));
	$newTitle = ($language == 'en' && strlen(trim($new[0]['title_en'])) > 0 ? trim($new[0]['title_en']) : ($language == 'es' && strlen(trim($new[0]['title_es'])) > 0 ? trim($new[0]['title_es']) : $new[0]['title_pt']));
	
	?>
	
	<div style='width: 100%;display:table;'>
		<div style='float:left; padding-left: 40px; width: 50px;'>
			<img width='50' height='50' src='<?php echo $newsImage; ?>' style='border-radius: 5px;' />
		</div>
		<div style='float:left;  padding-left: 10px; box-sizing: border-box; width: calc(100% - 90px);'>
			<div style='font-size:24px;'><?php echo encodeNew($newTitle); ?></div>
			<div style='font-size:12px;'><?php echo encodeNew(date("F d, Y", $new[0]['post_date'])); ?></div>
		</div>
	</div>
	
	<br /><br />
	
	<div class='pddInner'>
		<?php echo encodeNew($newTxt); ?>
		<input style='margin: 40px auto 0; display:table;' type='button' onclick='history.back();' class='default' value='<?php echo $LANG[13004]; ?>' />
	</div>
	
	<br /><br />
	
	<?php 
	
	$news = Index::NewsExcept($inewsCount, $newID);
	$totalNews = count($news);
	if($totalNews > 0) {
	for($i=0; $i < $totalNews; $i++) {
		$newsImage = ((strlen(trim($news[$i]['img'])) > 0) ? (file_exists($dir_newsimg.trim($news[$i]['img'])) ? $dir_newsimg.trim($news[$i]['img']) : 'images/nm/no-img-new.jpg') : 'images/nm/no-img-new.jpg');
		$newTxt = strip_tags(($language == 'en' && strlen(trim($news[$i]['content_en'])) > 0 ? trim($news[$i]['content_en']) : ($language == 'es' && strlen(trim($news[$i]['content_es'])) > 0 ? trim($news[$i]['content_es']) : trim($news[$i]['content_pt']))));
		$newTitle = ($language == 'en' && strlen(trim($news[$i]['title_en'])) > 0 ? trim($news[$i]['title_en']) : ($language == 'es' && strlen(trim($news[$i]['title_es'])) > 0 ? trim($news[$i]['title_es']) : $news[$i]['title_pt']));
		echo "
		<table style='width:100%;' border='0'>
		  <tr>
			<td rowspan='4' align='center' valign='top' style='width:100px;'><img style='padding-right:5px; border-radius:15px; width: 100px; height: auto;' src='".$newsImage."' /></td>
			<td style='height:0px' align='left' valign='top' colspan='2'><a href='./?page=news&id=".$news[$i]['nid']."' class='titlen'>".$newTitle."</a></td>
		  </tr>
		  <tr>
			<td align='left' valign='top' colspan='2' style='height:50px'>".(trim(substr($newTxt, 0, 280)).(strlen($newTxt) > 280 ? '...' : ''))."</td>
		  </tr>
		  <tr>
			<td align='left' valign='bottom'>".date('d F, Y', $news[$i]['post_date'])."</td>
			<td align='right' valign='bottom'><a href='./?page=news&id=".$news[$i]['nid']."'>".$LANG[12991]." &raquo;</a></td>
		  </tr>
		</table>
		".(($totalNews-1) != $i ? "<div class='shadownew stpPNG'></div>" : "");
	}
}
	
	
} else {
	
	$pagin['max_results'] = 7;
	$pagin['link'] = "./?page=news&id=all";
	$pagin['atual'] = (!empty($_GET['pg']) && is_numeric($_GET['pg']) ? intval($_GET['pg']) : 1); $pagin['begin'] = ($pagin['atual']-1) * $pagin['max_results'];
	
	$countGallery = Index::CountNews();
	$pagin['total_results'] = $countGallery[0]['quant'];
	
	$news = Index::News($pagin['begin'], $pagin['max_results']);
	
	$totalNews = count($news);
	if($totalNews > 0) {
	for($i=0; $i < $totalNews; $i++) {
		$newsImage = ((strlen(trim($news[$i]['img'])) > 0) ? (file_exists($dir_newsimg.trim($news[$i]['img'])) ? $dir_newsimg.trim($news[$i]['img']) : 'images/nm/no-img-new.jpg') : 'images/nm/no-img-new.jpg');
		$newTxt = strip_tags(($language == 'en' && strlen(trim($news[$i]['content_en'])) > 0 ? trim($news[$i]['content_en']) : ($language == 'es' && strlen(trim($news[$i]['content_es'])) > 0 ? trim($news[$i]['content_es']) : trim($news[$i]['content_pt']))));
		$newTitle = ($language == 'en' && strlen(trim($news[$i]['title_en'])) > 0 ? trim($news[$i]['title_en']) : ($language == 'es' && strlen(trim($news[$i]['title_es'])) > 0 ? trim($news[$i]['title_es']) : $news[$i]['title_pt']));
		echo "
		<table style='width:100%;' border='0'>
		  <tr>
			<td rowspan='4' align='center' valign='top' style='width:100px;'><img style='padding-right:5px; border-radius:15px; width: 100px; height: auto;' src='".$newsImage."' /></td>
			<td style='height:0px' align='left' valign='top' colspan='2'><a href='./?page=news&id=".$news[$i]['nid']."' class='titlen'>".$newTitle."</a></td>
		  </tr>
		  <tr>
			<td align='left' valign='top' colspan='2' style='height:50px'>".(trim(substr($newTxt, 0, 280)).(strlen($newTxt) > 280 ? '...' : ''))."</td>
		  </tr>
		  <tr>
			<td align='left' valign='bottom'>".date('d F, Y', $news[$i]['post_date'])."</td>
			<td align='right' valign='bottom'><a href='./?page=news&id=".$news[$i]['nid']."'>".$LANG[12991]." &raquo;</a></td>
		  </tr>
		</table>
		".(($totalNews-1) != $i ? "<div class='shadownew stpPNG'></div>" : "");
	}
} else {
		echo "<div style='text-align:center;'><b>".$LANG[12063]."</b></div>";
	}
	
}
