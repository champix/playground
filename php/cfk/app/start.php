<?php

	defined('APP_PATH') or define('APP_PATH', __DIR__);
	defined('DS') or define('DS', DIRECTORY_SEPARATOR);
	require_once(APP_PATH.DS.'vendor'.DS.'autoload.php');
	require_once(APP_PATH.DS.'config'.DS.'config.php');
	
	$ynphRouterClass = YPNH_NAMESPACE.'\router';
	if (\class_exists($ynphRouterClass)) {
		$routerClass = $ynphRouterClass;
	} else {
		$routerClass = '\cfk\router';
	}
	
	$featureController = $routerClass::route();
	
	$output = $featureController->output();
	echo $output;
	exit;
?>