
<?php
   include('session.php');
   
?>
<html lang="en-us">
<head>
   <title>Password Manager</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link  rel="stylesheet" type="text/css" href="project.css">
</head>
<body>
      <div class="welcome">
         WELCOME TO PASSWORD MANAGER</div>

      <h1>Welcome <?php echo $login_session; ?></h1> 
      How can I help you?<br>
      <form action="Add_new.php" method="post">
		  <input type="submit" name="submit" value="Add new user details"><br>
			</form>
      <form action="List_all.php" method="post">
      <input type="submit" name="submit" value="List your saved Password"><br>
      </form>
      
      
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>