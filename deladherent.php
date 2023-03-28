<?php

Include('fonctions.php');


$numAdh=$_POST['numAdh'];
		 
// requête d'ajout dans la base de données

$requete = "DELETE FROM adherents
            WHERE numAdh ='$numAdh'";
				
// connexion à la base de données
$connexion = connecter();
		
//Exécution de la requête
$resultat = mysqli_query($connexion, $requete);
		
//Fermeture de la bdd
mysqli_close($connexion);

header('Location: confirmationadh.php')
?>
