<?php
include "../../models/gestionnaire/recup_tableau_emplois_quels_tests.php";
include "../../models/gestionnaire/recup_tableau_tests_psycho.php";
echo json_encode(array($liste_emplois_quels_tests, $liste_tests_psycho));
