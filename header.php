<nav>
	<h2>Main Navigation</h2>
	<!-- Menu Navigation -->
	<div class="menu">
		<div id="logo"><h2>Luce e Limoni</h2></div>
		<?php
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

			$menuOutput .= "</ul></li>";
			}

		$menuOutput .= "</ul>";
		echo $menuOutput;
		?>
	</div>
	<div class="mobile">
		<div id="logo"><h2>Luce e Limoni</h2></div>
		<script src="js/ajax.load.content.js"></script>
		<?php
		$getNumberOfMainmenu = count($xmlData->xpath("/luceelimoni/sitedata/sitenav/category"));
		$getCategoryLabel = $xmlData->xpath("/luceelimoni/sitedata/sitenav/category/label");
		$getCategoryUrl = $xmlData->xpath("/luceelimoni/sitedata/sitenav/category/url");

		$menuOutput = "<form id='mobile' action='' method=''><select id='litemenu' role='navigation' onchange='ajaxcombo(\"litemenu\", \"content\")'>"; //Navigation menu

		for ( $n=0; $n<$getNumberOfMainmenu; $n++ ){
			if( $n==0 ){
				$menuOutput .= "<option selected='selected' value='".$getCategoryUrl[$n]."'>".$getCategoryLabel[$n]."</option>";
				} else {
				$menuOutput .= "<option value='".$getCategoryUrl[$n]."'>".$getCategoryLabel[$n]."</option>";
				};
				
			//$menuOutput .= "";

				$getNumberOfSubmenuMenu = count($xmlData->xpath("/luceelimoni/sitedata/sitenav/category[($n+1)]/submenu"));
				$getSubmenuMenuLabel = $xmlData->xpath("/luceelimoni/sitedata/sitenav/category[($n+1)]/submenu/label");
				$getSubmenuMenuURL = $xmlData->xpath("/luceelimoni/sitedata/sitenav/category[($n+1)]/submenu/url");

				for($e=0; $e < $getNumberOfSubmenuMenu; $e++){
					$menuOutput .= "<option value='".$getSubmenuMenuURL[$e]."'>".$getSubmenuMenuLabel[$e]."</option>";
					}

			//$menuOutput .= "</optgroup>";
			}

		$menuOutput .= "</select></form>";
		echo $menuOutput;
		?>
	</div>
</nav>