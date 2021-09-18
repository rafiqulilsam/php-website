<?php
include 'session.php';
include 'header2.php';


$connection = mysqli_connect('localhost','root','','project');


?>


<!DOCTYPE html>
<html>
<head>
	<title>FoodLover</title>
	<link rel="sortcut icon" type="image/png" href="image/icon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/order.css">

	<script>
		$(document).ready(function(){
			$("#search").on("keyup", function(){
				var value=$(this).val().toLowerCase();
				$("crd card").filter(function(){
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				})
			});
		});
	</script>
</head>
<body>
	<div style="background-image: url(image/cover3.jpg); background-repeat: no-repeat; background-size: cover;" class="src">
		<center><input id="search" type="search" name="search" placeholder="Search Your Food Here............."></center>
	</div>
<div class="container">
<div class="crd">
	<h1>Avaiable Food</h1>	
<?php 
	$query = mysqli_query($connection, "SELECT * FROM advertise ");

	while($row = mysqli_fetch_assoc($query)):
 ?>

	<div class="card mb-3 ">
		<div class="row no-gutters">
	        <div class="col-md-4">
				<img style="width: 100%; height: 100%; padding:10px 10px;" src="<?php echo $row['image']; ?>" class="card-img" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
				    <h3 class="card-title"><?php echo $row['food_name']; ?></h3>
				    <h4><?php echo $row['restaurant_name']; ?></h4>
				    <p><?php echo $row['Address']; ?></p>
				    <h5><?php echo $row['price']; ?></h5>
				    <a href="order_form.php?id=<?php echo $row['ID']; ?>">order</a>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>	
</div>
</div>
<?php
include 'footer.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>