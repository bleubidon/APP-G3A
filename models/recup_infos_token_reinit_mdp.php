<?php
include('connexion_bdd.php');
// Récupération des informations associés au token
$query = "SELECT id_utilisateur, timestamp_creation FROM tokens_reinitialisation_mot_de_passe WHERE token=:token";
$sql = $bdd->prepare($query);
$sql->bindParam(':token', $token);
$sql->execute();
$donnees = $sql->fetch();
$id_utilisateur = $donnees['id_utilisateur'];
$timestamp_creation_token = $donnees['timestamp_creation'];
