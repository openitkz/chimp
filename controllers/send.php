<?php

class Send extends Controller{

	public function __construct(){
		parent::__construct();
		$this->protect->from('guest');
		$this->load->view('layouts/header');
	}

	public function index(){	
		$this->load->view('send');
	}

	public function send(){
		if(isset($_POST) && !empty($_POST)){
			$contacts=stripcslashes($_POST['contacts']);
			$title=stripcslashes($_POST['title']);
			$desc=stripcslashes($_POST['desc']);
			
		}

		Redirect::to('send');
	}
}