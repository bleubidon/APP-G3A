<?php
include "connexion_bdd.php";
// Vérification de la validité du mot de passe
$query = "SELECT identifiant FROM profil_utilisateur WHERE identifiant=:identifiant_renseigne";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant_renseigne', $_POST['identifiant']);
$sql->execute();
$identifiant_indicateur = $sql->fetch()['identifiant'];
