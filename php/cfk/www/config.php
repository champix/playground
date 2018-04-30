<?php
	/* dynamic www path
	== ./
	*/
	define('WWW_PATH', __DIR__);
	
	/* dynamic app path
	== ../app/
	*/
	define('APP_PATH', dirname(__DIR__).DS.'app'.DS);
	
	/* hardcoded app path
	== 'custom/path/to/app/'
	*/
	//define('APP_PATH', 'C:\\dev\\git_champix_playground\\php\\cfk\\app\\');
?>