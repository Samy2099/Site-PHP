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
<div id="insc">
		<u><h1>Inscrivez-vous</h1></u>
		<p>Toujours pas inscrit ?<br>
		N'hésitez pas à créer un compte sur notre site pour pouvoir accéder à nos activités sportives !!!
		</p>
		<br>
		<a href="inscription.php" class="btn btn-dark btn-lg" class="button">Inscription</a>
</div>
<form action="traitement.connexion.php" method="post">
	<fieldset id="f1">
		<u><h1>Connectez-vous</h1></u>
		<hr>

				<label>Pseudo:</label>
				<br>
				<input type="text" name="pseudo" size="25" maxlength="32"required>
				<br>
				<label>Mot de passe:</label>
				<br>
				<input type="password" name="mdp" size="25" maxlength="32" required>
				<br><br>

				<input type="submit" name="envoi" class="btn btn-dark btn-lg" class="button" value="Connexion">
		<hr>
	</fieldset>
</form>
</body>
</html>
<?php
Include ('footer.html');
?>