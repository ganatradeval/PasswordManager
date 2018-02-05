<?php
	include('config.php');
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//Get values from form
		$username=$_POST['user'];
		$password=$_POST['pass'];
		
		//mysql_connect('localhost','root','','login');
		//mysql_select_db("login");

		//$conn = mysqli_connect('localhost','root','','login');
		// Check connection
		//if (!$conn) {
	    //die("Connection failed: " . mysqli_connect_error());
		//}

		//echo "Connected successfully";
		
		//Preventing sql injection
		$username=stripcslashes($username);
		$username=mysqli_real_escape_string($conn,$username);
		$password=stripcslashes($password);
		$password=mysqli_real_escape_string($conn,$password);
		$password=md5($password);
		$result = "select * from users where username='$username' and passwd='$password' ";
		$row = mysqli_query($conn, $result);

		if (mysqli_num_rows($row) > 0) {
			$_SESSION['login_user'] = $username;
			//echo "Login Successful!!";
			header("location: welcome.php");
		}else{
			
			echo "Failed to Login";
		}
		
	}
	
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Password Manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link  rel="stylesheet" type="text/css" href="project.css">
</head>
<body>
	<div class="welcome">
		WELCOME TO PASSWORD MANAGER</div>
	<div class="loginpage">
	<fieldset align="center">
		<legend>LOGIN HERE</legend>
		<form action="" method="post" align="right" >
			UserName :
			<input type="text" name="user" placeholder="Enter your name">
			</input><br>
			Password :<input type="password" name="pass" placeholder="Enter password"></input><br>
			<input type="submit" name="submit" value="Submit"><br>
			</input>
			Not yet registered? <a href="signup.php">Register Now</a>
		</form>
	</fieldset>
	</div>
</body>
</html>
<!--
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<div>
		<form action="process.php" method="post">
			<p>
				<label>Username</label>
				<input type="text" name="user" />
			</p>
			<p>
				<label>Password</label>
				<input type="Password" name="pass" />
			</p>
			<p>
				<input type="submit" value="Login" />
			</p>
		</form>
	</div>
</body>
</html>
-->
