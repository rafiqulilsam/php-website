
<?php
  $conn = mysqli_connect('localhost','root','','project');

  session_start();
   $user_check = $_SESSION['login_user'];
   //echo "From check User :".$user_check;
   
   //$ses_sql = mysqli_query($conn,"select name from user where name = '$user_check' ");
   $sql = mysqli_query($conn,"SELECT Name FROM login WHERE Email='$user_check'");
   
   $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
   
   $login_session = $row['Name'];
   //echo "From Session PHP:".$login_session;
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>