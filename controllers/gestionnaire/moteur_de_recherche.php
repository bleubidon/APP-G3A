<?php
include "verif_acces_authorise.php";
if ($acces_authorise) {
    include "../../views/gestionnaire/liste_utilisateurs.php";
}
