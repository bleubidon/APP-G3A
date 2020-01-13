<?php
include $_SERVER["DOCUMENT_ROOT"] . "/scripts/clean_user_input.php";

$formOK = true;
// Relatif au formulaire Profil utilisateur
$modif_mdp_authorise = true;
$Prenom_err = $Nom_err = $dateNaissance_err = $numeroTel_err = $email_err = $identifiant_err = $password_err = $validePassword_err = $emplois_err = "";
$Prenom = $Nom = $dateNaissance = $numeroTel = $email = $identifiant = $password = $validePassword = $emplois = "";
if (isset($modification_profil)) $password_ancien_err = $password_ancien = "";

// Relatif au formulaire Santé utilisateur
$genre_err = $poids_err = $taille_err = $gsang_err = $sommeil_err = $pathologie_err = "";
$genre = $poids = $taille = $gsang = $sommeil = $pathologie = "";
