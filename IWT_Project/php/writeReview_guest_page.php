<?php

$host = "localhost";
$username = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$host;dbname=properties", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

if(isset($_POST['revbut']))
{
	print_r($_POST);
	$sql = "INSERT INTO review(cName, cEmail, review) VALUES('".$_POST['Rname']."', '".$_POST['Remail']."','".$_POST['Rcomment']."')";
	$conn->query($sql);
	header("location:viewReview_guest_page.php");
}

?>

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
<link rel="stylesheet" href="../css/payment.css"/>

<link rel="stylesheet" href="../css/writeReview_styles.css">
<link rel="shortcut icon" href="../images/titleLogo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<title>Destinare Properties</title>
 
</head>
<body>
<div>
<ul id = "NavBar">
	<li class ="NavBarLeft"><a class ="NBContent"  href ="index.php">HOME</a></li>
	<li class ="NavBarLeft"><a class ="NBContent" href ="aboutUs.php">ABOUT US</a></li>
	<li class ="NavBarLeft"><a class ="NBContent" href ="contactUs.php">CONTACT US</a></li>
	<li><a href = ""><img id = "logo" src = "../images/logo2.png"></a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="logout.php"><?php echo htmlspecialchars($_SESSION["username"]); ?><a style="color: white;font-weight: bold;" href="login/logout.php">Logout</a><br><a style="color: white;font-weight: bold;"  href="login/resetpassword.php">Reset Password</a><div class="dropdown">
	<li class ="NavBarRight"><a class ="NBContent" href ="lands.php">LAND</a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="Rentals.php" id = "ActiveNBContent">RENTALS</a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="sales1.php">SALES</a></li>
</ul>
<br>
<br>
<br>
<br>
<!-- Mock data | Build your assigned page here-->
<br>
<div class ="fnew">
<div class="fcontainer">
<form action="" method="POST" id="feform">
	<label class="lab"> Name:  &emsp;</label>
	<input type="text" name="Rname" class="tfield" placeholder="Enter your name here" required>  &emsp;&emsp;&emsp;&emsp;&emsp;
	<label class="lab">Email:  &emsp;</label>
	<input type="text" name="Remail" class="tfield" placeholder="Enter your email here" required>
</div>
<div class="ftext">
 <textarea name="Rcomment" form= "feform" rows="8" cols="60" class="farea" placeholder="Write your review here..."></textarea>
</div>
<div class="fbutton">
	<!-- <input type="submit" name="revbut" class="revsub" /> -->
	<button name="revbut" class="revsub" value="submit">Submit</button>
</div>
</form>

</div>
</div>
<br><br>
</body>
</html>