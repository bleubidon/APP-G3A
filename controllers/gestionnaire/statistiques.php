<?php
include "verif_acces_authorise.php";
if ($acces_authorise) {
    include "../../models/gestionnaire/recup_statistiques.php";
    include "../../views/gestionnaire/statistiques.php";
}
