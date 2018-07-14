<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo "Invalid user info! try again...";
		}else if($status == "nullvalue"){
			echo "Username/password can't be empty";
		}
	}
?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="loginc.css">



<body>

	<form method="post" action="loginCheck.php">
	<div class="loginbox">
	<img src="loginlogo.png"  class="loginform">
	<h1>Login Here</h1>
		<form>
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p> Password <p>
			<input type="Password" name="password" placeholder="Enter Password">
			
			<input type="submit" name="submit" value="Login">	<br>

			<a href="ForgotPassword.html">Forgot your pasword?</a><br><br>
			<a href="CreateAccount.php">Don't have any account? </a>

		</form>
	</div>


</body>
</head>
</html>