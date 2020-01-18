<?php
session_start();
include $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";
$modification_profil = true;  // Influe sur la vue incluse plus tard

include "header_gestion_formulaire_compte_utilisateur.php";
include $_SERVER["DOCUMENT_ROOT"] . "/models/recup_infos_utilisateur_modif_compte.php";

// Profil utilisateur
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Prenom"])) {
    include "verification_formulaire_profil_utilisateur.php";
    if ($formOK) {
        $_SESSION['Prenom_nouveau'] = $Prenom;
        $_SESSION['Nom_nouveau'] = $Nom;
        $_SESSION['dateNaissance_nouveau'] = $dateNaissance;
        $_SESSION['numeroTel_nouveau'] = $numeroTel;
        $_SESSION['email_nouveau'] = $email;
        $_SESSION['type_emploi_nouveau'] = $emplois;

        // Si modification du mdp authorisée
        if ($modif_mdp_authorise) $_SESSION['mot_de_passe_hache_nouveau'] = password_hash($password, PASSWORD_ARGON2I);

        // Si une photo de profil a été renseignée dans le formulaire, la télécharger sur le serveur
        $photo_profil_path_prefix = "../photos_profil/";
        if (file_exists($_FILES['PhotoProfil']['tmp_name']) && is_uploaded_file($_FILES['PhotoProfil']['tmp_name'])) {  // Une photo a été envoyée par POST
            $_SESSION['do_photo_profil_update'] = true;
            $nom_photo_profil = $_SESSION['identifiant'] . '_' . $_FILES['PhotoProfil']['name'];
            $old_photo_profil = $_SERVER['DOCUMENT_ROOT'] . "/photos_profil/" . $_SESSION['nom_photo_profil'];
            if (file_exists($old_photo_profil)) {
                unlink($old_photo_profil);  // Supprimer l'ancienne photo de profil s'il y en a une
            }
            move_uploaded_file($_FILES['PhotoProfil']['tmp_name'], "../" . $photo_profil_path_prefix . $nom_photo_profil);
            $_SESSION['nom_photo_profil_nouveau'] = $nom_photo_profil;
        } else {$_SESSION['do_photo_profil_update'] = false;}

        redirection("?etape=2");
    }
} // Santé utilisateur
else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["poids"])) {
    include "verification_formulaire_sante_utilisateur.php";
    if ($formOK) {
        $_SESSION['genre_nouveau'] = $_POST['genre'];
        $_SESSION['poids_nouveau'] = $_POST['poids'];
        $_SESSION['taille_nouveau'] = $_POST['taille'];
        $_SESSION['gsang_nouveau'] = $_POST['gsang'];
        $_SESSION['sommeil_nouveau'] = $_POST['sommeil'];
        $_SESSION['pathologie_nouveau'] = $_POST['pathologie'];

        include $_SERVER["DOCUMENT_ROOT"] . "/models/update_compte_utilisateur.php";
        include $_SERVER["DOCUMENT_ROOT"] . "/models/recup_infos_authentification_utilisateur.php";
        include $_SERVER["DOCUMENT_ROOT"] . "/controllers/charger_session_utilisateur.php";

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
}

// Chargement de la vue correspondant à l'étape du formulaire de modification de compte (1, 2 ou 4)
if (isset($_GET['etape'])) {
    switch ($_GET['etape']) {
        case 2:
            include $_SERVER["DOCUMENT_ROOT"] . "/views/creaProfile/creaProfile2.php";
            break;
        case 4:
            include $_SERVER["DOCUMENT_ROOT"] . "/views/creaProfile/creaProfile4.php";
            break;
        default:
            include $_SERVER["DOCUMENT_ROOT"] . "/views/creaProfile/creaProfile1.php";
    }
} else {
    $retour = "../page_principale_utilisateur.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/views/creaProfile/creaProfile1.php";
}
