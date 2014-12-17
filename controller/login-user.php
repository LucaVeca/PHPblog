<?php
	
	require_once(__DIR__ . "/../model/config.php");

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	//helps store data
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

	//tels how many rows were retrieved from the database 
	if($query->num_rows == 1){
		//fetches array stored in query
		$row = $query->fetch_array();

		if($row["password"] === crypt($password, $row["salt"])){
			$_SESSION["authenticated"] = true;
			echo "<p>Login was successfull</p>";
		}
		else{
			echo "<p>Invalid username or password</p>";
		}
	}
	else{
		echo "<p>Invalid username or password</p>";
	}