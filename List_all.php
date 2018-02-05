

<html lang="en-us">
<head>
	<title>Password Manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link  rel="stylesheet" type="text/css" href="project.css">
</head>
   <body>
   		<div class="welcome">
         	WELCOME TO PASSWORD MANAGER</div>
			<?php 
				include('session.php');

				$query="select * from details where username='$login_session' ";
				$result=mysqli_query($conn,$query);
				$count=0;

				
				echo "<table>";
				echo "<tr>";
				echo "<th>Sr.no.</th><th>Domain</th><th>Username</th><th>Password</th>";
				echo "</tr>";
				
				if (mysqli_num_rows($result)>0){
					while ($row=mysqli_fetch_assoc($result)) {
						$count+=1;
						echo "<tr><td>$count</td><td>". $row["domain"]."</td><td>". $row['username1']."</td><td> ". $row['password']."</td></tr> <br> ";

					}
				}else{
					echo "0 result";
				}
				echo "</table>";
			?>
      	<a href = "welcome.php">Main Menu</a><br>
      	<a href = "logout.php">Sign Out</a>
   </body>
   
</html>
