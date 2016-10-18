<?php

class Redirect{
	public static function to($path){
		header('Location: '.BASE_URL.'index.php/'.$path);
		exit();
	}
}