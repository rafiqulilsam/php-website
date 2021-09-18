<?php 


$connection = mysqli_connect('localhost','root','','project');
if(isset($_GET['logout'])){
    session_destroy();
    header("location: index.php");
    }
?>



<!DOCTYPE html>
<html>
<head>
	<title>FoodLover</title>
	<link rel="sortcut icon" type="image/png" href="image/icon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
<header>
<nav>
	<div class="navbar clear">
		<a href="home.php" class="logo"><img src="image/logo.png"></a>
		<div class="menu-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div>
		<div class="menu">
			<ul>
				<li><a href="order.php">Food</a></li>
				<li><a href="advertis.php">Advertise</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="your_order.php">Your Order </a></li>
				<li><a style="background-color: #2c3e50" href=""><?php echo  $login_session;?></a></li>
				<li><a style="background-color: black;" href="?logout=true"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
</header>



<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>

<script type="text/javascript">

var menu = $(".menu");
$(window).resize(function(){
	$(".menu-toggle").removeClass("active");
	if($(window).innerWidth() > 600){
		menu.show();
	} else {
		menu.hide();
	}
});
$(".menu-toggle").click(function(){
	$(this).toggleClass("active");
	menu.slideToggle();
})
$(".open-submenu").click(function(){
	$(this).toggleClass("active");
	$(this).next("ul").slideToggle();
	$(this).children(".arrow").toggleClass("down up");
});

</script>
</body>
</html>