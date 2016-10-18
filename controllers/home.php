<?php

class Home extends Controller{

	public function __construct(){
		parent::__construct();

		$this->protect->from('guest');

		$this->load->view('layouts/header');
		$this->load->model('user',$this);
	}

	public function index(){
		$user=$this->user->get();
		$this->load->view('home',[
			'user' => $user
		]);
	}
}