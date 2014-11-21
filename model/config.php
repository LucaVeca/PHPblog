<?php
	require_once(__DIR__."/database.php");
	session_start();

	$path = "/PHPblog/";

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	
	//gets rid of "Database already exists"
	if(isset($_SESSION["connection"])){
		$connection = new Database($host, $username, $password, $database);
		$_SESSION["connection"] = $connection;
	}