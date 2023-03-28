<?php
Include ('enteteadmin.html');
session_start();
Include('acces.php');
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
<h1><u> Bienvenue Administrateur ! <h1></u>
</center>
<div id="CarouselAsso" class="carousel slide border" data-ride="carousel"><br>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="Images/image2.jpg" height="600px" width="400px" alt="">
                  <div class="carousel-caption d-none d-sm-block">
                     <h5>Basketball</h5>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="Images/image3.jpg" height="600px" width="400px" alt="">
                  <div class="carousel-caption d-none d-sm-block">
                     <h5>Handball</h5>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="Images/image4.jpg" height="600px" width="400px" alt="">
                  <div class="carousel-caption d-none d-sm-block">
                     <h5>Football</h5>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="Images/image5.jpg" height="600px" width="400px" alt="">
                  <div class="carousel-caption d-none d-sm-block">
                     <h5>Judo</h5>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="Images/image6.jpg" height="600px" width="400px" alt="">
                  <div class="carousel-caption d-none d-sm-block">
                     <h5>Jujitsu</h5>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="Images/image7.jfif" height="600px" width="400px" alt="">
                  <div class="carousel-caption d-none d-sm-block">
                     <h5>Waterpolo</h5>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#CarouselAsso" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#CarouselAsso" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
            </a>
         </div>
      </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</html>