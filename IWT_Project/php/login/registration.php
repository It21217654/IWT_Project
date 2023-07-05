<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
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
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(../../images/regback.jpeg);
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
                    <img src="../../images/logo2.png">
                </div>     
                
            </div>
           
            
<div class="clearfix"></div>
    
<div class="loginbox">
    <class="avatar">
    <h1>Register here</h1>
	 <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input style="background-color: #555555; border-radius: 8px; font-size: 16px;" type="reset" class="btn btn-primary" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
</div>
    
    <div class="clearfix"></div>
    </header>
    
</body>
</html>
