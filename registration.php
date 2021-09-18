<?php
include "header.php";

?>



<!DOCTYPE html>
<html>
<head>
	<title>FoodLover</title>
	<link rel="sortcut icon" type="image/png" href="image/icon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
</head>
<body>
	<div class="container">
		<form action="insert.php" method="POST">
			<h1 style="color: #e58e26; padding-bottom: 30px;">Registration Form</h1>
			<label for="fname">Your Name:</label><br>
 			<input type="text" id="fname" name="fname" placeholder="your name"><br><br>
  			<label for="email">Email:</label><br>
  			<input type="email" id="email" name="email" placeholder="your email"><br><br>
  			<label for="pass">Password:</label><br>
  			<input type="password" id="pass" name="password" placeholder="password"><br><br>
  			<input class="btn btn-outline-danger" style="font-weight: bold; text-transform: uppercase;" type="submit" value="Submit" name="submit"><br><br>	
  			<span style="color: white; font-weight: bold;">Now Click Here For Login<a style="margin-left: 8px; color:white; font-weight: bold;" class="btn btn-warning" href="login.php">Login Now</a></span>
		</form>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>