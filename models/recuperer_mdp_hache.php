<?php
    include('connexion_bdd.php');
    // Vérification de la validité du mot de passe
    $query = "SELECT mot_de_passe FROM temp_table WHERE nom=:nom";
    $sql = $bdd->prepare($query);
    $sql->bindParam(':nom', $_POST['identifiant']);
    $sql->execute();
    $mot_de_passe_hache = $sql->fetch()['mot_de_passe'];
