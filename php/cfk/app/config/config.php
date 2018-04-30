<?php
	/* autoconf ROOT_URL
	$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
	if (isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
		$servname=$_SERVER['HTTP_X_FORWARDED_HOST'];
	} else {
		$servname=$_SERVER['SERVER_NAME'];
	}
	define("ROOT_URL", str_replace("\\", "/", "http".$s."://".$servname.":".$_SERVER['SERVER_PORT'].dirname($_SERVER['SCRIPT_NAME'])));
	/*
	
	/* hardcoded ROOT_URL */
	define('ROOT_URL', 'http://localhost:8080/');

	/* hardcoded DATA_PATH */
	define("DATA_PATH", dirname(APP_PATH).DS.'data'.DS);
	
	/* hardcoded TMPDIR_PATH */
	define('TMPDIR_PATH', APP_PATH.DS.'tmpdir'.DS);
	
	/* hardcoded YPNH_STRID */
	define('YPNH_NAMESPACE', 'ypnh\\');
?>