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
				return "Online Shopping for Seasonal and Holiday Decorations.";
			} elseif ($onpage == 'store') {
				return "Our online store has great options for Seasonal and Holiday Decorations and more!";
			} elseif ($onpage == 'about') {
				return "Learn more about our comapany and how we can help you save money during the holidays.";
			} elseif ($onpage == 'contact') {
				return "Contact with any questions you might have.";
			}
		}
	}