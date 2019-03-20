<?php
$mysqli = new mysqli('HOSTDB', 'HOST', 'PASSWORD', 'ID');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$score = 0;
if (isset($_POST['envoi'])){
$token = $_POST['token'];
$question1 = $_POST['jeu1'];
if (strtolower($question1) == "bd")
  $score ++;
$question2 = $_POST['jeu2'];
if (strtolower($question2) == "dcb")
  $score ++;
$question3 = $_POST['jeu3'];
if (strtolower($question3) == "efdec" || strtolower($question3) == "efcec")
  $score ++;
$question4 = $_POST['jeu4'];
if (strtolower($question4) == "didgd")
  $score ++;
$question5 = $_POST['jeu5'];
if (strtolower($question5) == "fdac")
  $score ++;
$question6 = $_POST['jeu6'];
if (strtolower($question6) == "abfgh")
  $score ++;
$question7 = $_POST['jeu7'];
if (strtolower($question7) == "hd")
  $score ++;
$question8 = $_POST['jeu8'];
if (strtolower($question8) == "cegdgchcag")
  $score ++;
$question9 = $_POST['exampleRadios'];
if ($question9 == "option4")
  $score ++;
$question10 = $_POST['exampleRadios2'];
if ($question10 == "option9")
  $score ++;
//$question11 = $_POST['choix[]'];
//$question11 = prir(';', $_POST['choix']);
$question12 = $_POST['exampleRadios3'];
if ($question12 == "option14")
  $score ++;
$question13 = $_POST['exampleRadios4'];
if ($question13 == "option17")
  $score ++;
$question14 = $_POST['exampleRadios5'];
if ($question14 == "option20")
  $score ++;
$question15 = $_POST['jeu15'];
if ($question15 == "15")
  $score ++;
$question16 = $_POST['exampleRadios6'];
if ($question16 == "option27")
  $score ++;
$question17 = $_POST['jeu17'];
if (strtolower($question17) == "q")
  $score ++;
$question18 = $_POST['mystery'];
if ($question18 == "optionD")
  $score++;
$question19 = $_POST['exampleRadios7'];
if ($question19 == "option28")
  $score ++;
$question20 = $_POST['exampleRadios8'];
if ($question20 == "option32")
  $score ++;
$question21 = $_POST['exampleRadios9'];
if ($question21 == "option38")
  $score ++;
$question22 = $_POST['exampleRadios10'];
if ($question22 == "option42")
  $score ++;
$question23 = $_POST['exampleRadios11'];
if ($question23 == "option46")
  $score ++;
$question24 = $_POST['exampleRadios12'];
if ($question24 == "option52")
  $score ++;
}
if ( $_POST['choix'] == choix.[0]["option1"]) {
  $score ++;
}

$result = serialize($_POST);

$updating =	"	UPDATE `admission_test` SET `date_end` = NOW(), `score` = $score, `result` ='". $result ."' WHERE `token` ='". $_POST['token'] ."'";
$mysqli->query($updating);

$select =	"	SELECT * FROM `admission_test` WHERE `token` ='". $_POST['token'] ."'";
$result = $mysqli->query($select);
$data   = $result->fetch_assoc();
file_get_contents("https://hooks.zapier.com/hooks/catch/2128763/0fovw8/?score=".$score."&name=".$data['first_name']."&lastname=".$data['name']."&idcardtrello=".$data['id_card_trello']."&token=".$_POST['token']);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forms Capsule</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/techfont">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100"
			<form class="contact100-form validate-form">
				<p class="contact100-form-title">
					Votre résultat a été pris en compte, merci de votre participation
				</p>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
