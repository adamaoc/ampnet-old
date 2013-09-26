<?php 


	$onpage = $_SERVER['SCRIPT_NAME'];
	$onpage = explode('/', $onpage);

	if ($onpage[1] === "site") {
		$onpage = $onpage[4];
		$onpage = explode('.', $onpage);
		$onpage = $onpage[0];
		// echo "we're on ".$onpage." page.";
	}else{
		$onpage = $onpage[1];
		$onpage = explode('.', $onpage);
		$onpage = $onpage[0];
		// echo "we're on ".$onpage." page.";
	}

	function dynamicTitle($onpage) {
		if (isset($onpage)) {
			if ($onpage == 'index') {
				return "Websites - SEO - Social Media";
			} else {
				return "";
			}
		}
	}