<?php

class Register extends Controller{
	public function __construct(){
		parent::__construct();
		$this->protect->from('logged');
		$this->load->view('layouts/header');
	}

	public function index(){
		$this->load->view('register');
	}

	public function register(){
		if(isset($_POST) && !empty($_POST)){
			$name=stripcslashes($_POST['name']);
			$password=stripcslashes(sha1($_POST['password']));
			$email=stripcslashes($_POST['email']);

			$this->db->query("INSERT INTO users(name, password, email) VALUES(?,?,?)",[
					$name,
					$password,
					$email
				]);
		}
		Redirect::to('home');
	}
}