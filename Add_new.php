<?php
   include('session.php');
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){

      if ( empty($_POST["domain"]) or empty($_POST["pass1"]) or empty($_POST["user1"])) 
      {
        echo("All fields are required");
      }
      else
      {
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
   }

   function Generate($domain){

        $uid=substr(md5(uniqid($domain)),1,13);
        echo "$uid";
    }
    if (array_key_exists('generate', $_POST)){
      Generate($login_session);
    }
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
      <form action="" method="post">
        
        Domain :<br>
      <input type="text" name="domain" value=""><br>
        Username for this domain :<br>
      <input type="text" name="user1" value=""><br>
        Password :<br>
      <input type="text" name="pass1" value="<?php echo Generate($login_session); ?>"><br>It's autogenerated Password. <br>You can choose ur own<br>
      
      <input type="submit" name="submit" value="Submit"><br><br>
      
      <a href = "welcome.php">Main Menu</a><br>
      <a href = "logout.php">Sign Out</a>
   </body>
   
</html>
