<?php
include "../../models/connexion_bdd.php";

$query = "UPDATE profil_utilisateur SET statut=:nouveau_statut WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':nouveau_statut', $_POST["nouveau_statut"]);
$sql->bindParam(':identifiant', $_POST["identifiant"]);
$sql->execute();
