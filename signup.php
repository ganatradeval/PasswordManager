

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

	<div>
		<h2 style="color: blue">Sign Up</h2>
		<form action="signingup.php" method="post">

			<p>
				<label>Username:</label><br>
				<input type="text" name="user" />
			</p>
			<p>
				<label>Email:</label><br>
				<input type="text" name="email" />
			</p>
			<p>
				<label>Password</label><br>
				<input type="Password" name="pass" />
			</p>
			<p>
				<label>Confirm Password</label><br>
				<input type="Password" name="pass2" />
			</p>
			<p>
				<input type="submit" name="regbtn" value="Register" />
			</p>
		</form>

	</div>

</body>
</html>