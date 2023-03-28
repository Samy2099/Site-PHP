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
<center><img src="Images/bjujitsu.jpg"  width="400px"></center>
    </head>
    <body>
    <center>Bonjour, vous vous êts inscrits dans la section handball, voici le planning des entrainement selon votre sexe et votre age.</center>
	<br>
	<br>
    <center><img src="Images/pjuji.png" ></center>
    <br>
	<br>
	<center> Vous retrouvez ici toute les séances organisées au cours de la semaine auquel vous pouvez participez selon votre âge.<br> Une personne peut participez à la séance d'une catégories juste aussi de la sienne mais ne peut pas participer à une séance d'une catégories inférieur.</center>
    <br>
	<center><h3> Cette activités ne comporte pas de catégories tout le monde peut participer à toutes les séance planifié durant la semaine </h3></center>
	</body>
    <center>
    <a href="activites2.php" class="btn btn-dark btn-lg" class="button">Retour sur la page activités</a>
    </center>
</html>
<?php
Include ('footer2.html');
?>
