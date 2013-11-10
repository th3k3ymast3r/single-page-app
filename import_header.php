<?php

	$XMLURL = 'js/libs/data.xml';
	$xmlData = simplexml_load_file($XMLURL);
	$getNumberOfSlides = count($xmlData->xpath("/luceelimoni/sitedata/slideshow/slide"));
	$getImageSrc = $xmlData->xpath("/luceelimoni/sitedata/slideshow/slide/imagesrc");
	$getImageTitle = $xmlData->xpath("/luceelimoni/sitedata/slideshow/slide/imagetitle");

	$jsonOutput = "["; //Slideshow array

	for ( $i=0; $i<$getNumberOfSlides; $i++ ){
		if( ($i+1)==$getNumberOfSlides ){
			$jsonOutput .= "{image :'".$getImageSrc[$i]."', title :'".$getImageTitle[$i]."'}";
			} else {
				$jsonOutput .= "{image :'".$getImageSrc[$i]."', title :'".$getImageTitle[$i]."'},";
			}
		};

	$jsonOutput .= "]";

	$getNumberOfMainmenu = count($xmlData->xpath("/luceelimoni/sitedata/sitenav/category"));
	$getCategoryLabel = $xmlData->xpath("/luceelimoni/sitedata/sitenav/category/label");
	$getCategoryUrl = $xmlData->xpath("/luceelimoni/sitedata/sitenav/category/url");

	$menuOutput = "<ul class='dropdown' id='menu' role='navigation'>"; //Navigation menu


	for ( $n=0; $n<$getNumberOfMainmenu; $n++ ){
		if( $n==0 ){
			$menuOutput .= "<li value='1'><a class='link' href='".$getCategoryUrl[$n]."'>".$getCategoryLabel[$n]."</a>";
			} else {
			$menuOutput .= "<li><a class='link' href='".$getCategoryUrl[$n]."'>".$getCategoryLabel[$n]."</a>";
			};

			
			$menuOutput .= "<ul class='sub_menu'>";

				$getNumberOfSubmenuMenu = count($xmlData->xpath("/luceelimoni/sitedata/sitenav/category[($n+1)]/submenu"));
				$getSubmenuMenuLabel = $xmlData->xpath("/luceelimoni/sitedata/sitenav/category[($n+1)]/submenu/label");
				$getSubmenuMenuURL = $xmlData->xpath("/luceelimoni/sitedata/sitenav/category[($n+1)]/submenu/url");

				for($e=0; $e < $getNumberOfSubmenuMenu; $e++) {
						$menuOutput .= "<li><a class='link' href='".$getSubmenuMenuURL[$e]."'>".$getSubmenuMenuLabel[$e]."</a></li>";
					}

			$menuOutput .= "</ul>";

		$menuOutput .= "</li>";
		}

	$menuOutput .= "</ul>"


?>