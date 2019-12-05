<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="Stylesheet" href="ressources/stylesheets/Stylesheet_page_accueil.css" />
    <link rel="Stylesheet" href="ressources/stylesheets/Stylesheet.css" />
    <title>Captest</title>
</head>

<body>

<?php
include('Mise_en_page.php');
?>

<div id='global'>
<div id ='enonce'>
    <ul id='enoncebis'>
    <h>Mon compte :</h><br><br>
    <li>Prénom :</li>
    <li>Nom :</li>
    <li>Age :</li>
    <li>Catégorie </li>
    <li>Poids :</li>
    <li>Taille :</li>
    <li>Genre :</li>
    <li>Email :</li>
    <li>Groupe Sanguin :</li>
</ul>
</div>

<?php
include('models/connexion_bdd.php');
// ...
$query = "SELECT prenom, nom, type_emploi FROM profil_utilisateur WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant', $_SESSION['identifiant']);
$sql->execute();
$donnees = $sql->fetch();
$prenom = $donnees['prenom'];
$nom = $donnees['nom'];
$type_emploi = $donnees['type_emploi'];

$query = "SELECT genre, poids, taille, groupe_sanguin FROM sante_utilisateur WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant', $_SESSION['identifiant']);
$sql->execute();
$donnees = $sql->fetch();
$genre = $donnees['genre'];
$poids = $donnees['poids'];
$taille = $donnees['taille'];
$groupe_sanguin = $donnees['groupe_sanguin'];
?>

<div id ='information'>
        <ul id='informationbis'>
        <h> :</h><br><br>
        <li><?php echo $prenom?></li>
        <li><?php echo $nom?></li>
        <li>19</li>
        <li><?php echo $type_emploi?></li>
        <li>65</li>
        <li>180</li>
        <li>Homme</li>
        <li>armand.barral@orange.fr</li>
        <li>A+</li>
    </ul>
</div>
</div>

</body>
</html>