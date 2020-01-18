<?php
include "../../models/connexion_bdd.php";
$query = "SELECT type_emploi FROM profil_utilisateur WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant', $idUtilisateur);
$sql->execute();
$emploi = $sql->fetch()["type_emploi"];
