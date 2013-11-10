<?php
	$XMLURL = 'js/libs/data.xml';
	$xmlData = simplexml_load_file($XMLURL);
	$getNumberOfSlides = count($xmlData->xpath("/luceelimoni/sitedata/slideshow/slide"));
	$getImageSrc = $xmlData->xpath("/luceelimoni/sitedata/slideshow/slide/imagesrc");
	$getImageTitle = $xmlData->xpath("/luceelimoni/sitedata/slideshow/slide/imagetitle");
	$jsonOutput = '';

	//Slideshow array
	for ( $i=0; $i<$getNumberOfSlides; $i++ ){
		if( ($i+1)==$getNumberOfSlides ){
			$jsonOutput .= "{image :'".$getImageSrc[$i]."', title :'".$getImageTitle[$i]."'}";
			} else {
				$jsonOutput .= "{image :'".$getImageSrc[$i]."', title :'".$getImageTitle[$i]."'},";
			}
		};
?>
<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/supersized.shutter.css" type="text/css" media="screen" />