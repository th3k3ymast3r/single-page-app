<!DOCTYPE html>
<!--[if lt IE 7]>
  <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]>
  <html class="no-js lt-ie9 lt-ie8" lang="en">
<![endif]-->
<!--[if IE 8]>
  <html class="no-js lt-ie9" lang="en">
<![endif]-->
<!--[if gt IE 8]><!-->
<html manifest="cache.manifest" class="no-js"> 
<!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
		<?php include_once 'connect_xml.php'; ?>
		<title><?php echo $xmlData->sitedata->pages->home->title; ?></title>
		<?php echo '<meta name="description" content="'.$xmlData->sitedata->pages->home->metadescription.'" />' ?>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="author" content="Leigh Laguisma"/>
		<!-- iPhone disable scaling -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="favicon.ico" />
		<!-- HTML5 Reset -->
		<link rel="stylesheet" href="css/style.css" />
		<!--[if IE 9]>  
		  <style>
			#main .close,#main .open{padding-bottom:15px!important}
		  </style>
		<![endif]-->
		<!--[if IE 8]>  
		  <style>
			#main .close,#main .open{padding-bottom:11px!important}
		  </style>
		<![endif]-->
		<!--[if IE 7]>  
		  <style>
			#main{top:-10px;}
			#main .close,#main .open{padding-bottom:8px!important}
		  </style>
		<![endif]-->
		<link rel="stylesheet" href="css/theme.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
		<!--[if gte IE 9]>
			<style type="text/css">
			.gradient {
				filter:none;
				}
			</style>
		<![endif]-->
		<?php include 'background_slideshow.php'; ?>
	</head>
	<body onload="menuSlider.init('menu','slide')">
		<!-- Header -->
		<header>
			<?php include 'header.php'; ?>
		</header>
		<!-- End of Header -->
		<!-- Main Body -->
		<div id="content">
			<aside class="hide" role="complementary"></aside>
			<div class="hide" id="main" role="main"><?php echo $xmlData->sitedata->pages->home->content; ?></div>
		</div>
		<!-- End of Main Body -->
		<!-- Footer -->
		<footer>	
			<?php include 'footer.php'; ?>
		</footer>
		<script src="js/libs/jquery-1.6.1.min.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<!--
			Supersized - Fullscreen Slideshow jQuery Plugin
			Version :3.2.7
			Site	:www.buildinternet.com/project/supersized
			
			Author	:Sam Dunn
			Company :One Mighty Roar (www.onemightyroar.com)
			License :MIT License / GPL License
		-->
		<!-- jQuery Supersized Plugin -->
		<script src="js/supersized.3.2.7.min.js"></script>
		<script src="js/supersized.shutter.min.js"></script>
		<script>
			jQuery(function($){
				$.supersized({
				// Functionality
				slide_interval		:	5000,	// Length between transitions
				transition_speed	:	750,	// Speed of transition

				// Components
				slide_links			:	'false',// Individual links for each slide (Options:false, 'num', 'name', 'blank')
				slides				:	[<?php echo $jsonOutput ?>]
				});
			});
		</script>
		<script src="js/libs/modernizr.2.6.2.js"></script>
		<!--[if lt IE 9]>  
		  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="js/menu.effect.js"></script>
		<script src="js/jquery.dropdown.plain.js"></script>
		<script src="js/jquery.content.updater.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>