<?php //Empêcher l'accès aux pages sans s'être auparavant connecté
if (!isset($_SESSION['pseudo'])) {
  header("location: form.connexion.php");
  exit;
}
session_write_close();
?>