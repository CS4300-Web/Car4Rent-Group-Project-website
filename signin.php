<!DOCTYPE html>
<!-- Tamim Gerbi -->
<html>
<head>
	  <title>Car4Rent | User Sign In</title>
	  <link rel="stylesheet" type="text/css" href="global.css">
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	// Initialize the session
	session_start();
	 
	// Check if the user is already logged in, if yes then redirect him to welcome page
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		header("location: Welcome.php");
		exit;
	}
	 
	// Include config file
	require_once "config.php";
	 
	// Define variables and initialize with empty values
	$username = $password = "";
	$username_err = $password_err = "";
	 
	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	 
		// Check if username is empty
		if(empty(trim($_POST["username"]))){
			$username_err = "Please enter username.";
		} else{
			$username = trim($_POST["username"]);
		}
		
		// Check if password is empty
		if(empty(trim($_POST["password"]))){
			$password_err = "Please enter your password.";
		} else{
			$password = trim($_POST["password"]);
		}
		
		// Validate credentials
		if(empty($username_err) && empty($password_err)){
			// Prepare a select statement
			$sql = "SELECT id, username, password FROM users WHERE username = ?";
			
			if($stmt = mysqli_prepare($link, $sql)){
				// Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "s", $param_username);
				
				// Set parameters
				$param_username = $username;
				
				// Attempt to execute the prepared statement
				if(mysqli_stmt_execute($stmt)){
					// Store result
					mysqli_stmt_store_result($stmt);
					
					// Check if username exists, if yes then verify password
					if(mysqli_stmt_num_rows($stmt) == 1){                    
						// Bind result variables
						mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
						if(mysqli_stmt_fetch($stmt)){
							if(password_verify($password, $hashed_password)){
								// Password is correct, so start a new session
								session_start();
								
								// Store data in session variables
								$_SESSION["loggedin"] = true;
								$_SESSION["id"] = $id;
								$_SESSION["username"] = $username;                            
								
								// Redirect user to welcome page
								header("location: Welcome.php");
							} else{
								// Display an error message if password is not valid
								$password_err = "The password you entered was not valid. Try again.";
							}
						}
					} else{
						// Display an error message if username doesn't exist
						$username_err = "No account found with that username. Try again.";
					}
				} else{
					echo "Oops! Something went wrong. Please try again later.";
				}

				// Close statement
				mysqli_stmt_close($stmt);
			}
		}
		
		// Close connection
		mysqli_close($link);
	}
	?>
	<div class = "form-container">
	 <ul class= "list">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<li><h2>Sign In</h2></li>
			<div class="<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
				<p style="color:red;"><?php echo $username_err; ?></p><br>
			</div>
			<div class="<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
				<p style="color:red;"><?php echo $password_err; ?></p><br>
			</div>
			<li><input type="text" name="username" placeholder="Username" required> </li>
			<li><input type="password" name="password" placeholder="Password" required></li>
			<li><button class="rentbutton" onclick="submit">Sign In</button></li>
			<li><a href="signup.html">Sign Up</a></li>
			<li><a href="">Forget Password?</a></li>
		</form>
	</ul>
	</div>
</body>
	<div style="margin:20px; text-align:center;">
		<br><br><br><br><br><br><br><br><br>
		<a href="HomePage.html"><img src="pics/logo.png" height="100"></a>
	</div>
</html>