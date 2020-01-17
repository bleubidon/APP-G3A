<?php
include "../../models/connexion_bdd.php";

$query = "SELECT nom_test_psycho, id_capteurs FROM tests_psycho";
$sql = $bdd->prepare($query);
$sql->execute();
$liste_tests_psycho = $sql->fetchall(\PDO::FETCH_ASSOC);
