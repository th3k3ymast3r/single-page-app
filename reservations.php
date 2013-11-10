<?php include_once 'connect_xml.php'; ?>
<script type="text/javascript" src="http://www.toptable.co.uk/frontdoor/default.aspx?rid=98565&amp;restref=98565&amp;bgcolor=000000&amp;titlecolor=B97F36&amp;subtitlecolor=FFFFFF&amp;btnbgimage=http://www.toptable.co.uk/frontdoor/img/ot_btn_black.png&amp;otlink=FFFFFF&amp;icon=light&amp;mode=short&amp;hover=1"></script>
<aside class="reservations" role="complementary">
	<ul>
		<li><?php echo $xmlData->sitedata->pages->reservations->content[0]; ?><li>
	</ul>
</aside>
<div class="reservations" id="main" role="main"><?php echo $xmlData->sitedata->pages->reservations->content[1]; ?></div>
<script>
	$(document).ready(function(){
		$('title').text('<?php echo $xmlData->sitedata->pages->reservations->title; ?>');
		$('meta[name="description"]').attr('content','<?php echo $xmlData->sitedata->pages->reservations->metadescription; ?>');
		$('.link').click(function(e){
			e.preventDefault();
			$('#content').load($(this).attr('href'));
			});
		//apply marker
		$('#menu > li').attr('value','');
		$('#menu > li:nth-child(5)').attr('value','1');
		$('#slide').remove();
		menuSlider.init('menu','slide');
	});
</script>
<script src="js/script.js"></script>
<?php include_once("analyticstracking.php") ?>