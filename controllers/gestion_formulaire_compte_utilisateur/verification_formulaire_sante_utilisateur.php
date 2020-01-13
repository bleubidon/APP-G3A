<?php
// Vérification formulaire: required et pattern
if (empty($_POST["genre"])) {
    $genre_err = "Ce champ est obligatoire";
    $formOK = false;
} else {
    $genre = clean_user_input($_POST['genre']);
    if (!preg_match("/^[-\w]+$/", $genre)) {
        $genre_err = "Veuillez respecter le format demandé";
        $formOK = false;
    }
}

if (empty($_POST["poids"])) {
    $poids_err = "Ce champ est obligatoire";
    $formOK = false;
} else {
    $poids = clean_user_input($_POST['poids']);
    if (!preg_match("/^[\d]+$/", $poids)) {
        $poids_err = "Veuillez respecter le format demandé";
        $formOK = false;
    }
}

if (empty($_POST["taille"])) {
    $taille_err = "Ce champ est obligatoire";
    $formOK = false;
} else {
    $taille = clean_user_input($_POST['taille']);
    if (!preg_match("/^[\d]+$/", $taille)) {
        $taille_err = "Veuillez respecter le format demandé";
        $formOK = false;
    }
}

if (empty($_POST["gsang"])) {
    $gsang_err = "Ce champ est obligatoire";
    $formOK = false;
} else {
    $gsang = clean_user_input($_POST['gsang']);
    if (!preg_match("/^[-+aboABO]+$/", $gsang)) {
        $gsang_err = "Veuillez respecter le format demandé";
        $formOK = false;
    }
}

if (empty($_POST["sommeil"])) {
    $sommeil_err = "Ce champ est obligatoire";
    $formOK = false;
} else {
    $sommeil = clean_user_input($_POST['sommeil']);
    if (!preg_match("/^[\d]+$/", $sommeil)) {
        $sommeil_err = "Veuillez respecter le format demandé";
        $formOK = false;
    }
}

$pathologie = clean_user_input($_POST["pathologie"]);
