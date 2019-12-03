<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="ressources/stylesheets/Stylesheet_Login.css" />
    <title>Validation création profil</title>
</head>

<section id="sec1">
    <img id="imgPageDeCo" src="ressources/images/creaProfil3.png">
</section>



<?php
echo "Prénom : $Prenom";
echo "Nom : $Nom";
echo "Date de naissance : $DateDeNaissance";
echo "Numéro de téléphone : $NumeroTel";
echo "Email : $Email";
echo "Poids : $Poids";
echo "Taille : $Taille";
echo "Groupe sanguin : $Groupe";
echo "Sommeil moyen : $Sommeil";
?>

<form method="post" action="mon_compte.php">
    <a href="creaProfile2.php">Retour</a>
    <input type="submit" value="Continuer"/>
</form>