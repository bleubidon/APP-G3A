<?php
include "../views/reinitialisation_mot_de_passe.php";
$duree_de_vie_token = 600;  // en secondes

if (isset($_GET['token']) && isset($_POST['password'])) {
    $token = $_GET['token'];
    include "../models/recup_infos_token_reinit_mdp.php";
    // Vérifier que le token est valide et non expiré
    $timestamp = new DateTime();
    $timestamp = $timestamp->getTimestamp();
    if ($timestamp - $timestamp_creation_token <= $duree_de_vie_token) {
        // Réinitialiser le mot de passe de l'utilisateur concerné
        include "../models/update_mot_de_passe_utilisateur.php";
    }
    redirection("?fini");
}
