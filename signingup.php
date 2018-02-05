<?php
	//session_start();

	$conn = mysqli_connect('localhost','root','','login');
	// Check connection
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected";

	
		$username=mysqli_real_escape_string($conn,$_POST['user']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$password=mysqli_real_escape_string($conn,$_POST['pass']);
		$password2=mysqli_real_escape_string($conn,$_POST['pass2']);
		
		
		if($password == $password2){
			$password=md5($password);
			$sql="insert into users(username,email,passwd) values('$username','$email','$password')";
			
			if(mysqli_query($conn,$sql))
				echo "Database updated";
			else
				echo "Error:".$sql."<br>".mysqli_error($conn);


			echo "Login Successful";
			//echo unpack('H*', $password);
			//$_SESSION['message']='You are now logged in';
			//$_SESSION['username']=$username;
			//header("location: login.php");
		}else{

			echo "Password doesn't match";
			//$_SESSION['message']='Two password doent match';
		}
	
?>