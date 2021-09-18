
<?php
include 'session.php';
include 'header2.php';


$connection = mysqli_connect('localhost','root','','project');

if(isset($_POST['upload'])){
	$var1 = rand(1111 , 9999);
    $var2 = rand(1111 , 9999);

    $var3 = $var1.$var2;
    $var3 = md5($var3);

	$fnm = $_FILES["image"]["name"];

	$dst = "./upload/".$var3.$fnm;

    $dst_db = "upload/".$var3.$fnm;

	move_uploaded_file($_FILES["image"]["tmp_name"], $dst);

	$check = mysqli_query($connection, "INSERT INTO advertise(restaurant_name, Address, Email, food_name, price, image)
    VALUES('$_POST[rname]', '$_POST[address]','$_POST[email]', '$_POST[fname]','$_POST[price]', '$dst_db') ");
	if($check){
        echo "<script> alert('Data Inserted Successfully.') </script>";
    }
    else{
        echo "<script> alert('Error Uploading Data.') </script>";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>FoodLover</title>
	<link rel="sortcut icon" type="image/png" href="image/icon.png">
	<link rel="stylesheet" type="text/css" href="css/advertis.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<form action="" method="POST" enctype="multipart/form-data">
    	<label for="rname">Resturent Name:</label><br>
    	<input type="text" id="rname" name="rname" placeholder="resturent name"><br><br>
    	<label for="address">Address:</label><br>
    	<input type="text" id="address" name="address" placeholder="address"><br><br>
    	<label for="email">Email:</label><br>
    	<input type="email" id="email" name="email" placeholder="email"><br><br>
    	<label for="fname">Food Name:</label><br>
    	<input type="text" id="fname" name="fname" placeholder="food name"><br><br>
    	<label for="price">Price:</label><br>
    	<input type="text" id="price" name="price" placeholder="price"><br><br>
        <label for="image">Food Image:</label><br>
        <input style="color: white;" type="file" id="image" name="image"><br><br>
    	<input type="submit" value="Submit" name="upload">
	</form>	
</div>
<?php
include 'footer.php';
?>
</body>
</html>