<?php
include "verif_acces_authorise.php";
if ($acces_authorise) {
    include "../../views/gestionnaire/affichage_test_en_cours.php";
}
