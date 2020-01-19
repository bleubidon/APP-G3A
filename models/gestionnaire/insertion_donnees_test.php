<?php
include "../../models/connexion_bdd.php";

$query = "INSERT INTO tests_passes(id_utilisateur, nom_test, contenu_test, date_test) VALUES(:id_utilisateur, :nom_test, :contenu_test, :date_test)";
$sql = $bdd->prepare($query);
$sql->bindParam(':id_utilisateur', $_POST["identifiant"]);
$sql->bindParam(':nom_test', $_POST["nom_test"]);
$sql->bindParam(':contenu_test', $_POST["donnees_test"]);
$sql->bindParam(':date_test', $_POST["date_test"]);
$status = $sql->execute();
