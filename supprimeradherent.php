<?php
Include('enteteadmin.html');
?>
<header>
<div id="deco">
	<h1>Souhaitez-vous vous déconnecter ?</h1>
	
<form action="traitement.deconnexion.php" method="post">
<center>
<button class="btn btn-dark btn-lg float-left" class="button" href="traitement.deconnexion.php">Se déconnecter</button>
</center>
</form>
</div>
</body>
</html>
<?php
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
<?php
	include('fonctions.php');
	$requete = "SELECT numAdh,pseudo 
				FROM adherents ;";
?>
<center>
<form action="deladherent.php" method="post">
<form method="post" action="supprimeradherent.php">
<label for="pays"><h3><u>Sélectionner l'adhérent à supprimer !</h3><u></label><br>
<select name="numAdh">
<?php

$connexion = connecter();

$resultat = mysqli_query($connexion, $requete);
	
mysqli_close($connexion);


	while ($ligne = mysqli_fetch_assoc($resultat))
	{
?>
	<option value="<?php echo $ligne['numAdh']; ?>"> 
<?php 
	echo $ligne['pseudo']; 
	?></option>
<?php
	} 
?>
</select>
</body>
<br>
<br>
<input type="submit" class="btn btn-dark btn-lg" class="button" value="supprimer l'adherent">
</center>
</html>