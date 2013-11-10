<?php include_once 'connect_xml.php'; ?>
<aside role="complementary">
	<ul>
		<li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[1]->submenu[0]->url.'">'.$xmlData->sitedata->sitenav->category[1]->submenu[0]->label.'</a>';?></li>
		<!-- <li><?php echo '<a class="link" href="'.$xmlData->sitedata->sitenav->category[1]->submenu[1]->url.'">'.$xmlData->sitedata->sitenav->category[1]->submenu[1]->label.'</a>';?></li> -->
	</ul>
</aside>
<div id="main" role="main"><?php echo $xmlData->sitedata->pages->aboutus->content; ?></div>
<script>
	$(document).ready(function(){
		$('title').text('<?php echo $xmlData->sitedata->pages->aboutus->title; ?>');
		$('meta[name="description"]').attr('content','<?php echo $xmlData->sitedata->pages->aboutus->metadescription; ?>');
		$('.link').click(function(e){
			e.preventDefault();
			$('#content').load($(this).attr('href'));
			});
		//apply marker
		$('#menu > li').attr('value','');
		$('#menu > li:nth-child(2)').attr('value','1');
		$('#slide').remove();
		menuSlider.init('menu','slide');
	});
</script>
<?php include_once("analyticstracking.php") ?>