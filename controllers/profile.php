<?php

class Profile extends Controller{

	public function __construct(){
		parent::__construct();
		$this->protect->from('guest');
		$this->load->view('layouts/header');
		$this->load->model('user',$this);
	}

	public function index(){
		$user=$this->user->get();
		$this->load->view('profile',[
			'user' => $user
		]);
	}

	public function update(){
		if(isset($_POST) && !empty($_POST)){
			$name=stripcslashes($_POST['name']);
			if(!empty($_POST['password'])){
				$password=stripcslashes(sha1($_POST['password']));
			}
			$email=stripcslashes($_POST['email']);

			$sql="UPDATE users SET username=? ";
			if(isset($password)){
				$sql.=", password=?";
			}

			$sql=" WHERE user_id = ?";
			$updateVars=[$name];
			if(isset($password)){
				$updateVars[]=$password;
			}

			$updateVars[]=$_SESSION['user_id'];

			$this->db->query($sql,$updateVars);
		}
		Redirect::to('profile');
	}
}