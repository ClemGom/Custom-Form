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
<body onload="start()">
<form method="post" action="verif.php" name="myform">


	<div class="container-contact100">
		<?php  if (empty($_GET['onload'])) { ?>
		<div class="chrono">
			<div class="tim">
				<span >0 min</span> :
				<span >0 s</span>
			</div>
		</div>
	<?php } ?>
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<p class="contact100-form-title">
					La Capsule - Online Test
				</p>




<input type="hidden" name="seconde" value="">
<input type="hidden" name="minute" value="">

					<input  type="hidden" name="token" value="<?php echo $row['token'];?>">


				<span class="label-input100"> 1- Ce joueur marche sur une plateforme construite avec des cases de couleur. Choisissez dans l'ordre obligatoirement 2 actions qui vont permettre de faire avancer le joueur jusqu'à l'étoile (saisissez les lettre à la suite, exemple: CAD) </span>
			<div>
				<img class="displayed" src="images/jeu1.png"/>
			</div>


<div class="centerform">
	<ul>
  	<li>A - Tourner le joueur vers la gauche</li>
    <li>B - Si la case est verte avancer d'une case</li>
    <li>C - Si la est case bleu avancer d'une case</li>
    <li>D - Si la case est orange avancer d'une case</li>
    <li>E - Si la case est rouge avancer d'une case</li>
	</ul>
	<div class="wrap-input100 validate-input">
	<input class="inputcustom" type="text" name="jeu1" value="<?php echo $responseUser['jeu1']?>" placeholder="Entrer une réponse">
	<span class="focus-input100"></span>
	</div>
</div>

<span class="label-input100"> 2- Choisissez dans l'ordre obligatoirement 3 actions qui vont permettre de faire avancer le joueur jusqu'à l'étoile </span>
<div>
<img class="displayed" src="images/jeu2.png"/>
</div>

<div class="centerform">
	<ul>
    <li>A - Tourner le joueur vers la gauche</li>
    <li>B - Répéter indéfiniment les actions précédentes</li>
    <li>C - Si la est case bleu avancer d'une case</li>
    <li>D - Si la case est verte avancer d'une case</li>
  </ul>
	<div class="wrap-input100 validate-input">
	<input class="inputcustom" type="text" name="jeu2" value="<?php echo $responseUser['jeu2']?>" placeholder="Entrer une réponse">
	<span class="focus-input100"></span>
	</div>
</div>

<span class="label-input100"> 3- Choisissez dans l'ordre les 5 actions qui vont permettre de faire avancer le joueur pour récupérer les deux étoiles. Vous pouvez réutiliser plusieurs fois les mêmes actions </span>
<div>
<img class="displayed" src="images/jeu3.png"/>
</div>

<div class="centerform">
	<ul>
    <li>A - Sauter en avançant d'une case</li>
    <li>B - Tourner le joueur vers la droite</li>
    <li>C - Tant que la case est orange avancer d'une case</li>
    <li>D - Si la case est orange avancer d'une case</li>
    <li>E - Tant que la case est verte avancer d'une case</li>
		<li>F - Tourner le joueur vers la gauche</li>
		<li>G - Si la case est verte avancer d'une case</li>
	</ul>
	<div class="wrap-input100 validate-input">
	<input class="inputcustom" type="text" name="jeu3" value="<?php echo $responseUser['jeu3']?>" placeholder="Entrer une réponse">
	<span class="focus-input100"></span>
	</div>
</div>


<span class="label-input100"> 4- Choisissez dans l'ordre obligatoirement 5 actions qui vont permettre de faire avancer le joueur pour récupérer les deux étoiles. Vous pouvez réutiliser plusieurs fois les mêmes actions </span>
<div>
<img class="displayed" src="images/jeu4.png"/>
</div>

<div class="centerform" align= "center">
	<ul>
	<li>A - Si la case est verte avancer d'une case</li>
	<li>B - Avancer d'une case tant que la case n'est pas orange</li>
	<li>C - Avancer d'une case tant que la case n'est pas bleue</li>
	<li>D - Tant que la case est bleue avancer d'une case</li>
	<li>E - Si la case est orange avancer d'une case</li>
	<li>F - Si la case est bleue avancer d'une case</li>
	<li>G - Avancer d'une case tant que la case n'est pas verte</li>
	<li>H - Tourner le joueur vers la gauche</li>
</ul>
<div class="wrap-input100 validate-input">
<input class="inputcustom" type="text" name="jeu4" value="<?php echo $responseUser['jeu4']?>" placeholder="Entrer une réponse">
<span class="focus-input100"></span>
</div>
</div>

<span class="label-input100"> 5- Ce joueur peut à présent sauter sur les carrés. Choisissez dans l'ordre obligatoirement 4 actions qui vont permettre de faire avancer le joueur jusqu'à l'étoile </span>
<div>
<img class="displayed" src="images/jeu5.png"/>
</div>

<div class="centerform" align= "center">
	<ul>
	<li>A - Tant que la case est bleue avancer d'une case</li>
	<li>B - La case est bleue avancer d'une case</li>
	<li>C - Sauter en avançant d'une case</li>
	<li>D - Si la case est orange avancer d'une case</li>
	<li>E - Tourner le joueur vers la gauche</li>
	<li>F - Si la case est verte avancer d'une case</li>
	</ul>
	<div class="wrap-input100 validate-input">
	<input class="inputcustom" type="text" name="jeu5" value="<?php echo $responseUser['jeu5']?>" placeholder="Entrer une réponse">
	<span class="focus-input100"></span>
	</div>
</div>


<span class="label-input100"> 6- Choisissez dans l'ordre les 5 actions qui vont permettre de faire avancer le joueur pour récupérer l'étoile </span>
<div>
<img class="displayed" src="images/jeu6.png"/>
</div>

<div class="centerform" align= "center">
	<ul>
	<li>A - Si la case est verte avancer d'une case</li>
	<li>B - Tant que la case est orange avancer d'une case</li>
	<li>C - Si la case est orange avancer d'une case</li>
	<li>D - Si la case est orange sauter en avançant d'une case</li>
	<li>E - Tourner le joueur vers la gauche</li>
	<li>F - Tant que la case est verte avancer d'une case</li>
	<li>G - Si la case est verte sauter en avançant d'une case</li>
  <li>H - Répéter indéfiniment les actions précédentes</li>
	</ul>
	<div class="wrap-input100 validate-input">
	<input class="inputcustom" type="text" name="jeu6" value="<?php echo $responseUser['jeu6']?>" placeholder="Entrer une réponse">
	<span class="focus-input100"></span>
	</div>
</div>


<span class="label-input100"> 7- Choisissez dans l'ordre obligatoirement 2 actions qui vont permettre de faire avancer le joueur pour récupérer l'étoile </span>
<div>
<img class="displayed" src="images/jeu7.png"/>
</div>

<div class="centerform" align= "center">
	<ul>
		<li>A - Si la case est verte avancer d'une case</li>
		<li>B - Tant que la case est orange avancer d'une case</li>
		<li>C - Si la case est orange avancer d'une case</li>
		<li>D - Répéter indéfiniment les actions précédentes</li>
		<li>E - Si la case est orange sauter en avançant d'une case</li>
		<li>F - Tourner le joueur vers la gauche</li>
		<li>G - Tant que la case est verte avancer d'une case</li>
		<li>H - Avancer d'une case</li>
</ul>
<div class="wrap-input100 validate-input">
<input class="inputcustom" type="text" name="jeu7" value="<?php echo $responseUser['jeu7']?>" placeholder="Entrer une réponse">
<span class="focus-input100"></span>
</div>
</div>


<span class="label-input100"> 8- Choisissez dans l'ordre obligatoirement 10 actions qui vont permettre de faire avancer le joueur pour récupérer l'étoile. Vous pouvez réutiliser plusieurs fois les mêmes actions </span>
<div>
<img class="displayed" src="images/jeu8.png"/>
</div>

<div class="centerform" align= "center">
	<ul>
		<li>A - Si la case est bleue avancer d'une case</li>
		<li>C - Si la case est verte avancer d'une case</li>
		<li>D - Répéter 1 fois les actions précédentes</li>
		<li>E - Tant que la case est bleue avancer d'une case</li>
		<li>F - Tourner le joueur vers la gauche</li>
		<li>G - Si la case est orange avancer d'une case</li>
		<li>H - Répéter 2 fois les actions précédentes</li>
	</ul>
	<div class="wrap-input100 validate-input">
	<input class="inputcustom" type="text" name="jeu8" value="<?php echo $responseUser['jeu8']?>" placeholder="Entrer une réponse">
	<span class="focus-input100"></span>
	</div>
</div>


<span class="label-input100"> 9- A quoi sert le CSS ? </span>
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios" value="option1" <?php echo ($responseUser['exampleRadios'] =="option1")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios1">
    	Structurer une page web
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" <?php echo ($responseUser['exampleRadios'] =="option2")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios2">
    	Se brancher sur une base de données
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" <?php echo ($responseUser['exampleRadios'] =="option3")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios3">
			Réaliser une application mobile
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" <?php echo ($responseUser['exampleRadios'] =="option4")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios4">
			Présenter une page web
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5" <?php echo ($responseUser['exampleRadios'] =="option5")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios5">
			Dynamiser une page web
		</label>
	</div>
</div>


<span class="label-input100"> 10- Une variable c'est une instruction qui permet :</span>
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios6" value="option6" <?php echo ($responseUser['exampleRadios2'] =="option6")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios6">
    	De répéter un traitement
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios7" value="option7" <?php echo ($responseUser['exampleRadios2'] =="option7")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios7">
    	De structurer une page web
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios8" value="option8" <?php echo ($responseUser['exampleRadios2'] =="option8")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios8">
			D'afficher une image
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios9" value="option9" <?php echo ($responseUser['exampleRadios2'] =="option9")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios9">
			De stocker de l'information
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios10" value="option10" <?php echo ($responseUser['exampleRadios2'] =="option10")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios10">
			D'afficher une information
		</label>
	</div>
</div>


<span class="label-input100"> 11- Quelles sont les balises HTML valides ?</span>
<div class="centerform spacer">
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" name="choix[]" value="option1" id="defaultCheck1" <?php echo ($responseUser['choix[]'] =="option1")? "checked": null;?>>
	  <label class="form-check-label" for="defaultCheck1">
	    <?php echo  htmlentities("<img>"); ?>
	  </label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" name="choix[]" value="option2" id="defaultCheck2" <?php echo ($responseUser['choix[]'] =="option2")? "checked": null;?>>
	  <label class="form-check-label" for="defaultCheck2">
	   <?php echo  htmlentities("<p></p>"); ?>
	  </label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" name="choix[]" value="option3" id="defaultCheck3" <?php echo ($responseUser['choix[]'] =="option3")? "checked": null;?>>
	  <label class="form-check-label" for="defaultCheck3">
	    #image#
	  </label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" name="choix[]" value="option4" id="defaultCheck4" <?php echo ($responseUser['choix[]'] =="option4")? "checked": null;?>>
	  <label class="form-check-label" for="defaultCheck4">
	    <?php echo  htmlentities("<h2></h2>"); ?>
	  </label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" name="choix[]" value="option5" id="defaultCheck5" <?php echo ($responseUser['choix[]'] =="option5")? "checked": null;?>>
	  <label class="form-check-label" for="defaultCheck5">
	    [Title]
	  </label>
	</div>
</div>


<span class="label-input100"> 12- Dans une architecture web la partie Front-end désigne</span>
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios11" value="option11" <?php echo ($responseUser['exampleRadios3'] =="option11")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios11">
    	Le serveur
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios12" value="option12" <?php echo ($responseUser['exampleRadios3'] =="option12")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios12">
    	Internet
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios13" value="option13" <?php echo ($responseUser['exampleRadios3'] =="option13")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios13">
			Le clavier
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios14" value="option14" <?php echo ($responseUser['exampleRadios3'] =="option14")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios14">
			Le navigateur
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios15" value="option15" <?php echo ($responseUser['exampleRadios3'] =="option15")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios15">
			La base de données
		</label>
	</div>
</div>


<span class="label-input100"> 13- Complétez la série</span>
<div>
<img class="displayed" src="images/jeu13.png"/>
</div>

<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios16" value="option16" <?php echo ($responseUser['exampleRadios4'] =="option16")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios16">
    	4 et 2
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios17" value="option17" <?php echo ($responseUser['exampleRadios4'] =="option17")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios17">
    	2 et 5
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios18" value="option18" <?php echo ($responseUser['exampleRadios4'] =="option18")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios18">
			4 et 1
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios19" value="option19" <?php echo ($responseUser['exampleRadios4'] =="option19")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios19">
			5 et 4
		</label>
	</div>
</div>


<span class="label-input100"> 14- Pouvez-vous résoudre cette analogie en choisissant parmi les éléments A, B, C et D ?</span>
<div>
<img class="displayed" src="images/jeu14.png"/>
</div>
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios20" value="option20" <?php echo ($responseUser['exampleRadios5'] =="option20")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios20">
    	A
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios21" value="option21" <?php echo ($responseUser['exampleRadios5'] =="option21")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios21">
    	B
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios22" value="option22" <?php echo ($responseUser['exampleRadios5'] =="option22")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios22">
			C
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios23" value="option23" <?php echo ($responseUser['exampleRadios5'] =="option23")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios23">
			La réponse D
		</label>
	</div>
</div>


<span class="label-input100"> 15- Quel est le nombre manquant ? 3 7 11 ? 19</span>
<div class="wrap-input100 validate-input">
<input class="inputcustom" type="text" name="jeu15" value="<?php echo $responseUser['jeu15']?>" placeholder="Entrer une réponse">
<span class="focus-input100"></span>
</div>


<span class="label-input100"> 16- Parmi les cinq figures A, B, C, D proposées, laquelle complète la série ci-dessus ?</span>
<div>
<img class="displayed" src="images/jeu16.png"/>
</div>
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios24" value="option24" <?php echo ($responseUser['exampleRadios6'] =="option24")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios24">
    	A
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios25" value="option25" <?php echo ($responseUser['exampleRadios6'] =="option25")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios25">
    	B
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios26" value="option26" <?php echo ($responseUser['exampleRadios6'] =="option26")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios26">
			C
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios27" value="option27" <?php echo ($responseUser['exampleRadios6'] =="option27")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios27">
			La réponse D
		</label>
	</div>
</div>


<span class="label-input100"> 17- Complétez la série : D 1 F 3 J 0 K 5 ?</span>
<div class="wrap-input100 validate-input">
<input class="inputcustom" type="text" name="jeu17" value="<?php echo $responseUser['jeu17']?>" placeholder="Entrer une réponse">
<span class="focus-input100"></span>
</div>


<span class="label-input100"> 18- Quel est le carré manquant ?</span>
<div>
<img class="displayed" src="images/jeu18.png"/>
</div>
<!-- TODOO !-->
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="mystery" id="exampleRadios007" value="optionA" <?php echo ($responseUser['mystery'] =="optionA")? "checked": null;?>>
		<img class="displayed" src="images/jeu18.1.png"/>
  	<label class="form-check-label" for="exampleRadios007">
    	A
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="mystery" id="exampleRadios008" value="optionB" <?php echo ($responseUser['mystery'] =="optionB")? "checked": null;?>>
		<img class="displayed" src="images/jeu18.2.png"/>
  	<label class="form-check-label" for="exampleRadios008">
    	B
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="mystery" id="exampleRadios009" value="optionC" <?php echo ($responseUser['mystery'] =="optionC")? "checked": null;?>>
		<img class="displayed" src="images/jeu18.3.png"/>
		<label class="form-check-label" for="exampleRadios009">
			C
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="mystery" id="exampleRadios010" value="optionD" <?php echo ($responseUser['mystery'] =="optionD")? "checked": null;?>>
		<img class="displayed" src="images/jeu18.4.png"/>
		<label class="form-check-label" for="exampleRadios010">
			D
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="mystery" id="exampleRadios011" value="optionE" <?php echo ($responseUser['mystery'] =="optionE")? "checked": null;?>>
		<img class="displayed" src="images/jeu18.5.png"/>
		<label class="form-check-label" for="exampleRadios011">
			E
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="mystery" id="exampleRadios012" value="optionF" <?php echo ($responseUser['mystery'] =="optionF")? "checked": null;?>>
		<img class="displayed" src="images/jeu18.6.png"/>
		<label class="form-check-label" for="exampleRadios012">
			F
		</label>
	</div>
</div>



<span class="label-input100"> 19- Quel est le résultat de l’opération suivante : 2 + 10 × 5 – 14 : 2 + 5 – 6 × 2 = ?</span>
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios28" value="option28" <?php echo ($responseUser['exampleRadios7'] =="option28")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios28">
    	38
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios29" value="option29" <?php echo ($responseUser['exampleRadios7'] =="option29")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios29">
    	40
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios30" value="option30" <?php echo ($responseUser['exampleRadios7'] =="option30")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios30">
			42
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios31" value="option31" <?php echo ($responseUser['exampleRadios7'] =="option31")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios31">
			36
		</label>
	</div>
</div>


<span class="label-input100"> 20- Alexandre, Daniel, Nicolas, Olivier et Thomas participent à un concours du plus grand mangeur de chocolat. Alexandre et Nicolas ne sont ni les plus gourmands, ni les moins gourmands. Thomas mange plus de chocolat qu’Alexandre, mais moins qu’Olivier. Nicolas mange plus de chocolat que Thomas. Quel est le classement à l’issue du concours ?</span>
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios32" value="option32" <?php echo ($responseUser['exampleRadios8'] =="option32")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios32">
    	Olivier, Nicolas, Thomas, Alexandre, Daniel
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios33" value="option33" <?php echo ($responseUser['exampleRadios8'] =="option33")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios33">
    	Thomas, Olivier, Nicolas, Alexandre, Daniel
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios34" value="option34" <?php echo ($responseUser['exampleRadios8'] =="option34")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios34">
			Olivier, Alexandre, Thomas, Nicolas, Daniel
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios35" value="option35" <?php echo ($responseUser['exampleRadios8'] =="option35")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios35">
			Daniel, Olivier, Nicolas, Thomas, Alexandre
		</label>
	</div>
</div>


<span class="label-input100"> 21- Trouvez la carte manquante</span>
<div>
<img class="displayed" src="images/jeu21.png"/>
</div>
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios36" value="option36" <?php echo ($responseUser['exampleRadios9'] =="option36")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios36">
    	3 de pic
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios37" value="option37" <?php echo ($responseUser['exampleRadios9'] =="option37")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios37">
    	2 de pic
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios38" value="option38" <?php echo ($responseUser['exampleRadios9'] =="option38")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios38">
			6 de pic
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios39" value="option39" <?php echo ($responseUser['exampleRadios9'] =="option39")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios39">
			4 de coeur
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios40" value="option40" <?php echo ($responseUser['exampleRadios9'] =="option40")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios40">
			As de pic
		</label>
	</div>
</div>


<span class="label-input100"> 22- Jonas met 20 minutes pour nettoyer son beau jardin. En combien de temps Jonas et sa maman pourraient nettoyer ensemble le jardin sachant que maman est 4 fois plus rapide que Jonas ?</span>
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios10" id="exampleRadios41" value="option41" <?php echo ($responseUser['exampleRadios10'] =="option41")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios41">
    	3 minutes
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios10" id="exampleRadios42" value="option42" <?php echo ($responseUser['exampleRadios10'] =="option42")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios42">
    	4 minutes
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios10" id="exampleRadios43" value="option43" <?php echo ($responseUser['exampleRadios10'] =="option43")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios43">
			6 minutes
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios10" id="exampleRadios44" value="option44" <?php echo ($responseUser['exampleRadios10'] =="option44")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios44">
			10 minutes
		</label>
	</div>
</div>


<span class="label-input100"> 23- Voici un virus qui pourrait nous rendre bien service en été quand il fait très chaud la nuit... Un virus tue lundi la moitié des moustiques présents sur terre, mardi il tue le tiers des moustiques survivants, mercredi le quart des moustiques survivants et jeudi enfin le cinquième des moustiques survivants. Quelle est la fraction des moustiques encore vivants après le passage du virus salvateur ?</span>
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios11" id="exampleRadios45" value="option45" <?php echo ($responseUser['exampleRadios11'] =="option45")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios45">
    	1/4
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios11" id="exampleRadios46" value="option46" <?php echo ($responseUser['exampleRadios11'] =="option46")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios46">
    	1/5
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios11" id="exampleRadios47" value="option47" <?php echo ($responseUser['exampleRadios11'] =="option47")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios47">
			1/6
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios11" id="exampleRadios48" value="option48" <?php echo ($responseUser['exampleRadios11'] =="option48")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios48">
			1/12
		</label>
	</div>
</div>


<span class="label-input100"> 24 - Qui peut être la tante de l’oncle de ma sœur ?</span>
<div class="centerform spacer">
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios12" id="exampleRadios49" value="option49" <?php echo ($responseUser['exampleRadios12'] =="option49")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios49">
    	Mon grand-père
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios12" id="exampleRadios50" value="option50" <?php echo ($responseUser['exampleRadios12'] =="option50")? "checked": null;?>>
  	<label class="form-check-label" for="exampleRadios50">
    	Ma grand-mère
  	</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios12" id="exampleRadios51" value="option51" <?php echo ($responseUser['exampleRadios12'] =="option51")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios51">
			La cousine de mon grand-père
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="exampleRadios12" id="exampleRadios52" value="option52" <?php echo ($responseUser['exampleRadios12'] =="option52")? "checked": null;?>>
		<label class="form-check-label" for="exampleRadios52">
			La sœur de ma grand-mère
		</label>
	</div>
</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button  type="submit" name="envoi" class="contact100-form-btn" onclick="stop()">
							<span>
								Encapsuler
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>


</form>
	<div id="dropDownSelect1"></div>

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


<?php if (empty($_GET['onload'])) { ?>
<script>
  /*la fonction getElementByTagName renvoie une liste des éléments portant le nom de balise donné ici "span".*/
  var sp = document.getElementsByTagName("span");
  var t;
  var ms=0,s=<?php echo $seconde ?>,mn=<?php echo $minute ?>;

   /*La fonction "start" démarre un appel répétitive de la fonction update_chrono par une cadence de 100 milliseconde en utilisant setInterval et désactive le bouton "start" */

  function start(){

	   t =setInterval(update_chrono,100);
	   btn_start.disabled=true;

  }
  /*La fonction update_chrono incrémente le nombre de millisecondes par 1 <==> 1*cadence = 100 */
  function update_chrono(){
    ms+=1;
    /*si ms=10 <==> ms*cadence = 1000ms <==> 1s alors on incrémente le nombre de secondes*/
       if(ms==10){
        ms=1;
        s+=1;
       }
       /*on teste si s=60 pour incrémenter le nombre de minute*/
       if(s==60){
        s=0;
        mn+=1;
       }
       /*afficher les nouvelle valeurs*/
       sp[0].innerHTML=mn+" min";
       sp[1].innerHTML=s+" s";
			 document.myform.seconde.value = s;
			 document.myform.minute.value = mn;

  }

	/*on arrête le "timer" par clearInterval ,on réactive le bouton start */
	function stop(){
    clearInterval(t);
    btn_start.disabled=false;

	}

</script>
<?php } ?>

</body>
</html>
