<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/Main.css"/>
<link rel="shortcut icon" href="../../images/titleLogo.png">
<script src="../../js/Main.js" type ="text/javascript"> </script>
<title>Destinare Properties</title>
</head>
<body>
<div class ="backgroundImage" >
<header>
	<div>
		<ul class = "NavBar">
			<li class ="NavBarLeft"><a class ="NBContent"  href ="index.php" id = "ActiveNBContent">HOME</a></li>
			<li class ="NavBarLeft"><a class ="NBContent" href ="aboutus.php">ABOUT US</a></li>
			<li class ="NavBarLeft"><a class ="NBContent" href ="contactUs.php">CONTACT US</a></li>
			<li><a href = "../viewReview_guest_page.php"><img id = "logo" src = "../../images/logo2.png"></a></li>
	
			<li class ="NavBarRight"><a class ="NBContent" href ="logout.php"><?php echo htmlspecialchars($_SESSION["username"]); ?><a style="color: white;font-weight: bold;" href="logout.php">Logout</a><br><a style="color: white;font-weight: bold;"  href="resetpassword.php">Reset Password</a><div class="dropdown">

			<li class ="NavBarRight"><a class ="NBContent" href ="lands.php">LAND</a></li>
			<li class ="NavBarRight"><a class ="NBContent" href ="Rentals.php" >RENTALS</a></li>
			<li class ="NavBarRight"><a class ="NBContent" href ="sales1.php">SALES</a></li>
		</ul>
	</div>
</header>
</div>
<center>
<div id ="search">
<form action = "../livesearch" method = "get" class = "searchForm" >
<input type = "text" placeholder="What are you looking for?" name ="q">
<button type = "submit"><img src = "../../images/searchIcon.webp" ></button>
</form>
</div>
</center>
<div class = "backgroundImage1"> </div>
<div class = "heading"> 
	Featured <span>Properties</span>
</div>

<center>
<div id = "mainSlideShow" >  

	<div class = "slideShow1">
		
		<div class = "mySlide fade" >
			<a href><img src = "../../images/slideShow1.jpg"></a>
			<div class = "slideText">Heritage-Galle</div>
		</div>
		
		<div class = "mySlide fade" style = "display:block">
			<a href=""><img src = "../../images/slideShow2.jpg" ></a>
			<div class = "slideText">Waterfall Residencies</div>
		</div>
		
		<div class = "mySlide fade">
			<a href=""><img src = "../../images/slideShow3.jpg"></a>
			<div class = "slideText">Water Estate</div>
		</div>
		
	</div>
</div>
</center>
<footer>
<img src ="../../images/logo.png" class ="footerImage">
<div class = "slogan">
	<p>Find the place of your dreams....</p>
	We will be with you every step of the way
</div>

<div class ="about">
	<p class = "bold"><b>About</b></p>
	<p class = "normal"><a href = "../../html/aboutUs.html">About Us</a></p>
	<p class = "normal"><a href="../../html/contactUs.html">Contact Us</a></p>
</div>
<div class="contactUs" >
	<p class = "bold"><b>Contact Us</b></p>
	<p class ="normal">Destinare Properties<br>
	Head office, No.100<br>
	Malwathugoda,Galagedara<br>
	Kandy<br>
	Sri Lanka</p>

</div>

<div class="contactUs" >
	<p class = "bold"><b>Contact Details</b></p>
	<p class ="normal">+94 5566 23155<br>
	+94 6456 32565<br>
	destinareProperties@info.lk<br><br>
	Destinare Properties © by MLB_02.02_03
	</p>
</div>
</footer>
</body>
</html>