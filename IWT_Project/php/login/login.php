<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to home page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        *
{
    margin: 0;
    padding: 0;
}

header
{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(../../images/logback.jpg);
    height: 120vh;
    background-size: cover;
    background-position: center;
}

.main-nav
{
    float: right;
    list-style: none;
    margin-top: 30px;
}

.main-nav li
{
    display: inline-block;
}

.main-nav li a
{
   color: white;
   text-decoration: none;
   padding: 5px 20px;
   font-family: "Roboto", sans-serif;
   font-size: 15px;

}

.main-nav li.active a
{
    border: 2px solid white;
}

.main-nav li a:hover
{
    border: 2px solid white;
}

.logo img
{
    width: 150px;
    height: auto;
    float: left;
}

body
{
    font-family: monospace;
}

.row
{
    max-width: 1200px;
    margin: auto;
}


{
   color: white;
   text-decoration: none;
   padding: 5px 20px;
   font-family: "Roboto", sans-serif;
   font-size: 15px;

}

p.thicker
{
    color: white;
   text-decoration: none;
   padding: 5px 20px;
   font-family: "Roboto", sans-serif;
   font-size: 20px;
}


p.thicker1
{
   color: white;
   text-decoration: none;
   padding: 5px 20px;
   font-family: "Roboto", sans-serif;
   font-size: 20px;
}

p.thicker2
{
    color: white;
   text-decoration: none;
   padding: 5px 20px;
   font-family: "Roboto", sans-serif;
   font-size: 20px;
} 

{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body
{
    font-family: "Roboto", sans-serif;
}

a
{
    text-decoration: none;
    outline: none;
}

a img
{
    border: none;
}

.clr
{
    clear: both;
}

body{
    margin: 0;
    padding: 0;
    background: url(pic1.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.clearfix::after{
  content: "";
  clear: both;
  display: table;
}

.logo img
{
    width: 175px;
    height: auto;
    float: left;
}

.loginbox{
    width: 320px;
    height: 420px;
    background-color: rgba(1, 1, 20, 0.6);
    /*background: #000;*/
    color: #fff;
    margin: 100px auto;
    box-sizing: border-box;
    padding: 70px 30px;
    position: relative;
}

@media only screen and (min-width: 550px){
    .loginbox{
        width: 500px;
        height: 500px;
    }
    
    .avatar{
        position: absolute;
        top: -50px;
        left: 40%;
    }
    
}

@media only screen and (max-width: 330px){
    .loginbox{
        width: 250px;

    }
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;

}

@media only screen and (max-width: 550px){
    .avatar{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: 33%;
    }
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px; 
}

.loginbox input[type="submit"]{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

.loginbox input[type="submit"]:hover{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}

.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover{
    color: #ffc107;
}

input[type="checkbox"]{
    margin: 0;
    padding: 0;
    position: relative;
    
}

/*footer*/
[class*="col-"] {
    width: 100%;
}

@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-3 {width: 25%;}
    .col-12 {width: 100%;}
}

[class*="col-"] {
    float: left;
    padding: 15px;
}

* {
  box-sizing: border-box;
}

body{
  background-color: white;
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
}

a{
  color: black;
  text-decoration: none;

}     
    </style>
 </head>
<body>
<header>
     <!Navigation menu>
            <div class="row">
                <div class="logo">
                    <a href ="../../html/"><img src="../../images/logo2.png"></a>
                </div>     
                
            </div>
           
            
<div class="clearfix"></div>
    
<div class="loginbox">
    <img src="../../images/avatar.png" class="avatar">
    <h1>Login Here</h1>
	 <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <p>Username</p>
        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
        <p>Password</p>
        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
        <input type="submit" class="btn btn-primary" value="Login">    
        <br><br>
        <a href="resetpassword.php">Lost your password?</a><br>
        <a href="registration.php">Don't have a account?</a>
    </form>
</div>
    
    <div class="clearfix"></div>
    </header>
    
</body>
</html>
