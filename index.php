<html>
	<head>
		<meta chartset="UTF-8">
		<title></title>
	</head>
	<body>
		<?php
		$myName = 'Hi my name is Luca';
		$Name = 'bob';
		echo $myName;
		if($Name === 'Luca'){
			echo 'i know you';
		}
		else{
			echo ' i dont know you ';
		}
		echo"web server is running localy";

		//links to crete-db.php
		require_once(__DIR__ . "/controller/create-db.php");
		?>
		
	
	</body>
</html>