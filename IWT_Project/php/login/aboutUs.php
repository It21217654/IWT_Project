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
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="../../images/titleLogo.png">
		<link rel="stylesheet" href="../../css/aboutUs.css">
		<script src="../java/aboutUs.js"> </script>
		<title>About Us</title>
	</head>
	
<body>
<div>
<ul id = "NavBar">
	<li class ="NavBarLeft"><a class ="NBContent"  href ="index.php">HOME</a></li>
	<li class ="NavBarLeft"><a class ="NBContent" href ="aboutUs.php">ABOUT US</a></li>
	<li class ="NavBarLeft"><a class ="NBContent" href ="contactUs.php">CONTACT US</a></li>
	<li><a href = "../viewReview_guest_page.php"><img id = "logo" src = "../../images/logo2.png"></a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="logout.php"><?php echo htmlspecialchars($_SESSION["username"]); ?><a style="color: white;font-weight: bold;" href="logout.php">Logout</a><br><a style="color: white;font-weight: bold;"  href="resetpassword.php">Reset Password</a><div class="dropdown">
	<li class ="NavBarRight"><a class ="NBContent" href ="lands.php">LAND</a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="Rentals.php" id = "ActiveNBContent">RENTALS</a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="sales1.php">SALES</a></li>
</ul>
</div>

<br><br><br>


<div class="abus">

<div class="aboutuswb">

<center><h1>ABOUT US</h1></center>

<div class="aboutUs">
	<b>
	<br>
    <h1>Destinare Properties(pvt) ltd.</h1>
    <br>
    <p> Everyone aspires to own a great piece of property. We, at Destinare, made it our aim to make this dream a reality. 
	Assume you wish to buy land to build a house for you and your family. 
	Destinare provides you with a selection<span id="dots">...</span><span id="more"> of the most excellent land alternatives in the country and a variety of support services, 
	such as legal and financial assistance, to help you realize your property dreams. In Sri Lanka's highly competitive real estate market, 
	Destinare acquired over 300,000 customers, sufficient proof of Destinare's capacity and leadership in the real estate industry.</span></p>
<button class="rmb" onclick="rm()" id="myBtn">Read more</button> </p>
	<br>
	<br>
	<hr class="hr">
	
	
	<br>
    <h2>Our Vision</h2>
	<p>COMMITTED TO CREATING A BETTER PLACE ON EARTH.</p>
	<br>
	<hr class="hr">
	
	
	<br>
    <h2>HISTORY</h2>
	<p>Destinare properties (Pvt) Ltd was founded 26+ years ago with the vision of “Committed to creating a better place on earth.
	” Started small with only four employees, Destinare, quickly rose to the top of the real estate business with having a clear market focus,
	a high level of financial discipline, and implementing innovative marketing approaches.</p>
	<br>
	<hr class="hr">
	
	
	<br>
	<h2>AWARDS & ACHIEVEMENTS</h2>
	<ul>
	<li>MOST VALUABLE REAL ESTATE CONSUMER BRAND IN SRI LANKA</li>
	<li>UPGRADING TO [SL] A (STABLE) CREDIT RATING</li>
	<li>BEST DEVELOPER OF SRI LANKA 2019</li>
	<li>BEST HOUSING DEVELOPMENT 2017</li>
	<li>MOST POPULAR BRAND 2020 </li>
	</b></ul>	

	<div class="clearfix"></div>
	</div>
	</div>
	</div>
	
	
<footer>
<img src ="../../images/logo.png" class ="footerImage">
<div class = "slogan">
	<p>Find the place of your dreams....</p>
	We will be wih you every step of the way
</div>

<div class ="about">
	<p class = "bold"><b>About</b></p>
	<p class = "normal"><a href = "">About Us</a></p>
	<p class = "normal"><a href="">Contact Us</a></p>
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
	