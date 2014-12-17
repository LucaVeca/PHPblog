
<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

	//checking whether or not user has been logged in
	if(!authenticateUser()){
		header("Location: " . $path . "index.php");
		die();
	}
?>
<div id="page2">
<h1 id="text">Create a Blog Post</h1>

<!-- important in locating certain files -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div id="text">
		<!--Title-->
		<label for="title">Title: </label>
		<!--on one line-->
		<input id="box" type="text" name="title" />
	</div>

	<div id="text">
		<!--Post-->
		<label for="post">Post: </label>
		<!--allows user to type more with multiple lines-->
		<textarea id="box2" name="post"></textarea>
	</div>

	<div>
	<!-- button for submit -->
		<h4><button id="button" class="up" type="submit">Submit</button></h4>
	</div>
</form>
