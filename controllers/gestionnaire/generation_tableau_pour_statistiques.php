<?php
include "../../models/gestionnaire/recup_statistiques.php";

// Calcul des statistiques
//$liste_tests_psycho, $liste_tests_passes

$tableau_statistiques = array();
foreach ($liste_tests_passes as &$test_passe) {
    if (!array_key_exists($test_passe["nom_test"], $tableau_statistiques)) {
        $tableau_statistiques[$test_passe["nom_test"]] = array();
    }
    array_push($tableau_statistiques[$test_passe["nom_test"]], $test_passe["contenu_test"]);
}
echo json_encode($tableau_statistiques);
