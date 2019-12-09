<?php
session_start();
if (isset($_POST['identifiant']) && isset($_POST['password'])) {
    include('../models/recup_infos_authentification_utilisateur.php');
    if ($mot_de_passe_hache && password_verify($_POST['password'], $mot_de_passe_hache)) {
        $_SESSION['identifiant'] = $_POST['identifiant'];
        $_SESSION['prenom'] = $prenom;
        $_SESSION['nom'] = $nom;
        $_SESSION['statut_utilisateur_site'] = $statut_utilisateur_site;
        $_SESSION['nom_photo_profil'] = $nom_photo_profil;
        header('location:page_principale_utilisateur.php');
    } else {
        header('location:../index.php?erreur_login');
    }
}
