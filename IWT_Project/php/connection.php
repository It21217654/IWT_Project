<?php
$FullName=$_POST['FullName'];
$propertyName=$_POST['propertyName'];
$EmailAddress=$_POST['EmailAddress'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$Dateofbirthday=$_POST['Dateofbirthday'];
$gender=$_POST['gender'];
$pay=$_POST['pay'];
$CardNumber=$_POST['CardNumber'];
$CardCVC=$_POST['CardCVC'];
$ExpMonth=$_POST['ExpMonth'];
$ExpYear=$_POST['ExpYear'];
$Amount=$_POST['Amount'];




$conn= new mysqli('localhost','root','','properties');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}else{
    $stmt= $conn-> prepare("Insert into paymentnew(FullName,propertyName,EmailAddress,Address,City,Dateofbirthday,gender,pay,CardNumber,CardCVC,ExpMonth,ExpYear,Amount)
                          values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssisis",$FullName,$propertyName,$EmailAddress,$Address,$City,$Dateofbirthday,$gender,$pay,$CardNumber,$CardCVC,$ExpMonth,$ExpYear,$Amount);
    $stmt->execute();
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='http://localhost/Final%20Project/php/login/index.php';
    </script>");
    $stmt->close();
    $conn->close();
	
}
 ?>