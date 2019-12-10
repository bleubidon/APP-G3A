<?php
include "../views/header.php";
session_start();
if (isset($_POST['identifiant']) && isset($_POST['password'])) {
    $_SESSION['identifiant'] = $_POST['identifiant'];
    include "../models/recup_infos_authentification_utilisateur.php";
    if ($mot_de_passe_hache && password_verify($_POST['password'], $mot_de_passe_hache)) {
        include "charger_session_utilisateur.php";
        redirection("page_principale_utilisateur.php");
    } else {
        redirection("../index.php?erreur_login");
    }
}
