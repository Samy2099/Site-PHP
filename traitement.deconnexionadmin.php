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
<header>
<div id="deco">
	<h1>Souhaitez-vous vous déconnecter ?</h1>

<center>
<button class="btn btn-dark btn-lg float-left" class="button" href="traitement.deconnexionadmin.php">Se déconnecter</button>
</center>
</form>
</div>
</body>
</html>
<?php
session_start();

session_destroy();

header('location: validationadmin.php');
?>