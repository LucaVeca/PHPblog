<?php
	require_once(__DIR__ . "/../model/config.php");
?>

<h1 id="text">Create a Blog Post</h1>

<!-- important in locating certain files -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div id="text">
		<!--Title-->
		<label for="title">Title: </label>
		<!--on one line-->
		<input type="text" name="title" />
	</div>

	<div id="text">
		<!--Post-->
		<label for="post">Post: </label>
		<!--allows user to type more with multiple lines-->
		<textarea name="post"></textarea>
	</div>

	<div>
	<!-- button for submit -->
		<h4><button id="button" class="up" type="submit">Submit</button></h4>
	</div>
</form>