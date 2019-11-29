<?php
include('../models/connexion_bdd.php');
// Stockage du mot de passe haché
$mot_de_passe_hache = password_hash($_POST['password'], PASSWORD_ARGON2I);
$query = "INSERT INTO temp_table(nom, mot_de_passe) VALUES(:nom, :mot_de_passe)";
$sql = $bdd->prepare($query);
$sql->bindParam(':nom', $_POST['identifiant']);
$sql->bindParam(':mot_de_passe', $mot_de_passe_hache);
$sql->execute();
