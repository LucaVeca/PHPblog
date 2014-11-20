<?php
	//links to database.php
	require_once(__DIR__ . "/../model/config.php");

	//Table within the database
	$query = $connection->query("CREATE TABLE posts ("
		//columns in table
		//id
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		//title		
		. "title varchar(255) NOT NULL,"
		//post
		. "post text NOT NULL,"
		//way tables are connected to each other
		. "PRIMARY KEY(id))");

	if($query){
			echo "Successfully created table: posts";
	}
	else {
		echo "<p>$connection->error</p>";
	}

