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
	<p>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
	<p>Signed In Successfully
	<br>Click <a href="User-interface.php">here </a>to go to user page.</p>
</body>
</html>