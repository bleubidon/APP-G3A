<?php
include "../../models/connexion_bdd.php";

$query = "SELECT nom_emploi, id_tests_psycho FROM emplois_quels_tests";
$sql = $bdd->prepare($query);
$sql->execute();
$liste_emplois_quels_tests = $sql->fetchall(\PDO::FETCH_ASSOC);
