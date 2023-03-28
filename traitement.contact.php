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
include('entete.html');

if ( empty($_POST['nom'])
	|empty($_POST['email'])
	|empty($_POST['objet'])
	|empty($_POST['message'])
 
  )
  {$message = "Erreur dans votre saisie, Veuillez recommencez !";
   $erreur = true;}
  
else
   {

    $nom = $_POST['nom'];
	$email = $_POST['email'];
	$objet = $_POST['objet'];
	$msg = $_POST['message'];


	$requete = "INSERT INTO contact (nom, email, objet, message)
				VALUES('$nom','$email','$objet','$msg')";		
	$connexion=connecter();
			
	$resultat = mysqli_query($connexion, $requete);
	mysqli_close($connexion);
						
	if (!$resultat)
	  {$message = '<p style="text-align: center;">Il y a eu un problème en traitant votre requête.';
	   $erreur = true;}

	else
	  {$message = '<p style="text-align: center;">Votre message à bien été envoyé, Merci !';
	   $erreur = false;}
   }
echo $message;
if ($erreur) 
  {
    echo ' <br><br><a href="contact.php"`class="btn btn-dark float-left" class="button"<p style="text-align: center;">Veuillez Réessayer</a>';
  }
?>
<br><br><br><a href="index.php" class="btn btn-dark btn-lg" class="button">Retour sur la page d'accueil</a>