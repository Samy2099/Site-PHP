<?php

include ('entete2.php');

include ('fonctions.php');

$numAdh = $_POST['numAdh'];
$pseudo  = $_POST['pseudo'];
$mdph = password_hash($mdp, PASSWORD_DEFAULT);    
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$datenaissance = $_POST['datenaissance'];
$courriel = $_POST['courriel'];
$rue = $_POST['rue'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$tel = $_POST['tel'];
$sexe = $_POST['sexe'];
$activite = $_POST['activite'];

$requete = "UPDATE adherents
            SET pseudo='$pseudo',mdp='$mdph',nom='$nom',prenom='$prenom',datenaissance='$datenaissance',courriel='$courriel',rue='$rue',cp='$cp',ville='$ville',tel='$tel',sexe='$sexe',activite='$activite'
			WHERE numAdh = '$numAdh'";
            
$connexion = connecter();
 
$resultat = mysqli_query($connexion,$requete); 

header('Location: confirmation.php');

?>