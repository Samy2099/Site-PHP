<?php
function connecter()
    {
      $hote       = 'localhost';
      $utilisateur= 'root';
      $passe      = 'root';
      $base       = 'sport';
      $connexion  = mysqli_connect($hote,$utilisateur,$passe,$base);
      mysqli_query($connexion, 'SET NAMES UTF8');
      return $connexion;
    }
function verificationConnexion($pseudo, $mdp) {
  $baseDeDonnees = new PDO('mysql:host=localhost;dbname=sport', 'root', 'root');
  $requete ="SELECT * FROM adherents WHERE pseudo='$pseudo' AND mdp = '$mdp';";
  $resultatSQL = $baseDeDonnees->query($requete);
  $retour = $resultatSQL->fetch();
  return $retour;
}
?>