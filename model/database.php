<?php
//helps organize code 
class Database{
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

	//establishes connection to global variables
	public function__ construct($host, $username, $password, $database){
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}

	public function openConnection(){

	}

	public function closeConnection(){
		
	}

	public function query($string){
		
	}
}
