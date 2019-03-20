<?php
$mysqli = new mysqli('HOST', 'ID', 'PASSWORD', 'ID');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$first_name = $_GET['first_name'];
$name = $_GET['name'];
$email = $_GET['email'];
$unique = uniqid();

$updating =	"INSERT INTO `admission_test` SET `first_name` = '".$first_name."', `name` = '".$name."', `email` = '".$email."', `date_create` = NOW(), `token` = '".$unique."'  ";
echo $updating;
$mysqli->query($updating);


$mysqli->close();
?>
