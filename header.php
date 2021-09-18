<!DOCTYPE html>
<html>
<head>
	<title>FoodLover</title>
	<link rel="sortcut icon" type="image/png" href="image/icon.png">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
<header>
<nav>
	<div class="navbar clear">
		<a href="index.php" class="logo"><img src="image/logo.png"></a>
		<div class="menu-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div>
		<div class="menu">
			<ul>
				<li><a href="login.php">Food</a></li>
				<li><a href="login.php">Advertise</a></li>
				<li><a href="about2.php">About Us</a></li>
				<li><a href="login.php">Login</a></li>
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