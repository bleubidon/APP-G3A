<?php
include "../views/header.php";
session_start();
if (isset($_POST['identifiant']) && isset($_POST['password'])) {
    $identifiant_propose = $_POST['identifiant'];
    include "../models/verif_utilisateur_pas_banni.php";  // Vérifier que l'utilisateur n'est pas banni
    if ($banni) {
        redirection("../index.php?banni");
    }
    else {
        $_SESSION['identifiant'] = $identifiant_propose;
        include "../models/recup_infos_authentification_utilisateur.php";
        if ($mot_de_passe_hache && password_verify($_POST['password'], $mot_de_passe_hache)) {
            include "charger_session_utilisateur.php";
            redirection("/Home");
        } else {
            redirection("../index.php?erreur_login");
        }
    }
}
