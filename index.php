	<?php
	//$myName = 'Hi my name is Luca';
	//$Name = 'bob';
	//echo $myName;
	//if($Name === 'Luca'){
	//echo 'i know you';
	//}
	//else{
	//echo ' i dont know you';
	//}
	//echo"web server is running localy";
	//links to crete-db.php
	
	require_once(__DIR__ . "/controller/login-verify.php");
	//requires header
	require_once(__DIR__ . "/view/header.php");
	if(authenticateUser()){
		//requires navigation
		require_once(__DIR__ . "/view/navigation.php");
	}
	require_once(__DIR__ . "/controller/create-db.php");
	//requires footer
	require_once(__DIR__ . "/view/footer.php");
	require_once(__DIR__ . "/controller/read-posts.php")
	?>