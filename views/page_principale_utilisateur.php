<?php include("header.php") ?>

<body>
<?php
include('Mise_en_page.php');  // Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json
?>

<div id='global'>
    <div id='enonce'>
        <ul id='enoncebis'>
            <h>Mon compte :</h>
            <br><br>
            <li>Prénom :</li>
            <li>Nom :</li>
            <li>Age :</li>
            <li>Catégorie</li>
            <li>Poids :</li>
            <li>Taille :</li>
            <li>Genre :</li>
            <li>Email :</li>
            <li>Groupe Sanguin :</li>
        </ul>
    </div>
    <div id='information'>
        <ul id='informationbis'>
            <h> :</h>
            <br><br>
            <li><?php echo $prenom ?></li>
            <li><?php echo $nom ?></li>
            <?php $age = age($date_de_naissance) ?>
            <li><?php echo "$age[0] ans $age[1] mois" ?></li>
            <li><?php echo $type_emploi ?></li>
            <li><?php echo $poids ?></li>
            <li><?php echo $taille ?></li>
            <li><?php echo $genre ?></li>
            <li><?php echo $adresse_email ?></li>
            <li><?php echo $groupe_sanguin ?></li>
        </ul>
    </div>
</div>

</body>
</html>
