<?php

class Send extends Controller{

	public function __construct(){
		parent::__construct();
		$this->protect->from('guest');
		$this->load->view('layouts/header');
		$this->load->model('contact',$this);
	}

	public function index(){	
		$contact_lists=$this->contact->all();
		$this->load->view('send',[
				'contact_lists' => $contact_lists
			]);

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