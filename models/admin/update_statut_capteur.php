<?php
include "../../models/connexion_bdd.php";

$query = "UPDATE capteurs SET statut_capteur=:nouveau_statut WHERE nom_capteur=:nom_capteur";
$sql = $bdd->prepare($query);
$sql->bindParam(':nouveau_statut', $_POST["nouveau_statut"]);
$sql->bindParam(':nom_capteur', $_POST["nom_capteur"]);
$sql->execute();
