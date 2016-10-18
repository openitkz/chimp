<?php

class Guard{
	public static $instance=null;

	private function __construct(){

	}

	public function getInstance(){
		if(!self::$instance){
			self::$instance=new Guard();
		}

		return self::$instance;
	}

	public function from($type){
		if($type=='guest'){
			if(!isset($_SESSION['user_id'])){
				Redirect::to('login');
			}
		}else if($type=='logged'){
			if(isset($_SESSION['user_id'])){
				Redirect::to('home');
			}
		}
	}
}