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
include ('entete.html');
include('fonctions.php');

        $pseudo  = $_POST['pseudo'];    
        $mdp=$_POST['mdp'];
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


$requete ="SELECT pseudo
           FROM adherents
           WHERE pseudo='$pseudo'";

$connexion = connecter();

$resultat = mysqli_query($connexion, $requete);


mysqli_close($connexion);


if (mysqli_num_rows($resultat) == 0)
{ 

$mdph = password_hash($mdp, PASSWORD_DEFAULT);

        $requete = "INSERT INTO adherents (pseudo,mdp,nom,prenom,datenaissance,courriel,rue,cp,ville,tel,sexe,activite)
                    VALUES ('$pseudo','$mdph','$nom','$prenom','$datenaissance','$courriel','$rue','$cp','$ville','$tel','$sexe','$activite');";


$connexion = connecter();
           


$resultat = mysqli_query($connexion, $requete);          

        
 mysqli_close($connexion);
 $_SESSION['pseudo']= $pseudo;

		 
 header ("Location: index.php");
}

else
 {
echo '<a href=inscription.php ><p style="text-align: center;">Le pseudo est malheuresement déjà utilisé, Cliquez sur ce lien pour vous réinscrire</p>';


$_SESSION['pseudo'] = $pseudo;
}
?>