<?php
include "verif_acces_authorise.php";
if ($acces_authorise) {
    include "../../views/admin/gestion_capteurs.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom_capteur = $_POST["nom_capteur"];
        $statut_capteur = $_POST["statut_capteur"];

        include "../../models/admin/insertion_capteur.php";
        if (!$nom_disponible) redirection("?error_nom_deja_pris"); else redirection("?");
    }
}
