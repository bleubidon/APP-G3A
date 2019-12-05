<?php
session_start();
if (isset($_POST['identifiant']) && isset($_POST['password'])) {
    include('../models/recup_mdp_hache.php');
    if ($mot_de_passe_hache && password_verify($_POST['password'], $mot_de_passe_hache)) {
        $_SESSION['identifiant'] = $_POST['identifiant'];
        header('location:page_principale_utilisateur.php');
    }
    else {
        header('location:../index.php?erreur_login');
    }
}
