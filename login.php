<?php
include "header.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $email1 = mysqli_real_escape_string($conn,$_POST['email']);
  $pass1 = mysqli_real_escape_string($conn,$_POST['password']);

  $sql = "SELECT id FROM login WHERE Email = '$email1' and Password = '$pass1'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  //$active = $row['name'];
      
  $count = mysqli_num_rows($result);

  if($count == 1) {
      //session_register("$myusername");
      $_SESSION["login_user"] = $email1;
      //echo "Session variables are set. and name is:". $_SESSION["login_user"];
      header("location: home.php");
    }else {
      echo "Your Login Name or Password is invalid";
      $error = "Your Login Name or Password is invalid";
    }     
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>FoodLover</title>
	<link rel="sortcut icon" type="image/png" href="image/icon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container">
		<form action="" method="POST">
			<h1 style="color: #e67e22; padding-bottom: 30px;">Login Here</h1>
  			<label for="email">Email:</label><br>
  			<input type="email" id="email" name="email" placeholder="your email"><br><br>
  			<label for="pass">Password:</label><br>
  			<input type="password" id="pass" name="password" placeholder="password"><br><br>
  			<input class="btn btn-outline-danger" style="font-weight: bold; text-transform: uppercase;" type="submit" value="Submit" name="submit"><br><br>
  			<span>No Account.? Click Here To Register<a style="margin-left: 8px" class="btn btn-primary" href="registration.php">Register Now</a></span>	
		</form>
	</div>
  <?php include 'footer.php'; ?>
</body>
</html>