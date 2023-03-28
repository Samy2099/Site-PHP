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
	include ('fonctions.php');

	$pseudo = $_SESSION['pseudo'];
	
	$requete ="SELECT *
		   FROM adherents
		   WHERE pseudo='$pseudo'";
	
	$connexion = connecter();

	$resultat = mysqli_query($connexion, $requete);
	
	$ligne = mysqli_fetch_assoc($resultat);
?>
	<form action="traitement.modif.php" method="post">
		<table>
			<h3>Modifiez vos infos perso</h3>
			<tr><input type="hidden" name="nom" value="<?=$ligne['nom'];?>"/></tr>
			Nom
			<tr><input type="text"name="prenom"value="<?= $ligne['prenom'];?>"/></tr></br></br>
			Prénom
			<tr><input type="text"name="pseudo"value="<?= $ligne['pseudo'];?>"/></tr></br></br>
			Rue
			<tr><input type="text" name="mdp"value="<?=$ligne['mdp'];?>"/></tr></br></br>
			Ville
			<tr><input type="text" name="sexe"value="<?=$ligne['sexe'];?>"/></tr></br></br>
			Code Postal
			<tr><input type="text" name="numero"value="<?=$ligne['numero'];?>"/></tr></br></br>
			Pseudo
			<tr><input type="text" name="activite"value="<?=$ligne['activite'];?>"/></tr></br></br>
			
			
		</table>
	</form>
</html>