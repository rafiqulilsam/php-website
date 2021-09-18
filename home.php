<?php
include 'session.php';
include 'header2.php';



$host = "localhost";
$username = "root";
$password = "";
$database = "project";


$connection = mysqli_connect($host , $username, $password, $database);

if(isset($_POST['submit'])){
	$name = $_POST['fname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$query= mysqli_query($connection, "INSERT INTO message(Name, Email, Message) VALUES('$name','$email','$message')");
	if($query){
		$success = "Your Message has been sent!";
	}
		
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>FoodLover</title>
	<link rel="sortcut icon" type="image/png" href="image/icon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="background" style="background-image: url(image/cover2.jpg);">
	<button class="btn"><a style="text-decoration: none; color: white;" href="order.php">Search Your Food</a></button>
</div>
<div class="container">
<div class="crd">
	<h1>Recebtly Added</h1>	
	<div class="card mb-3 ">
		<div class="row no-gutters">
	        <div class="col-md-4">
				<img style="width: 100%; height: 100%; padding:10px 10px;" src="image/food1.jpg" class="card-img" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
				    <h3 class="card-title">Beef Biryabi</h3>
				    <h4>7DAYZ</h4>
				    <p>Solosahar super market solosahar 2 no gate, Chittagong City Bangladesh</p>
				    <h5>1,00 TK</h5>
				    <button class="btn">Order Now</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card mb-3 ">
		<div class="row no-gutters">
	        <div class="col-md-4">
				<img style="width: 100%; height: 100%; padding:10px 10px;" src="image/food2.jpg" class="card-img" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
				    <h3 class="card-title">Kacchi Biryani</h3>
				    <h4>Handi Restaurant</h4>
				    <p>Punak Bhaban, Dampara Police Line, M M Ali Road, CDA Avenue, Chittagong, Bangladesh</p>
				    <h5>2,00 TK</h5>
				    <button class="btn">Order Now</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card mb-3 ">
		<div class="row no-gutters">
	        <div class="col-md-4">
				<img style="width: 100%; height: 100%; padding:10px 10px;" src="image/food3.jpg" class="card-img" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
				    <h3 class="card-title">Shahi Biryani</h3>
				    <h4>Red Chili Restaurant</h4>
				    <p>Kazir Dawri , Chittagong, Bangladesh</p>
				    <h5>1,50 TK</h5>
				    <button class="btn">Order Now</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<form action="" method="POST">
  <label for="fname">Your Name:</label><br>
  <input type="text" id="fname" name="fname" placeholder="your name"><br><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" placeholder="your email"><br><br>
  <label>Your Message:</label><br>
  <textarea name="message">your message</textarea><br><br>
  <input type="submit" name="submit" value="Submit">
  <?php if(isset($success)){ echo  "<script>alert('Your message has been sent');</script>" ;}?>
</form>
<?php include 'footer.php'; ?>
</body>
</html>