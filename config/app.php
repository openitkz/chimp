<?php

if(!isset($_SESSION)){
	session_start();
}

define('BASE_URL','http://127.0.0.1:8088/');

define('REDIRECT_URL','http://127.0.0.1:8088/index.php/');


$autoloads=[
	'classes',
	'vendor',
	'controllers'
];

foreach($autoloads as $item){
	autoload($item.'/');
}

function autoload($path){
	$files=array_diff(scandir($path), array('.', '..'));
	foreach($files as $file){
		include($path.$file);
	}
}
