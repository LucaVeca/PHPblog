<?php

	require_once(__DIR__ . "/../model/config.php");

	//selects posts from post table
	$query = "SELECT * FROM posts ORDER BY id DESC";
	// allows post to be retrieved
	$result = $_SESSION["connection"]->query($query);
	//displays the selected posts
	if($result){
		//creates a loop that runs while there is a post that is able to be selected
		while($row = mysqli_fetch_array($result)){
			//opens the dive and gives it the class 'posts'
			echo "<article class='post' class='posts readmore-js-section readmore-js-collapsed'>";
			//displays the title of the post
			echo "<h2>" . $row['title'] . "</h2>";
			echo "<br />";
			//displays the post
			echo "<p>" .  $row['post'] . "<h1>";
			//displays when the post was created
			echo "<h5>Posted on: " . $row['DateTime'] . "</h5>";
			echo "<br/>";
			echo "</article>";
			
		}
	}