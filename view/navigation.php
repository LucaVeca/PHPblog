<?php 
	//requires config from model file
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

	//checking whether or not user has been logged in
	if(!authenticateUser()){
		header("Location: " . $path . "index.php");
		die();
	}
?>
<nav>
	<ul>
		<li ><h1 ><a id="text1" href="<?php /*says location of post.php file*/echo $path . "post.php" ?>">Blog Post Form</a></h1></li>
	</ul>
</nav>
