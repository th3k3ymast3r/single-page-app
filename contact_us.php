<?php include_once 'connect_xml.php'; ?>
<aside class="contactus" role="complementary"><?php echo $xmlData->sitedata->pages->contactus->content[0]; ?></aside>
<div class="careers" role="main"><?php echo $xmlData->sitedata->pages->contactus->content[1]; ?></div>
<div id="gmap"><iframe width="457" height="226" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?q=91-93+Gray%E2%80%99s+Inn+Road,+London+WC1X+8TX&amp;oe=utf-8&amp;aq=t&amp;client=firefox-a&amp;channel=rcs&amp;ie=UTF8&amp;hl=en&amp;hq=&amp;hnear=93+Grays+Inn+Rd,+London+WC1X+8TX,+United+Kingdom&amp;t=m&amp;ll=51.523457,-0.115077&amp;spn=0.003017,0.007102&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.uk/maps?q=91-93+Gray%E2%80%99s+Inn+Road,+London+WC1X+8TX&amp;oe=utf-8&amp;aq=t&amp;client=firefox-a&amp;channel=rcs&amp;ie=UTF8&amp;hl=en&amp;hq=&amp;hnear=93+Grays+Inn+Rd,+London+WC1X+8TX,+United+Kingdom&amp;t=m&amp;ll=51.523457,-0.115077&amp;spn=0.003017,0.007102&amp;z=16&amp;source=embed" class="new-window" style="color:#B97F36;text-align:left">View Larger Map</a></small></div>
<div class="vouchers"><?php echo $xmlData->sitedata->pages->contactus->content[2]; ?></div>
<script>
	$(document).ready(function(){
		$('title').text('<?php echo $xmlData->sitedata->pages->contactus->title; ?>');
		$('meta[name="description"]').attr('content','<?php echo $xmlData->sitedata->pages->contactus->metadescription; ?>');
		$('.link').click(function(e){
			e.preventDefault();
			$('#content').load($(this).attr('href'));
			});
		//apply marker
		$('#menu > li').attr('value','');
		$('#menu > li:nth-child(7)').attr('value','1');
		$('#slide').remove();
		menuSlider.init('menu','slide');
		});
</script>
<?php include_once("analyticstracking.php") ?>