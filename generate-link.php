<?php

$data = explode("#", $_GET['user_data']);

$first_name   = $data[0];
$name         = $data[1];
$email        = $data[4];

if(!empty($first_name) && !empty($name) && !empty($email) && !empty($_GET['id_card_trello'])) {
  $mysqli = new mysqli('HOST', 'ID', 'PASSWORD', 'ID');
  if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
  }

  $idCardTrello = $_GET['id_card_trello'];
  $unique = uniqid();

  $updating =	"INSERT INTO `admission_test` SET `first_name` = '".$first_name."', `name` = '".$name."', `email` = '".$email."', `id_card_trello` = '".$idCardTrello."', `date_create` = NOW(), `token` = '".$unique."'  ";
  $mysqli->query($updating);
  $mysqli->close();

  echo 'https://'.$_SERVER['HTTP_HOST']."/onlinetest/index.php?token=".$unique;
}
?>
