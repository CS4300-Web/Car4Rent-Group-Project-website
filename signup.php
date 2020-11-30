<!DOCTYPE html>
<!--Hung Ly-->
<html>
<head>
	<meta charset = "utf-8">
	<link rel="icon" href="pics/minilogo.png">
	<title>Car4Rent | User Sign Up</title>
	<link rel="stylesheet" type="text/css" href="global.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body {text-align:center; margin:100px;}
	</style>
</head>
<body>
	<?php

		if (!isset($_POST['username']) || !isset($_POST['password']) 
			 || !isset($_POST['password2']) ) {
		   echo "<p>You have not entered all the required details.<br />
				 Please go back and try again.</p>";
		   exit;
		}
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		
		try{
			@$db = new mysqli('localhost', 'root', '', 'car4rent');
			
			/* $query = "SELECT username,password FROM users WHERE username = :username";  
			$stmt = $db->prepare($query);  
			$stmt->bindParam(':username', $username);
			$stmt->execute();
			
			if ($stmt->rowCount() > 0){
				echo "<p>Username exists.</p>";
				echo "<p><a href='signup.html'>Retry</a></p>";
				echo "<p><a href='signin.html'>Login</a></p>";
			} */
			if ($password == $password2) {
				$query2 = "INSERT INTO users VALUES (?,?)";
				$stmt2 = $db->prepare($query2);
				$stmt2->bind_param('ss',$username, $password);
				$stmt2->execute();
				
				if ($stmt2->affected_rows > 0) {
					echo  "<p>You have created an account successfully.</p>";
					echo "<p>Click <a href='signin.html'>here</a> to sign in.</p>";
				} else {
					echo "<p>An error has occurred.<br/></p>";
					echo "<p><a href='signup.html'>Retry</a></p>";
				}
				
			} else {
				echo "<p>Passwords not match.</p>";
				echo "<p><a href='signup.html'>Retry</a></p>";
			}
			
			$db = NULL;
		} 	catch (PDOException $e) {
			echo "Error: ".$e->getMessage();
			exit;
		}
	?>
</body>
</html>