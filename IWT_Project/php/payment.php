<?php
	
session_start();
 

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<title>Destinare Properties</title>
 
</head>
<body>
<div>
<ul id = "NavBar">
	<li class ="NavBarLeft"><a class ="NBContent" id = "payment" href ="">HOME</a></li>
	<li class ="NavBarLeft"><a class ="NBContent" href ="aboutUs.html">ABOUT US</a></li>
	<li class ="NavBarLeft"><a class ="NBContent" href ="contactUs.html">CONTACT US</a></li>
	<li><a href = "viewReview_guest_page.php"><img id = "logo" src = "../images/logo2.png"></a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="logout.php"><?php echo htmlspecialchars($_SESSION["username"]); ?><a style="color: white;font-weight: bold;" href="logout.php">Logout</a><br><a style="color: white;font-weight: bold;"  href="resetpassword.php">Reset Password</a><div class="dropdown">
	<li class ="NavBarRight"><a class ="NBContent" href ="lands.html">LAND</a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="Rentals.html">RENTALS</a></li>
	<li class ="NavBarRight"><a class ="NBContent" href ="sales1.html">SALES</a></li>


</ul>
<br>
<br>
<br>
<br>
 <div class="wrapper">
        <h2>Payment Form</h2>
        <form action="connection.php" method="POST">
            
            <h4>Account</h4>
			
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Full Name" required class="name" name="FullName"/>
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="text" placeholder=" Property Name" required class="name" name="propertyName"/>
                    <i class="fa fa-home icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" placeholder="Email Address" required class="name" name="EmailAddress"/>
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Address" required class="name"name="Address"/>
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="City" required class="name"name="City"/>
                    <i class="fa fa-institution icon"></i>
                </div>
            </div>
			
            


            
            <div class="input_group">
                <div class="input_box">
                    <h4>Date Of Birth</h4>
                    <input type="text" placeholder="DD/MM/YY" required class="dob" name="Dateofbirthday"/ >
                    
                </div>
                <div class="input_box">
                    <h4>Gender</h4>
                    <input type="radio" name="gender" class="radio" id="b1" check value="M">
                    <label for="b1">Male</label>
                    <input type="radio" name="gender" class="radio" id="b2" value="F">
                    <label for="b2">Female</label>
                </div>
            </div>
            


            
            <div class="input_group">
                <div class="input_box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" class="radio" id="bc1" check value="c"/>
                    <label for="bc1"><span>
                            <i class="fa fa-cc-visa"></i>Credit Card</span></label>
                    <input type="radio" name="pay" class="radio"  id="bc2"  value="p"/>
                    <label for="bc2"><span>
                            <i class="fa fa-cc-paypal"></i>Paypal</span></label>
                </div>
            </div>
            
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="CardNumber" class="name" placeholder="Card Number 1111-2222-3333-4444" required />
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>

            
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="CardCVC" class="name" placeholder="Card CVC 632" required />
                    <i class="fa fa-user icon"></i>
                </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <div class="input_box">
                        <input type="text" placeholder="Exp Month"  class="name" name="ExpMonth"  required/>
                        <i class="fa fa-calendar icon" aria-hidden="true"></i>
                    </div>
                </div>
                                <div class="input_box">
                    <input type="number" placeholder="Exp Year"  class="name"name="ExpYear" required/>
                    <i class="fa fa-calendar-o icon" aria-hidden="true"></i>
                </div>
            </div>

            
            <div class="input_box">
                <input type="text" placeholder="Enter Amount"  class="name" name="Amount" required/>
            </div>
       
           
<br>
<br>
            <div class="input_group">
                <div class="input_box">
                    <button type="submit">PAY NOW</button>
                </div>
            </div>

        </form>
    </div>
	<div class="clearfix"></div>
	
<footer>
    <img src ="../images/logo1.png" class ="footerImage">
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