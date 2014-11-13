<?php
	
	//establishes connection to database
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password, $database);

	//filters post that comes from the title and makes sure its a string
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//filters post that comes from the post and makes sure its a string
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	
	//query to insert info into either the title or the posts
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");

	if($query){
		echo "<p>Successfully inserted post: $title</p>";
	}
	else{
		echo "<p>$connection->error</p>";
	}

	$connection->close();