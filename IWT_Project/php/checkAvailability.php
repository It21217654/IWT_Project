<?php

$con= new mysqli('localhost','root','','properties');
if($con->connect_error){
    die('connection failed:'.$con->connect_error);
}
else {
	$sql = "SELECT * FROM properties WHERE PID =' ".$_POST['action']." ' ";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if($resultCheck >= 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<script>alert("Bird")</script>';
		}
	}
	else {
		header("Location: https://www.codegrepper.com/code-examples/javascript/how+to+redirect+to+another+page+in+php+after+alert+message");
	}



	
}

?>