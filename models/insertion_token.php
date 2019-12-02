<?php
include('../models/connexion_bdd.php');
// Stockage du token associé à l'id de l'utilisateur
$query = "INSERT INTO tokens_reinitialisation_mot_de_passe(id_utilisateur, token) VALUES(:id_utilisateur, :token)";

//$query = "UPDATE tokens_reinitialisation_mot_de_passe SET token=:token WHERE id_utilisateur=:id_utilisateur
//            IF @@ROWCOUNT=0
//            INSERT INTO tokens_reinitialisation_mot_de_passe VALUES (:id_utilisateur_bis, :token_bis)";

//$query = "IF EXISTS (SELECT * FROM tokens_reinitialisation_mot_de_passe WHERE id_utilisateur=:id_utilisateur)
//            UPDATE tokens_reinitialisation_mot_de_passe SET token=:token WHERE id_utilisateur=:id_utilisateur
//          ELSE
//            INSERT INTO tokens_reinitialisation_mot_de_passe(id_utilisateur, token) VALUES('monid', 'montoken')";

$sql = $bdd->prepare($query);
$sql->bindParam(':id_utilisateur', $id_utilisateur);
$sql->bindParam(':token', $token);
$status = $sql->execute();

if ($status) {
    echo "SUCCESS";
}
else {
    echo "FAILURE";
}
