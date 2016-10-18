<?php

class User extends Model{
	public function get(){
		return $this->db->query("SELECT name, email FROM users WHERE id= ? ",[
				$_SESSION['user_id']
		])->first();
	}
}