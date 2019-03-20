<?php
$mysqli = new mysqli('HOST', 'ID', 'PASSWORD', 'ID');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
//$queryStr = 'SELECT * FROM admission-test WHERE token = "37AJ12APL" ';


 $sql2 = "SELECT * FROM admission_test WHERE token ='". $_GET['token'] ."'";
 $resultss = $mysqli->query($sql2);
 if ($resultss->num_rows > 0) {
 		// output data of each row
 		$row = $resultss->fetch_assoc();

    if(empty($row['date_begin'])) {
	    $update =	"	UPDATE `admission_test` SET `date_begin` = NOW() WHERE `token` = '". $_GET['token'] ."'";
			 $mysqli->query($update);
       $minute = 0;
       $seconde = 0;
       $token = $_GET['token'];
       require 'online-test.php';
		} else {
			$dateBegin = new DateTime($row['date_begin']);
			$dateNow = new DateTime();
			$dateDelay = $dateBegin->diff($dateNow);
      //echo $dateNow->getTimestamp()-$dateBegin->getTimestamp();
      if (($dateNow->getTimestamp()-$dateBegin->getTimestamp()) > (40*60) || !empty($row['date_end'])) {
				 	require 'bad-token.php';
			} else {
				$minute = $dateDelay->i;
				$seconde = $dateDelay->s;
				$token = $_GET['token'];
        require 'online-test.php';
			}
	  }



    if (!empty($_GET['onload'])) {
      $responseUser = unserialize($row['result']);
      require 'online-test.php';
    }

}
else {
		require 'bad-token.php';
 }

//$sqload = "SELECT * FROM admission_test WHERE load ='". $_GET['load'] ."'";




$mysqli->close();


 ?>
