<?php
include "../../models/connexion_bdd.php";

$query = "INSERT INTO tests_passes(id_utilisateur, nom_test, contenu_test) VALUES(:id_utilisateur, :nom_test, :contenu_test)";
$sql = $bdd->prepare($query);
$sql->bindParam(':id_utilisateur', $_POST["identifiant"]);
$sql->bindParam(':nom_test', $_POST["nom_test"]);
$sql->bindParam(':contenu_test', $_POST["donnees_test"]);
$status = $sql->execute();
