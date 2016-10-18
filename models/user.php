<?php

class User extends Model{
	public function get(){
		return $this->db->query("SELECT username FROM users WHERE user_id= ? ",[
				$_SESSION['user_id']
		])->first();
	}
}