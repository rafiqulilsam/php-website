<?php

include 'session.php';
include 'header2.php';

$connection = mysqli_connect('localhost','root','','project');

$id = $_GET['id'];

$query = mysqli_query($connection, "SELECT * FROM advertise WHERE ID = '$id' ");

$row = mysqli_fetch_assoc($query);

if(isset($_POST["order"])){
    $food_name = $_POST['fname'];
    $r_name = $_POST['rname'];
    $price = $_POST['price'];
    $email = $_POST['email'];
    $locataion = $_POST['location'];

    $query = mysqli_query($connection, "INSERT INTO orders(Food_name, resturent_name, Price, Email, Location) 
    VALUES('$food_name', '$r_name', '$price', '$email', '$locataion' ) ");

    if($query){
        echo "<script>alert('data has been sent successfully');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order_form</title>
    <link rel="stylesheet" href="css/order.css">
</head>
<body>
    <div class="order_form">
        <center>
        <form action="" method="post" style="margin-top:50px;">
            <label for="">Food Name:</label></br>
            <input type="text" name="fname" value="<?php echo $row['food_name']; ?>"></br>
            <label for="">restaurant Name:</label></br>
            <input type="text" name="rname" value="<?php echo $row['restaurant_name']; ?>"></br>
            <label for="">Price:</label></br>
            <input type="text" name="price" value="<?php echo $row['price']; ?>"></br>
            <label for="">Your Email:</label></br>
            <input type="text" name="email"></br>
            <label for="">Your Location:</label></br>
            <input type="text" name="location"></br>

            <input type="submit" name="order" value="order">
        </form>
        </center>
    </div>

<?php

include 'footer.php';
?>
</body>
</html>