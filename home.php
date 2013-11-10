<?php include_once 'connect_xml.php'; ?>
<script>
	$(document).ready(function(){
		$('title').text('<?php echo $xmlData->sitedata->pages->home->title; ?>');
		$('meta[name="description"]').attr('content','<?php echo $xmlData->sitedata->pages->home->metadescription; ?>');
		$('.link').click(function(e){
			e.preventDefault();
			$('#content').load($(this).attr('href'));
			});
		$('#menu > li').attr('value','');
		$('#menu > li:nth-child(1)').attr('value','1');
		$('#slide').remove();
		menuSlider.init('menu','slide');
	});
</script>
<!-- <aside role="complementary">
	<ul>
		<li></li>
		<li></li>
	</ul>
</aside>
<div id="main" role="main"></div> -->
<?php include_once("analyticstracking.php") ?>