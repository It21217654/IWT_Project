<?php
include_once 'confi.php';
?>
 
<?php
 
$name = $_POST["name"];
$email = $_POST["email"];
$ID = $_POST["ID"];
$description = $_POST["description"];
 
$sql = "INSERT INTO contact(name,email, pName, question) VALUES('$name', '$email', '$ID' , '$description')";
 
if($conn ->query($sql)) {
    echo "alert('Succesfully added')";
}
else
    echo "<script>alert('Error: Records not added!')</script>";
 
mysqli_close($conn);
 
?>