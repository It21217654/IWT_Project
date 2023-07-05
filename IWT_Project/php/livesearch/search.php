<?php

require_once('DB.php');

$name = $_POST['name'];
//$id = $_POST['id'];
$con = new DB();
$data = $con->searchData($name);

echo json_encode($data);
