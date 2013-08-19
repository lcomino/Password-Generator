<?php
	error_reporting(E_ALL | ~E_STRICT);
	ini_set('display_errors', 0);
	ini_set('xdebug.remote_host', $_SERVER['REMOTE_ADDR']);
	ini_set('default_charset', 'utf-8');
	define("DS", DIRECTORY_SEPARATOR);
	define('APP_Code', 'src'.DS);
	define('ROOT', '/');
	define('INDEV', 'Desculpe-nos pelo transtorno. Página em desenvolvimento.');
	
	require_once dirname(__FILE__).DS.'src'.DS.'AutoLoad.php';
?>