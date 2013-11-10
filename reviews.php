<?php include_once 'connect_xml.php'; ?>
<div class="reviews" role="main"><?php echo $xmlData->sitedata->pages->reviews->content[0]; ?></div>
<script>
	$(document).ready(function(){
		$('title').text('<?php echo $xmlData->sitedata->pages->reviews->title; ?>');
		$('meta[name="description"]').attr('content','<?php echo $xmlData->sitedata->pages->reviews->metadescription; ?>');
		$('.link').click(function(e){
			e.preventDefault();
			$('#content').load($(this).attr('href'));
			});
		//apply marker
		$('#menu > li').attr('value','');
		$('#menu > li:nth-child(6)').attr('value','1');
		$('#slide').remove();
		menuSlider.init('menu','slide');
		//new window function
		$('.new-window')
		.attr('target','_blank')
		.attr('title','Opens in new window');
	});
</script>
<?php include_once("analyticstracking.php") ?>