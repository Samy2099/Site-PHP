<?php
include('entete.html');
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
<form action="traitement.inscription.php" method="post">
	<fieldset id="f2">
		<u><h1>Inscrivez-vous</h1></u>
		<hr>
			<label>Pseudo:</label>
			<br>
			<input type="text" name="pseudo" size="20" maxlength="32" required="required">
			<br>
			<label>Mot de passe:</label>
			<br>
			<input type="password" id="motdepasse" name="mdp" size="20" maxlength="32" required="required" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,70}$" title="-Au moins 1 majuscule
			-Au moins 1 minuscule
			-Au moins 1 chiffre
			-Au moins 1 symbole
			-Minimum 8 caractères et maximum 70 caractères">
			<br>
			<label>Confirmer le mot de passe:</label>
			<br>
			<input type="password" name="mdp" size="20" maxlength="32" required="required" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,70}$" title="-Au moins 1 majuscule
			-Au moins 1 minuscule
			-Au moins 1 chiffre
			-Au moins 1 symbole
			-Minimum 8 caractères et maximum 70 caractères">
			<br>

			<label>Nom:</label>
			<br>
			<input type="text" name="nom" size="20" maxlength="32" required="required">
			<br>

			<label>Prénom:</label>
			<br>
			<input type="text" name="prenom" size="20" maxlength="32" required="required">
			<br>

			<label>Date de naissance : </label>
			<br>
      	  	<input type="date" name="datenaissance" required="required">
			<br>
			
			<label>Courriel:</label>
			<br>
			<input type="email" name="courriel" placeholder="votre-email@site.com" size="20" maxlength="32" required="required">
			<br>

			<label>Rue:</label>
			<br>
			<input type="text" name="rue" size="20" maxlength="32" required="required">
			<br>
			<label>Code Postal :</label>
			<br>
			<input type="number" name="cp" size="20" maxlength="32" pattern="[0-9]" required="required">
			<br>
			<label>Ville:</label>
			<br>
			<input type="text" name="ville" size="20" maxlength="32" required="required" pattern="[a-zA-Z]+">
			<br>

            <label>Numéro de télephone:</label>
			<br>
			<input type="number" name="tel" size="25" maxlength="32" pattern="[0-9]" required="required">
			<br>
			<label>Sexe:</label>
			<br>
			<form action="traitement.inscription.php" method="POST" name="formulaire" required="required">
				<input type="radio" name="sexe" value="Homme" required> Masculin
				<input type="radio" name="sexe" value="Femme" required> Féminin
			</form>
			<br>
            <h3><label for="name">Inscription à une activité</label></h3>

            <label for="pet-select">Choisissez une activité:</label>
            <select name="activite" id="pet-select">
            <option value="Foot">Foot</option>
            <option value="Basket">Basketball</option>
            <option value="Judo">Judo</option>
            <option value="Jujitsu">Jujitsu</option>
            <option value="Handball">Handball</option>
            <option value="water">Water Polo</option>
            </select>
            <center><br>
            <input type="submit" name="valider" class="btn btn-dark" class="button" value="S'inscrire">
			<input type="reset" value="Réinitialiser" class="btn btn-dark">
            </center> 
            </select>
		<hr>
	</fieldset>
</form>
</body>
</html>
<?php
include('footer.html');
?>