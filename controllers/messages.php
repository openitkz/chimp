<?php

class Messages extends Controller{
	public function __construct(){
		parent::__construct();
		$this->protect->from('guest');
		$this->load->view('layouts/header');
	}

	public function index(){	
		$messages=$this->db->query("SELECT s.* FROM messages_sent AS s WHERE s.user_id=?",[
				$_SESSION['user_id']
			])->get();

		$this->load->view('messages',[
			'messages' => $messages
		]);
	}
}