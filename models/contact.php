<?php

class Contact extends Model{
	public function all(){
		return $this->db->query("SELECT c.* FROM contact_lists as c INNER JOIN users as u ON u.user_id=c.users_id AND u.user_id=?",[
			$_SESSION['user_id']
		 ])->get();
	}

	public function store($values){
		$this->db->query("INSERT INTO contact_lists(name,description,users_id) VALUES(?,?,?)",$values);
	}
}