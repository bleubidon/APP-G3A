<?php
include('connexion_bdd.php');

// Stockage du token associé à l'id de l'utilisateur
// Ce token a une durée de validité limitée, on stocke donc sa date de création

// Vérifier si l'utilisateur a déjà un token
$query = "SELECT id_utilisateur FROM tokens_reinitialisation_mot_de_passe WHERE id_utilisateur=:id_utilisateur";
$sql = $bdd->prepare($query);
$sql->bindParam(':id_utilisateur', $id_utilisateur);
$status = $sql->execute();
$id = $sql->fetch()['id_utilisateur'];

if ($id == null) {  // L'utilisateur n'a pas encore de token
    // Ajouter une entrée dans la table (id_utilisateur, token)
    $query = "INSERT INTO tokens_reinitialisation_mot_de_passe(id_utilisateur, token, timestamp_creation)
                VALUES(:id_utilisateur, :token, :timestamp_creation)";
    $sql = $bdd->prepare($query);
    $sql->bindParam(':id_utilisateur', $id_utilisateur);
    $sql->bindParam(':token', $token);
    $sql->bindParam(':timestamp_creation', $timestamp_creation_token);
    $status = $sql->execute();
}
else {  // L'utilisateur a déjà un token
    // Modifier l'entrée existant déjà dans la table (id_utilisateur, token)
    $query = "UPDATE tokens_reinitialisation_mot_de_passe SET token=:token, timestamp_creation=:timestamp_creation WHERE id_utilisateur=:id_utilisateur";
    $sql = $bdd->prepare($query);
    $sql->bindParam(':id_utilisateur', $id_utilisateur);
    $sql->bindParam(':token', $token);
    $sql->bindParam(':timestamp_creation', $timestamp_creation_token);
    $status = $sql->execute();
}
