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
<link rel="stylesheet" href="../../css/contactUs.css"/>
<link rel="shortcut icon" href="../../images/titleLogo.png">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<title>Destinare Properties</title>
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
<br>
<br>
<br>
<br>
<br>



</header>

  <div class="container">
  
    <div class="content">

      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Destinare Properties</div>
          <div class="text-one">Head office,No 100</div>
          <div class="text-two">Malwathugoda,Galagedara</div>
          <div class="text-two">Kandy</div>
          <div class="text-two">Sri Lanka</div>
          
          

        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+94 556623155</div>
          <div class="text-two">+94 645632565</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">destinareProperties@info.lk</div>
        
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any issues , you can send us a message from here. It's our pleasure to help you.</p>
		<br>
      <form action="../contactus.php" method="post">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="name" required >
        </div>
		
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email" required>
        </div>
		
		<div class="input-box">
          <input type="text" placeholder="Property in concern" name="ID" required>
        </div>
		<br>
		<h4>Type your question here</h4>
		<div class="input-box">
		<textarea id="textarea" name="description" rows="4" cols="30" required>
        
        </textarea>
		</div>
		
        <div class="input-box message-box">
          
        </div>
        <div class="button">
          <input type="submit" value="Send Now" name="submit" class="send">
        </div>
      </form>
    </div>
    </div>
  </div>
<footer>
<img src ="../../images/logo.png" class ="footerImage">
<div class = "slogan">
	<p>Find the place of your dreams....</p>
	We will be with you every step of the way
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
  





</html>
