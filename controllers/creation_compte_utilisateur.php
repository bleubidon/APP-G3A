<?php
session_start();
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
        case 4:
            include("../views/creaProfile4.php");
            break;
        default:
            include("../views/creaProfile1.php");
    }
} else {
    include("../views/creaProfile1.php");
}

// Profil utilisateur
// TODO gestion du formulaire côté client (JavaScript)
if (isset($_POST['Prenom']) && isset($_POST['Nom']) && isset($_POST['identifiant']) && isset($_POST['dateNaissance']) && isset($_POST['numeroTel'])
    && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['validePassword']) && isset($_POST['emplois'])) {

    // Vérifier que le mot de passe renseigné est identique à sa confirmation
    $mot_de_passe_incorrect = false;
    if ($_POST['password'] != $_POST['validePassword']) {
        $mot_de_passe_incorrect = true;
        $destination_header = "?confirmation_mdp_erronee";
    }

    // Vérifier que l'identifiant renseigné est non vide et pas déjà pris
    $identifiant_incorrect = false;
    if ($_POST['identifiant'] == "") {  // L'identifiant renseigné est vide
        $identifiant_incorrect = true;
    }
    include('../models/verif_disponibilite_identifiant.php');
    if ($identifiant_indicateur != null) {  // L'identifiant renseigné est déjà pris
        $identifiant_incorrect = true;
    }
    if ($identifiant_incorrect) {
        $destination_header = "?identifiant_invalide";
    }

    if (!$mot_de_passe_incorrect && !$identifiant_incorrect) {
        // Si une photo de profil a été renseignée dans le formulaire, la télécharger sur le serveur
        if (isset($_FILES['PhotoProfil'])) {
            $nom_photo_profil = $_POST['identifiant'] . '_' . $_FILES['PhotoProfil']['name'];
            move_uploaded_file($_FILES['PhotoProfil']['tmp_name'], "../photos_profil/$nom_photo_profil");
        }

        $_SESSION['identifiant'] = $_POST['identifiant'];
        $_SESSION['Prenom'] = $_POST['Prenom'];
        $_SESSION['Nom'] = $_POST['Nom'];
        $_SESSION['dateNaissance'] = $_POST['dateNaissance'];
        $_SESSION['numeroTel'] = $_POST['numeroTel'];
        $_SESSION['email'] = $_POST['email'];
        if (isset($nom_photo_profil)) $_SESSION['nom_photo_profil'] = $nom_photo_profil;
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['emplois'] = $_POST['emplois'];

        $destination_header = "?etape=2";
    }

    header("location:" . $destination_header);
} // Santé utilisateur
else if (isset($_POST['genre']) && isset($_POST['poids']) && isset($_POST['taille']) && isset($_POST['gsang']) && isset($_POST['sommeil']) && isset($_POST['pathologie'])) {
    $_SESSION['genre'] = $_POST['genre'];
    $_SESSION['poids'] = $_POST['poids'];
    $_SESSION['taille'] = $_POST['taille'];
    $_SESSION['gsang'] = $_POST['gsang'];
    $_SESSION['sommeil'] = $_POST['sommeil'];
    $_SESSION['pathologie'] = $_POST['pathologie'];
    header('location:?etape=3');
} // Enregistrer l'utilisateur dans la bdd
else if (isset($_GET['toutes_infos_collectees'])) {
    include('../models/insertion_compte_utilisateur.php');

    unset($_SESSION['Prenom']);
    unset($_SESSION['Nom']);
    unset($_SESSION['identifiant']);
    unset($_SESSION['dateNaissance']);
    unset($_SESSION['numeroTel']);
    unset($_SESSION['email']);
    if (isset($_SESSION['nom_photo_profil'])) unset($_SESSION['nom_photo_profil']);
    unset($_SESSION['password']);
    unset($_SESSION['emplois']);
    unset($_SESSION['genre']);
    unset($_SESSION['poids']);
    unset($_SESSION['taille']);
    unset($_SESSION['gsang']);
    unset($_SESSION['sommeil']);
    unset($_SESSION['pathologie']);

    header('location:?etape=4');
}
