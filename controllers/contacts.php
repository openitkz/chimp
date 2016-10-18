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
			$description=stripcslashes($_POST['description']);
			$this->contact->store([
				$name,
				$description,
				$_SESSION['user_id']
			]);
		}

		Redirect::to('contacts');
	}

	public function storecontact(){
		if(isset($_POST) && !empty($_POST)){
			$name=stripcslashes($_POST['name']);
			$surname=stripcslashes($_POST['surname']);
			$email=stripslashes($_POST['email']);
			$this->contact->store_contact([
				$name,
				$surname,
				$email,
				$_SESSION['user_id']
			]);
		}

		Redirect::to('contacts');
	}

	public function show($id){

		$contacts=$this->db->query("SELECT c.* FROM contacts as c INNER JOIN contact_lists as c_l ON c.contact_lists_id=c_l.contact_lists_id WHERE c_l.contact_lists_id=? AND c_l.users_id=?",[
				$id,
				$_SESSION['user_id']
			])->get();
		$this->load->view('contact',[
				'contacts' => $contacts
			]);
	}
}