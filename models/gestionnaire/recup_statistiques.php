<?php
include "../../models/connexion_bdd.php";

$query = "SELECT nom_test_psycho FROM tests_psycho";
$sql = $bdd->prepare($query);
$sql->execute();
$liste_tests_psycho = $sql->fetchall(\PDO::FETCH_ASSOC);

// Pour chaque test psycho, on récupère les données des tests passés
$query = "SELECT nom_test, contenu_test FROM tests_passes";
$sql = $bdd->prepare($query);
$sql->execute();
$liste_tests_passes = $sql->fetchall(\PDO::FETCH_ASSOC);
