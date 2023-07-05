<?php
	//include_once 'http://localhost/src/user_connection.php';
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "properties";
	
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/payment.css"/>
<link rel="shortcut icon" href="../images/titleLogo.png">

<link rel="stylesheet" href="../css/viewReview_styles2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<title>Destinare Properties</title>
 
</head>
<body>
<div>
<ul id = "NavBar">
	<li class ="NavBarLeft"><a class ="NBContent"  href ="login/index.php">HOME</a></li>
	<li class ="NavBarLeft"><a class ="NBContent" href ="login/aboutUs.php">ABOUT US</a></li>
	<li class ="NavBarLeft"><a class ="NBContent" href ="login/contactUs.php">CONTACT US</a></li>
	<li><a href = ""><img id = "logo" src = "../images/logo2.png"></a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="logout.php"><?php echo htmlspecialchars($_SESSION["username"]); ?><a style="color: white;font-weight: bold;" href="login/logout.php">Logout</a><br><a style="color: white;font-weight: bold;"  href="login/resetpassword.php">Reset Password</a><div class="dropdown">
	<li class ="NavBarRight"><a class ="NBContent" href ="login/lands.php">LAND</a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="login/Rentals.php" id = "ActiveNBContent">RENTALS</a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="login/sales1.php">SALES</a></li>


</ul>
<br>
<br>
<br>
<br>

<!-- Mock data | Build your assigned page here-->
<br>
<div class="rnew">
<div class="rhead">
<h1 style = "color:white">OUR CLIENTS SAY,</h1>
</div>
<div class= "rcontent">
<div class="rcontent-box">
<div class="box-top">
<div class="profile">
<div class="pimage">
	<img src="../images/avatar.png">
</div>
<div class="uname">
	
	<?php
			
			$sql = "SELECT * FROM review WHERE rid=((SELECT max(rid) FROM review)-0);";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<strong>" .$row['cName']. "</strong>";
					echo "<span>" .$row['cEmail']. "</span>";
				}
			}		
		?>
</div>
</div>
</div>

<div class="comments">
	<?php
			$sql = "SELECT * FROM review WHERE rid=((SELECT max(rid) FROM review)-0);";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<p>" .$row['review']. "</p>";
				}
			}		
		?>
	
</div>
</div>

<div class="rcontent-box">
<div class="box-top">
<div class="profile">
<div class="pimage">
	<img src="../images/avatar.png">
</div>
<div class="uname">
	<!-- <strong> -->
	<?php
			$sql = "SELECT * FROM review WHERE rid=((SELECT max(rid) FROM review)-1);";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<strong>" .$row['cName']. "</strong>";
					echo "<span>" .$row['cEmail']. "</span>";
				}
			}		
		?>
</div>
</div>
</div>

<div class="comments">
	<?php
			
			$sql = "SELECT * FROM review WHERE rid=((SELECT max(rid) FROM review)-1);";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<p>" .$row['review']. "</p>";
				}
			}		
		?>
	
</div>
</div>

<div class="rcontent-box">
<div class="box-top">
<div class="profile">
<div class="pimage">
	<img src="../images/avatar.png">
</div>
<div class="uname">
	<!-- <strong> -->
	<?php
			$sql = "SELECT * FROM review WHERE rid=((SELECT max(rid) FROM review)-2);";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<strong>" .$row['cName']. "</strong>";
					echo "<span>" .$row['cEmail']. "</span>";
				}
			}		
		?>
</div>
</div>
</div>

<div class="comments">
	<?php
			$sql = "SELECT * FROM review WHERE rid=((SELECT max(rid) FROM review)-2);";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<p>" .$row['review']. "</p>";
				}
			}		
		?>
	
</div>
</div>

<div class="rcontent-box">
<div class="box-top">
<div class="profile">
<div class="pimage">
	<img src="../images/avatar.png">
</div>
<div class="uname">
	<!-- <strong> -->
	<?php
			$sql = "SELECT * FROM review WHERE rid=((SELECT max(rid) FROM review)-3);";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<strong>" .$row['cName']. "</strong>";
					echo "<span>" .$row['cEmail']. "</span>";
				}
			}		
		?>
</div>
</div>
</div>

<div class="comments">
	<?php
			$sql = "SELECT * FROM review WHERE rid=((SELECT max(rid) FROM review)-3);";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<p>" .$row['review']. "</p>";
				}
			}		
		?>
	
</div>
</div>

</div>
</div>
<br>
<br>
<div class="hello">
<div id="Rbutton">
<a href="../php/writeReview_guest_page.php">Write a review</a>
</div>
</div>
<br><br>

</body>
</html>