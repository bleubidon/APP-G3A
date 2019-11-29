<?php
session_start();
if (isset($_POST['identifiant']) && isset($_POST['password'])) {
    include('../models/recuperer_mdp_hache.php');
    if ($mot_de_passe_hache && password_verify($_POST['password'], $mot_de_passe_hache)) {
        header('location:../Mise_en_page.php');
        $_SESSION['identifiant'] = $_POST['identifiant'];
    }
    else {
        header('location:../index.php?erreur_login');
    }
}
