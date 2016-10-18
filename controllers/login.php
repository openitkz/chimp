<?php

class Login extends Controller{
	public function __construct(){
		parent::__construct();
		$this->load->view('layouts/header');
	}

	public function index(){
		$this->protect->from('logged');
		$this->load->view('login');
	}

	public function login(){
		$this->protect->from('logged');
		if(isset($_POST) && !empty($_POST)){
			$username=stripcslashes($_POST['name']);
			$password=stripcslashes(sha1($_POST['password']));

			$res=$this->db->query("SELECT user_id FROM users WHERE username=? AND password=?",[
					$username, $password
				])->first();

			if($res){
				$_SESSION['user_id']=$res->user_id;
			}else{
				$errors='Invalid login or password!';
			}
		}
		Redirect::to('home');
	}

	public function logout(){
		session_destroy();
		Redirect::to('home');
	}
}