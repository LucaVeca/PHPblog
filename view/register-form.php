<h1>REGISTER</h1>

<?php
	require_once(__DIR__ . "/../model/config.php");
?>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<!--creates a way for only specific users to create blog posts -->
	<div>
		<label for="email">Email: </label>
		<input type="text" name="email"/>
	</div>

	<div>
	<label for="username">Username: </label>
		<input type="text" name="username"/>
	</div>

	<div>
		<label for="password">Password: </label>
		<input type="password" name="password"/>
	</div>

	<div>
		<h4><button id="button" class="up" type="submit">Submit</button></h4>
	</div>
</form>