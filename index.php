<?php

require_once('config/app.php');

ini_set('display_errors', '0');   

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri_segments=explode('/',$uri_path);

$request_arr = array_splice($uri_segments,array_search('index.php',$uri_segments)+1);

$class_name=$request_arr[0];

$method_name=isset($request_arr[1]) ? $request_arr[1] : 'index';

$page=new $class_name;


unset($request_arr[0]);
unset($request_arr[1]);

$request_arr = array_values($request_arr);

$page->$method_name($request_arr);

