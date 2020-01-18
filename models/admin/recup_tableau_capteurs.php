<?php
include "../../models/connexion_bdd.php";

$query = "SELECT nom_capteur, statut_capteur FROM capteurs";
$sql = $bdd->prepare($query);
$sql->execute();
$liste_capteurs = $sql->fetchall(\PDO::FETCH_ASSOC);
