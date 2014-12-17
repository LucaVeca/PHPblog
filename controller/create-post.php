
<!DOCTYPE html>
<html>
	<head>
		<meta chartset="UTF-8">
		<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Concert+One' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css"  href="../css/viewpost.css">
		<title></title>
	</head>
	<body id="postpage">
		<?php
	
		//establishes connection to config
		require_once(__DIR__ . "/../model/config.php");
		

		$connection = new mysqli($host, $username, $password, $database);

		//filters post that comes from the title and makes sure its a string
		$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
		//filters post that comes from the post and makes sure its a string
		$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

		$date = new DateTime('today');
		$time = new DateTime('America/Los_Angeles');

		//query to insert info into either the title or the posts
		//query is gonna output whether the command was successfull 
		$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

		echo "<h1>$title</h1>";
		echo "<h3>$post</h3>";
		echo "<p>Posted on: " . $date->format("M/D/Y") . " at " . $time->format("g:i");
		?>
	</body>
</html>


