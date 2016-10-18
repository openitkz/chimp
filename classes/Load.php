<?php

class Load{

	public static $instance=null;

	private function __construct(){

	}

	public function getInstance(){
		if(!self::$instance){
			self::$instance=new Load();
		}
		return self::$instance;
	}

	public function view($path, $vars=array()){
		extract($vars);
		include 'views/'.$path.'.php';
	}

	public function model($path,$elem){
		include 'models/'.$path.'.php';
		$elem->$path=new $path;
	}
}