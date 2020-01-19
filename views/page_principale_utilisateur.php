<?php include "header.php" ?>

<body>
<?php
include "Mise_en_page.php";  // Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json
?>

<div id="section_centrale">
    <h1>Mon profil:</h1>
    <table>
        <tr>
            <td class="left_column">Prénom:</td>
            <td><?php echo $_SESSION['prenom'] ?></td>
        </tr>
        <tr>
            <td class="left_column">Nom:</td>
            <td><?php echo $_SESSION['nom'] ?></td>
        </tr>
        <tr>
            <td class="left_column">Age:</td>
            <td><?php $age = age($date_de_naissance);
                echo "$age[0] ans $age[1] mois" ?></td>
        </tr>
        <tr>
            <td class="left_column">Emploi:</td>
            <td><?php echo $type_emploi ?></td>
        </tr>
        <tr>
            <td class="left_column">Poids:</td>
            <td><?php echo $poids ?></td>
        </tr>
        <tr>
            <td class="left_column">Taille:</td>
            <td><?php echo $taille ?></td>
        </tr>
        <tr>
            <td class="left_column">Genre:</td>
            <td><?php echo $genre ?></td>
        </tr>
        <tr>
            <td class="left_column">Email:</td>
            <td><?php echo $adresse_email ?></td>
        </tr>
        <tr>
            <td class="left_column">Groupe sanguin:</td>
            <td><?php echo $groupe_sanguin ?></td>
        </tr>
    </table>
</div>
</body>
</html>
