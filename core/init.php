<?php

// error_reporting(E_ALL);
// ini_set('display_errors', '1');
	
	$path = dirname(__FILE__);

	// $onpage = $_SERVER['SCRIPT_NAME'];
	// $onpage = explode('/', $onpage);

	// if ($onpage[1] === "site") {
	// 	$onpage = $onpage[4];
	// 	$onpage = explode('.', $onpage);
	// 	$onpage = $onpage[0];
	// 	// echo "we're on ".$onpage." page.";
	// }else{
	// 	$onpage = $onpage[1];
	// 	$onpage = explode('.', $onpage);
	// 	$onpage = $onpage[0];
	// 	// echo "we're on ".$onpage." page.";
	// }

include($path.'/inc/data.php');
include($path.'/inc/functions.php');