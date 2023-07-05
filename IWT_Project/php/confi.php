<?php

session_start();

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "contact";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}
else{
echo "Connected successfully";

if( isset($_SESSION["loggedin"]) ) {
	header("Location: login/index.php");
	}
else {
	header("Location: ../html/index.html");
}
}
?>