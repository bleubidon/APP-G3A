<?php
include "../../models/connexion_bdd.php";

// Récupérer la string des identifiants des tests psycho associés au type d'emploi
$query = "SELECT id_tests_psycho FROM emplois_quels_tests WHERE nom_emploi=:nom_emploi";
$sql = $bdd->prepare($query);
$sql->bindParam(':nom_emploi', $emploi);
$sql->execute();
$id_tests_psycho = $sql->fetch()['id_tests_psycho'];

$id_tests_psycho = explode(";", $id_tests_psycho);

// Si au moins un test est associé à ce type d'emploi
if (count($id_tests_psycho) > 0) {
    $taille_id_tests_psycho = count($id_tests_psycho);
    // Récupérer la liste des test psycho associés
    $query = "SELECT nom_test_psycho FROM tests_psycho WHERE id_test_psycho=";
    for ($i = 0; $i < $taille_id_tests_psycho; $i++) {
        // Il peut arriver de tomber sur une string vide
        if ($id_tests_psycho[$i] != "") {
            $query .= $id_tests_psycho[$i];
            if ($i != $taille_id_tests_psycho - 1) $query .= " OR id_test_psycho=";
        }
    }

    $sql = $bdd->prepare($query);
    $sql->execute();
    $tests_psycho_associes = $sql->fetchall(\PDO::FETCH_ASSOC);
} else $tests_psycho_associes = array();
