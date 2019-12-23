<?php
// Vérification formulaire: required et pattern
if (empty($_POST["Prenom"])) {
    $Prenom_err = "Ce champ est obligatoire";
    $formOK = false;
} else {
    $Prenom = clean_user_input($_POST['Prenom']);
    if (!preg_match("/^[-\w]+$/", $Prenom)) {
        $Prenom_err = "Veuillez respecter le format demandé";
        $formOK = false;
    }
}

if (empty($_POST["Nom"])) {
    $Nom_err = "Ce champ est obligatoire";
    $formOK = false;
} else {
    $Nom = clean_user_input($_POST['Nom']);
    if (!preg_match("/^[-\w]+$/", $Nom)) {
        $Nom_err = "Veuillez respecter le format demandé";
        $formOK = false;
    }
}

if (empty($_POST["dateNaissance"])) {
    $dateNaissance_err = "Ce champ est obligatoire";
    $formOK = false;
} else {
    $dateNaissance = clean_user_input($_POST['dateNaissance']);
    if (!preg_match("/^\d{4}-[01]\d-[0-3]\d$/", $dateNaissance)) {
        $dateNaissance_err = "Veuillez respecter le format demandé";
        $formOK = false;
    }
}

if (empty($_POST["numeroTel"])) {
    $numeroTel_err = "Ce champ est obligatoire";
    $formOK = false;
} else {
    $numeroTel = clean_user_input($_POST['numeroTel']);
    if (!preg_match("/^0\d{9}$/", $numeroTel)) {
        $numeroTel_err = "Veuillez respecter le format demandé";
        $formOK = false;
    }
}

if (empty($_POST["email"])) {
    $email_err = "Ce champ est obligatoire";
    $formOK = false;
} else {
    $email = clean_user_input($_POST['email']);
    if (!preg_match("/^[-.\w]+@[-.\w]+.[a-zA-Z]+$/", $email)) {
        $email_err = "Veuillez respecter le format demandé";
        $formOK = false;
    }
}

if (!isset($modification_profil)) {
    if (empty($_POST["identifiant"])) {
        $identifiant_err = "Ce champ est obligatoire";
        $formOK = false;
    } else {
        $identifiant = clean_user_input($_POST['identifiant']);
        if (!preg_match("/^[a-zA-Z\d]+$/", $identifiant)) {
            $identifiant_err = "Veuillez respecter le format demandé";
            $formOK = false;
        }
    }
}

if (isset($modification_profil)) $password_ancien = clean_user_input($_POST["password_ancien"]);

if (!isset($modification_profil) || !empty($password_ancien)) {
    if (empty($_POST["password"])) {
        $password_err = "Ce champ est obligatoire";
        $formOK = false;
    } else {
        $password = clean_user_input($_POST['password']);
        if (!preg_match("/^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*\d))|((?=.*[A-Z])(?=.*\d)))(?=.{8,})/", $password)) {
            $password_err = "Veuillez respecter le format demandé";
            $formOK = false;
        }
    }

    if (empty($_POST["validePassword"])) {
        $validePassword_err = "Ce champ est obligatoire";
        $formOK = false;
    } else {
        $validePassword = clean_user_input($_POST['validePassword']);
    }
} else {
    $password = clean_user_input($_POST['password']);
    $validePassword = clean_user_input($_POST['validePassword']);
}

if (empty($_POST["emplois"])) {
    $emplois_err = "Ce champ est obligatoire";
    $formOK = false;
} else {
    $emplois = clean_user_input($_POST['emplois']);
}

if (!isset($modification_profil) || !empty($password_ancien)) {
    // Vérification formulaire: vérifier que le mot de passe renseigné est identique à sa confirmation
    if ($password != $validePassword) {
        $validePassword_err = "La confirmation du mot de passe ne correspond pas au mot de passe";
        $modif_mdp_authorise = false;
        $formOK = false;
    }
}

if (!isset($modification_profil)) {
// Vérification formulaire: vérifier que l'identifiant renseigné n'est pas déjà pris
    include $_SERVER["DOCUMENT_ROOT"] . "/models/verif_disponibilite_identifiant.php";
    if ($identifiant_indicateur != null) {
        $identifiant_err = "Identifiant indisponible";  // L'identifiant renseigné est déjà pris
        $formOK = false;
    }
}

if (isset($modification_profil)) {
    // Si modification du mdp demandée
    if (!empty($password_ancien) && !empty($password) && !empty($validePassword)) {
        include $_SERVER["DOCUMENT_ROOT"] . "/models/recup_mdp_utilisateur.php";
        if (!$mot_de_passe_hache || !password_verify($password_ancien, $mot_de_passe_hache)) {
            $password_ancien_err = "Mot de passe incorrect";
            $modif_mdp_authorise = false;
            $formOK = false;
        }
    }

    if (empty($password_ancien) && !empty($password) && !empty($validePassword)) {
        $password_ancien_err = "Ce champ est obligatoire";
        $formOK = false;
    }
}
