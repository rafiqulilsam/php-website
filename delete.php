<?php

$connection = mysqli_connect('localhost','root','','project');

$id = $_GET['id'];

$delete = mysqli_query($connection, "DELETE FROM orders WHERE ID = '$id' ");

if($delete){
    mysqli_close($conn);
    header("location:your_order.php");
    exit;
}
else{
    echo "Error deleting data";
}

?>