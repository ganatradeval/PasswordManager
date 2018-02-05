<?php
	include('session.php');
	if($_SERVER["REQUEST_METHOD"] == "POST"){

   		$domain=mysqli_real_escape_string($conn,$_POST['domain']);
		$pass1=mysqli_real_escape_string($conn,$_POST['pass1']);
   		$user1=mysqli_real_escape_string($conn,$_POST['user1']);
		

		$query = "insert into details(username,domain,username1,password) values ('$login_session','$domain','$user1','$pass1')";
		if (mysqli_query($conn, $query)) {
    		echo "New record created successfully";
		}else {
    		echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}
   }
	
?>