<?php
include "verif_acces_authorise.php";
if ($acces_authorise) {
    include "../../views/admin/gestion_capteurs.php";
}
