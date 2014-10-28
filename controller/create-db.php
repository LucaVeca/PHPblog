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

	$connection->close();