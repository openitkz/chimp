<?php

class Contact extends Model{
	public function all(){
		return $this->db->query("SELECT c.* FROM contact_list as c INNER JOIN users as u ON u.id=c.user_id AND u.id=?",[
			$_SESSION['user_id']
		 ])->get();
	}

	public function store($values){
		$this->db->query("INSERT INTO contact_list(name,user_id) VALUES(?,?)",$values);
	}
}