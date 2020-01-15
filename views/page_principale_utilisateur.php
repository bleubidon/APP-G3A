<?php include "header.php" ?>

<body>
<?php
include "Mise_en_page.php";  // Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json
?>

<div id='global'>
    <div id='enonce'>
        <ul id='enoncebis'>
            <h>Mon compte :</h>
            <br><br>
            <li>Prénom :</li><br>
            <li>Nom :</li><br>
            <li>Age :</li><br>
            <li>Catégorie :</li><br>
            <li>Poids :</li><br>
            <li>Taille :</li><br>
            <li>Genre :</li><br>
            <li>Email :</li><br>
            <li>Groupe Sanguin :</li><br>
            <li>Sommeil moyen :</li>
        </ul>
    </div>
    <div id='information'>
        <ul id='informationbis'>
            <br>
            <h> : </h>
            <br>
            <li><?php echo $_SESSION['prenom'] ?></li><br>
            <li><?php echo $_SESSION['nom'] ?></li><br>
            <li><?php $age = age($date_de_naissance); echo "$age[0] ans $age[1] mois" ?></li><br>
            <li><?php echo $type_emploi ?></li><br>
            <li><?php echo $poids ?></li><br>
            <li><?php echo $taille ?></li><br>
            <li><?php echo $genre ?></li><br>
            <li><?php echo $adresse_email ?></li><br>
            <li><?php echo $groupe_sanguin ?></li><br>
            <li></li>
        </ul>
    </div>
</div>

</body>
</html>
