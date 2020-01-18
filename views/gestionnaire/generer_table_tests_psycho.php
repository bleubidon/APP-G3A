<?php
include "../../models/gestionnaire/recup_tableau_tests_psycho.php";
include "../../models/gestionnaire/recup_tableau_capteurs.php";

echo json_encode(array($liste_tests_psycho, $liste_capteurs));
