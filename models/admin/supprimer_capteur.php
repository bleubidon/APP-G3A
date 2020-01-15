<?php
include "../../models/connexion_bdd.php";

$query = "DELETE FROM capteurs WHERE nom_capteur=:nom_capteur";
$sql = $bdd->prepare($query);
$sql->bindParam(':nom_capteur', $_POST["nom_capteur"]);
$sql->execute();
