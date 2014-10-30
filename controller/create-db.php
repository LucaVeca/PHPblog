<?php
	//links to database.php
	require_once(__DIR__ . "/../model/database.php");

	//conects with the classes in database.php
	$connection = new mysqli($host, $username, $password);

	//checks whether or not there was an error connecting to the database
	if($connection->connect_error){
		die("Error: "  . $connection->connect_error);

	}

	$exists = $connection->select_db($database);
	
	//checking if we could connect to database
	//! checks if database doesn't exist
	//creates database with sql
	if(!$exists){
		$query = $connection->query("CREATE DATABASE $database");

		if($query){
			echo "Successfully created database; " . $database;
		}

	}
	else{
		echo "Database has already been created";
	}

	//Table within the database
	$query = $connection->query("CREATE DATABASE posts ("
		//columns in table
		//id
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		//title		
		. "title varchar(255) NOT NULL,"
		//post
		. "post text NOT NULL,"
		//way tables are connected to each other
		. "PRIMARY KEY(id))");

	$connection->close();