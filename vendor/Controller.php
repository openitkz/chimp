<?php


class Controller{

	public function __construct(){
		$this->db=DB::getInstance();
		$this->load=Load::getInstance();
		$this->protect=Guard::getInstance();
	}

	
}