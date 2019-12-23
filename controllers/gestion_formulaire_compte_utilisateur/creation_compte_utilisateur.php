<?php
session_start();
include $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";
include "header_gestion_formulaire_compte_utilisateur.php";

// Profil utilisateur
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Prenom"])) {
    include "verification_formulaire_profil_utilisateur.php";
    if ($formOK) {
        // Si une photo de profil a été renseignée dans le formulaire, la télécharger sur le serveur
        if (file_exists($_FILES['PhotoProfil']['tmp_name']) && is_uploaded_file($_FILES['PhotoProfil']['tmp_name'])) {  // Une photo a été envoyée par POST
            $nom_photo_profil = $_POST['identifiant'] . '_' . $_FILES['PhotoProfil']['name'];
            move_uploaded_file($_FILES['PhotoProfil']['tmp_name'], "../photos_profil/$nom_photo_profil");
        }

        $_SESSION['identifiant'] = $identifiant;
        $_SESSION['Prenom'] = $Prenom;
        $_SESSION['Nom'] = $Nom;
        $_SESSION['dateNaissance'] = $dateNaissance;
        $_SESSION['numeroTel'] = $numeroTel;
        $_SESSION['email'] = $email;
        if (isset($nom_photo_profil)) $_SESSION['nom_photo_profil'] = $nom_photo_profil;
        $_SESSION['mot_de_passe_hache'] = password_hash($password, PASSWORD_ARGON2I);  // Hachage du mot de passe
        $_SESSION['emplois'] = $emplois;

        redirection("?etape=2");
    }

} // Santé utilisateur
else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["poids"])) {
    include "verification_formulaire_sante_utilisateur.php";
    if ($formOK) {
        $_SESSION['genre'] = $genre;
        $_SESSION['poids'] = $poids;
        $_SESSION['taille'] = $taille;
        $_SESSION['gsang'] = $gsang;
        $_SESSION['sommeil'] = $sommeil;
        $_SESSION['pathologie'] = $pathologie;

        redirection("?etape=3");
    }
} // Enregistrer l'utilisateur dans la bdd
else if (isset($_GET['toutes_infos_collectees'])) {
    include $_SERVER["DOCUMENT_ROOT"] . "/models/insertion_compte_utilisateur.php";

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

    redirection("?etape=4");
}

// Chargement de la vue correspondant à l'étape du formulaire de création de compte (1, 2 ou 3)
if (isset($_GET['etape'])) {
    switch ($_GET['etape']) {
        case 2:
            include $_SERVER["DOCUMENT_ROOT"] . "/views/creaProfile/creaProfile2.php";
            break;
        case 3:
            include $_SERVER["DOCUMENT_ROOT"] . "/views/creaProfile/creaProfile3.php";
            break;
        case 4:
            include $_SERVER["DOCUMENT_ROOT"] . "/views/creaProfile/creaProfile4.php";
            break;
        default:
            include $_SERVER["DOCUMENT_ROOT"] . "/views/creaProfile/creaProfile1.php";
    }
} else {
    include $_SERVER["DOCUMENT_ROOT"] . "/views/creaProfile/creaProfile1.php";
}
