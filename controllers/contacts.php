<?php

class Contacts extends Controller{

	public function __construct(){
		parent::__construct();
		$this->protect->from('guest');
		$this->load->view('layouts/header');
		$this->load->model('contact',$this);
	}

	public function index(){

		$contact_lists=$this->contact->all();
		$this->load->view('contacts',[
			'contact_lists' => $contact_lists
		]);
	}

	public function store(){
		if(isset($_POST) && !empty($_POST)){
			$name=stripcslashes($_POST['name']);
			$this->contact->store([
				$name,
				$_SESSION['user_id']
			]);
		}

		Redirect::to('contacts');
	}

	public function show($id){
		$this->load->view('contact');
	}
}