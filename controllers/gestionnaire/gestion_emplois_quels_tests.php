<?php
include "verif_acces_authorise.php";
if ($acces_authorise) {
    include "../../views/gestionnaire/gestion_emplois_quels_tests.php";
}
