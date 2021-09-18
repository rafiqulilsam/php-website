<?php
include 'session.php';
include 'header2.php';


$connection = mysqli_connect('localhost','root','','project');

$query = mysqli_query($connection, "SELECT * FROM  orders WHERE Email = '$_SESSION[login_user]' ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your order</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        table{
            margin:100px auto;
        }
        table tr th{
            padding:10px 50px;
        }
        table tr i{
            color:red;
        }
        table tr td{
            text-align:center;
        }
    </style>
</head>
<body>
    <table border="2">
        <tr>
            <th>Food Name</th>
            <th>resturent Nmae</th>
            <th>price</th>
            <th>cancel</th>
        </tr>

        <?php  
            while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $row['Food_name']; ?></td>
            <td><?php echo $row['resturent_name']; ?></td>
            <td><?php echo $row['Price']; ?></td>
            <td><a href="delete.php?id=<?php echo $row['ID'] ?>;"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>

<?php
include 'footer.php';
?>