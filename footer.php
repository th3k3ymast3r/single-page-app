<div id="controls-wrapper" class="load-item">
	<div id="controls" role="contentinfo">
		<div id="copyline">
			<?php echo '&copy; '.date('Y')?> <span>Luce e Limoni</span> <?php $footerline = $xmlData->sitedata->pages->contactus->content[0]; echo substr($footerline, 0, 106) ?>
		</div>
		<div class="supergui-signature">
			<p>a <a href="http://www.supergui.co.uk" class="new-window">supergui development</a></p>
		</div>
		<!--Slide counter-->
		<div id="slidecounter">
			<span class="slidenumber"></span> / <span class="totalslides"></span>
		</div>
	</div>
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item">&#9668;</a>
	<a id="nextslide" class="load-item">&#9658;</a>
</div>