<?php
	
	//establishes connection to database
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password, $database);

	//filters post that comes from the title and makes sure its a string
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	//filters post that comes from the post and makes sure its a string
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	//echo the title
	echo "<p>Title: $title</p>";
	//echo the post
	echo "<p>Post: $post</p>";

	$connection->close();