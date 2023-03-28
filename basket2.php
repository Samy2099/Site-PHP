<?php
Include ('entete2.html');
session_start();
Include('acces.php');
?>
<!DOCTYPE html>
<link href="bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="bootsrap-5.1.1-dist/js/bootstrap.min.js"></script>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title> Association-Sportive.fr </title>
	<link rel="stylesheet" height="300px" width="1485px" href="style.css">
	<link rel="icon" type="image/png" href="Images/logo.png">
</head>
<center>
<h1><u>Basketball<h1></u>
</center>
<center><img src="Images/bbasket.jpeg"  width="600px"></center>
    </head>
    <body>
    <center>Bonjour, vous vous êtes inscrits dans la section basket, voici le planning des entrainement selon votre sexe et votre age.</center>
	<br>
    <center><img src="Images/pbasket.png" width="800px"></center>
	<br>
	<center> Vous retrouvez ici toute les séances organisées au cours de la semaine auquel vous pouvez participez selon votre âge.<br> Une personne peut participez à la séance d'une catégories juste aussi de la sienne mais ne peut pas participer à une séance d'une catégories inférieur.</center>
    <br>
	<center> Catégories: <br><br>
				U9 (Mixtes) <br> U11 (Masculin/Féminin) <br> U13 (Masculin/Féminin) <br> U15 (Masculin/Féminin) <br> U18 (Masculin/Féminin) <br> Sénior (Masculin/Féminin)
	</body>
    <br>
    <center>
    <a href="activites2.php" class="btn btn-dark btn-lg" class="button">Retour sur la page activités</a>
</center>
</html>
<?php
Include ('footer2.html');
?>