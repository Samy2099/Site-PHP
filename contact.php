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
<header>
<center>
<h1><u> A propos de l'Association ! <h1></u>
<br><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5148.799749407091!2d2.48245!3d48.911574!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x48afefbe25bc446f!2sAssociation%20Sportive%20de%20Bondy!5e1!3m2!1sfr!2sfr!4v1643291182778!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</center>
</body>
</header>
<h1><u>Les horaires</h1></u>
<strong>
<p> vendredi 14:00–17:00<br>
    samedi 09:00–12:00<br>  
    dimanche Fermé<br>
    lundi Fermé<br>
    mardi 14:00–19:00<br>
    mercredi 09:00–12:00<br>  
    14:00–18:00<br>
    jeudi 14:00–20:00<br></p>
</strong>
<h1><u>Nous contacter !</h1></u>
<form action="traitement.contact.php" method="POST">
	<center>
	<table>
			<tr>
				<td><label>Nom:</label></td>
				<td> <input type="text" name="nom" size="25" maxlength="32" required="required"></td>
			</tr>
       
			<tr>
				<td><label>Courriel:</label></td>
				<td><input type="email" name="email" size="25" maxlength="32"required="required"></td>
			</tr>
	  
			<tr>
				<td><label>Objet:</label></td>
				<td><input type="text" name="objet" size="25" maxlength="32"required="required"></td>
			</tr>
			
			<tr>
				<td><label>Message:</label></td>
				<td><textarea name="message" rows="11" cols="75" required="required"></textarea></td>
			</tr>
			<tr>
            
			</tr>
		</table>
</center>
        <center>
        <input type="submit" name="valider" class="btn btn-dark btn-lg float-left" class="button" value="Envoyer votre message">
        </center>
	</fieldset>
</form>
</body>
</html>

<?php
Include ('footer.html');
?>
