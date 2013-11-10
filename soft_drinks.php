<?php include_once 'connect_xml.php'; ?>
<aside role="complementary">
	<ul>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[0]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[0]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[1]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[1]->label.'</a>';?></li>
		<li><?php echo '<a class="active link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[2]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[2]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[3]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[3]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[4]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[4]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[5]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[5]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[6]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[6]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[7]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[7]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[8]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[8]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[9]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[9]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[10]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[10]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[11]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[11]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[12]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[12]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[13]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[13]->label.'</a>';?></li>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[3]->submenu[14]->url.'">'.$xmlData->sitedata->sitenav->category[3]->submenu[14]->label.'</a>';?></li>
	</ul>
</aside>
<div id="main" role="main"><?php echo $xmlData->sitedata->pages->softdrinks->content; ?></div>
<script>
	$(document).ready(function(){
		$('title').text('<?php echo $xmlData->sitedata->pages->softdrinks->title; ?>');
		$('meta[name="description"]').attr('content','<?php echo $xmlData->sitedata->pages->softdrinks->metadescription; ?>');
		$('.link').click(function(e){
			e.preventDefault();
			$('#content').load($(this).attr('href'));
			});
		//apply marker
		$('#menu > li').attr('value','');
		$('#menu > li:nth-child(4)').attr('value','1');
		$('#slide').remove();
		menuSlider.init('menu','slide');
	});
</script>
<?php include_once("analyticstracking.php") ?>