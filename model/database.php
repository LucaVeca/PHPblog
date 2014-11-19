<?php
//helps organize code 
//moved classes here to help organize code and avoid repeating things
//classes are used to store variables known as properties, atributes or fields 
//defined by using one of the keywords public, protected, or private, followed by a normal variable declaration
//A class is useful for containing the code and the relevant data together, isolated from everything else
//classes are created because they can be used or called anywhere in your webpage and create an object
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

	//A function is a block of statements that can be used repeatedly in a program.
	public function openConnection(){
		//establishes new connection
		$this->connection = new msqli($this->host, $this->username, $this->password, $this->database);

		//checks whether or not there was an error connecting to the database
		if($connection->connect_error){
			die("Error: "  . $this->connection->connect_error);

		}
	}

	public function closeConnection(){
		if(isset($this->connection)){
			$this->connection->close();
		}
		
	}

	public function query($string){
		$this->openConnection();

		//executes query on database
		$query = $this->connection->query($string);

		$this->closeConnection();

		return $query;
	}
}
