<?php
session_start();
include "../views/header.php";
$modification_profil = true;  // Influe sur la vue incluse ci-après
include "../models/recup_infos_utilisateur_modif_compte.php";

// Chargement de la vue correspondant à l'étape du formulaire de modification de compte (1, 2 ou 4)
if (isset($_GET['etape'])) {
    switch ($_GET['etape']) {
        case 2:
            include "../views/creaProfile/creaProfile2.php";
            break;
        case 4:
            include "../views/creaProfile/creaProfile4.php";
            break;
        default:
            include "../views/creaProfile/creaProfile1.php";
    }
} else {
    // TODO refaire le système de retour plus proprement
    $retour = "page_principale_utilisateur.php";
    include "../views/creaProfile/creaProfile1.php";
}

// Profil utilisateur
if (isset($_POST['Prenom']) && isset($_POST['Nom']) && isset($_POST['dateNaissance']) && isset($_POST['numeroTel'])
    && isset($_POST['email']) && isset($_POST['numeroTel'])) {

    $_SESSION['Prenom_nouveau'] = $_POST['Prenom'];
    $_SESSION['Nom_nouveau'] = $_POST['Nom'];
    $_SESSION['dateNaissance_nouveau'] = $_POST['dateNaissance'];
    $_SESSION['numeroTel_nouveau'] = $_POST['numeroTel'];
    $_SESSION['email_nouveau'] = $_POST['email'];
    $_SESSION['type_emploi_nouveau'] = $_POST['emplois'];

    // Si modification du mdp demandée
    if (isset($_POST['password_ancien']) && isset($_POST['password']) && isset($_POST['validePassword'])) {
        include "../models/recup_mdp_utilisateur.php";
        if ($mot_de_passe_hache && password_verify($_POST['password_ancien'], $mot_de_passe_hache)) {
            if ($_POST['password'] == $_POST['validePassword']) {
                $_SESSION['mot_de_passe_hache_nouveau'] = password_hash($_POST['password'], PASSWORD_ARGON2I);
            }
        }
    }
    // Si une photo de profil a été renseignée dans le formulaire, la télécharger sur le serveur
    if (file_exists($_FILES['PhotoProfil']['tmp_name']) && is_uploaded_file($_FILES['PhotoProfil']['tmp_name'])) {  // Une photo a été envoyée par POST
        $nom_photo_profil = $_SESSION['identifiant'] . '_' . $_FILES['PhotoProfil']['name'];
        unlink("../photos_profil/" . $_SESSION['nom_photo_profil']);  // Supprimer l'ancienne photo de profil
        move_uploaded_file($_FILES['PhotoProfil']['tmp_name'], "../photos_profil/$nom_photo_profil");
        $_SESSION['nom_photo_profil_nouveau'] = $nom_photo_profil;
    }

    redirection("?etape=2");
} // Santé utilisateur
else if (isset($_POST['genre']) && isset($_POST['poids']) && isset($_POST['taille']) && isset($_POST['gsang'])
    && isset($_POST['sommeil']) && isset($_POST['pathologie'])) {
    echo "<script>alert('true')</script>";

    $_SESSION['genre_nouveau'] = $_POST['genre'];
    $_SESSION['poids_nouveau'] = $_POST['poids'];
    $_SESSION['taille_nouveau'] = $_POST['taille'];
    $_SESSION['gsang_nouveau'] = $_POST['gsang'];
    $_SESSION['sommeil_nouveau'] = $_POST['sommeil'];
    $_SESSION['pathologie_nouveau'] = $_POST['pathologie'];

    include "../models/update_compte_utilisateur.php";
    include "../models/recup_infos_authentification_utilisateur.php";
    include "charger_session_utilisateur.php";

    unset($_SESSION['Prenom_nouveau']);
    unset($_SESSION['Nom_nouveau']);
    unset($_SESSION['dateNaissance_nouveau']);
    unset($_SESSION['numeroTel_nouveau']);
    unset($_SESSION['email_nouveau']);
    unset($_SESSION['type_emploi_nouveau']);
    if (isset($_SESSION['mot_de_passe_hache_nouveau'])) unset($_SESSION['mot_de_passe_hache_nouveau']);
    if (isset($_SESSION['nom_photo_profil_nouveau'])) unset($_SESSION['nom_photo_profil_nouveau']);
    unset($_SESSION['genre_nouveau']);
    unset($_SESSION['poids_nouveau']);
    unset($_SESSION['taille_nouveau']);
    unset($_SESSION['gsang_nouveau']);
    unset($_SESSION['sommeil_nouveau']);
    unset($_SESSION['pathologie_nouveau']);

    redirection("?etape=4");
}
