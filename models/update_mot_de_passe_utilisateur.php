<?php
include "connexion_bdd.php";
// Stockage du mot de passe haché
$mot_de_passe_hache = password_hash($_POST['password'], PASSWORD_ARGON2I);
$query = "UPDATE profil_utilisateur SET mot_de_passe=:mot_de_passe WHERE identifiant=:id_utilisateur";
$sql = $bdd->prepare($query);
$sql->bindParam(':id_utilisateur', $id_utilisateur);
$sql->bindParam(':mot_de_passe', $mot_de_passe_hache);
$sql->execute();
