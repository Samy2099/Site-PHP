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
session_start();
include('acces.php');

include('fonctions.php');

include('entete2.html');
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

$pseudo= $_SESSION['pseudo'];

$requete = "SELECT * FROM adherents WHERE pseudo = '$pseudo';";

$connexion = connecter();
 
$resultat = mysqli_query($connexion, $requete); 

$ligne = mysqli_fetch_assoc($resultat);

mysqli_close($connexion);
?>
<form action="traitement.modif.php"method="post">
<center>
<h3>Modifiez vos information personnels !</h3>
<hr>
<input type="hidden"name="numAdh"value="<?=$ligne['numAdh'];?>"/>
Pseudo
<input type="text" size="25" name="pseudo"value="<?= $ligne['pseudo'];?>"/><br><br>
Mot de passe
<input type="password"size="25"name="mdp"value="<?= $ligne['mdp'];?>"/><br><br>
Nom
<input type="text"size="25"name="nom"value="<?= $ligne['nom'];?>"/><br><br>
Prénom
<input type="text"size="25"name="prenom"value="<?= $ligne['prenom'];?>"/><br><br>
Date de naissance
<input type="date"size="25"name="datenaissance"value="<?= $ligne['datenaissance'];?>"/><br><br>
Courriel
<input type="text"size="25"name="courriel"value="<?=$ligne['courriel'];?>"/><br><br>
Rue
<input type="text"size="25"name="rue"value="<?= $ligne['rue'];?>"/><br><br>
Code postal
<input type="number"size="25"name="cp"value="<?= $ligne['cp'];?>"/><br><br>
Ville
<input type="text"size="25"name="ville"value="<?= $ligne['ville'];?>"/><br><br>
Numéro de téléphone
<input type="number"size="25"name="tel"value="<?= $ligne['tel'];?>"/><br><br>
Sexe
<input type="text" name="sexe" value="<?= $ligne['sexe'];?>"/><br><br>
Activité
<input type="text"size="25"name="activite"value="<?= $ligne['activite'];?>"/><br><br>
<hr>
<input type="submit" name="envoi" class="btn btn-dark btn-lg" class="button" value="Modifier les informations">
</center>
</form>
</html>