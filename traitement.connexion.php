<?php
Include ('entete.html');
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
session_start();

include('fonctions.php');

$mdp = $_POST['mdp'];
$pseudo = $_POST['pseudo'];
    
    
   
$requete ="SELECT pseudo , mdp
            FROM adherents
            WHERE pseudo='$pseudo';";
            
  
$connexion = connecter();
    
    
$resultat = mysqli_query($connexion, $requete); 
        
    
if (mysqli_num_rows($resultat) == 0)
    {header("Location: connexion.inscription.php" );}
    
   
    else
        {   
         
        
        $ligne = mysqli_fetch_assoc($resultat);
        $mdph = $ligne['mdp'] ;

        

            if (password_verify($mdp,$mdph))
            {
				$_SESSION['pseudo'] = $pseudo;	
                 header ("Location: index2.php");
                
				switch ($pseudo) {
				case 'Administrateur': header ("Location: indexadmin.php"); //mdp Jesaispas1!
				break;
				default: header ("Location: index2.php");
				break;
				}
            }
            
             
else
            {
				echo '<a href=form.connexion.php ><p style="text-align: center;">Votre pseudo ou mot de passe est incorrect, Veuillez réessayer en cliquant sur ce lien</p>';
            }
        }
     

?>
