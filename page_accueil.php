<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="Stylesheet" href="stylesheets/Stylesheet_page_accueil.css" />
    <title>Captest</title>
</head>

<body>
<?php try { $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '' , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
catch (Exception $e) { die('Erreur : ' . $e->getMessage()); }  ?>

<?php $Mdp = $bdd -> query('SELECT Mdp From client');
$row = $Mdp -> fetch();?>


<?php if (isset($_POST['Password']) AND $_POST['Password'] == $row[0]) {
        include("Mise_en_page.php");
    }
    else {
        include("Page_de_connexion_erreurmdp.php");
    }
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
    <li>Adresse :</li>
</ul>
</div>
<div id ='information'>
        <ul id='informationbis'>
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
        <li>Adresse :</li>
    </ul>
</div>
</div>

</body>
</html>