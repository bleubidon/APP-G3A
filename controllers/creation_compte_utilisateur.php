<?php
session_start();
$parent_filename = basename($_SERVER['PHP_SELF']);
include("../views/header.php");

// Chargement de la vue correspondant à l'étape du formulaire de création de compte (1, 2 ou 3)
if (isset($_GET['etape'])) {
    switch ($_GET['etape']) {
        case 2:
            include("../views/creaProfile2.php");
            break;
        case 3:
            include("../views/creaProfile3.php");
            break;
        default:
            include("../views/creaProfile1.php");
    }
}
else {
    include("../views/creaProfile1.php");
}

// Profil utilisateur
// TODO gérer la photo de profil
if (isset($_POST['Prenom']) && isset($_POST['Nom'])  && isset($_POST['identifiant']) && isset($_POST['dateNaissance']) && isset($_POST['numeroTel']) && isset($_POST['email'])
    && isset($_POST['password']) && isset($_POST['validePassword']) && isset($_POST['emplois'])) {

    // Vérifier que le mot de passe renseigné est identique à sa confirmation
    if ($_POST['password'] != $_POST['validePassword']) {
        header('location:?confirmation_mdp_erronee');
    }
    else {
        $_SESSION['Prenom'] = $_POST['Prenom'];
        $_SESSION['Nom'] = $_POST['Nom'];
        $_SESSION['identifiant'] = $_POST['identifiant'];
        $_SESSION['dateNaissance'] = $_POST['dateNaissance'];
        $_SESSION['numeroTel'] = $_POST['numeroTel'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['emplois'] = $_POST['emplois'];
        header('location:?etape=2');
    }
}

// Santé utilisateur
else if (isset($_POST['genre']) && isset($_POST['poids']) && isset($_POST['taille']) && isset($_POST['gsang']) && isset($_POST['sommeil']) && isset($_POST['pathologie'])) {
    $_SESSION['genre'] = $_POST['genre'];
    $_SESSION['poids'] = $_POST['poids'];
    $_SESSION['taille'] = $_POST['taille'];
    $_SESSION['gsang'] = $_POST['gsang'];
    $_SESSION['sommeil'] = $_POST['sommeil'];
    $_SESSION['pathologie'] = $_POST['pathologie'];
    header('location:?etape=3');
}

else if (isset($_GET['toutes_infos_collectees'])) {
    include('../models/insertion_compte_utilisateur.php');
    header('location:?etape=3&inscription_reussie');
}
