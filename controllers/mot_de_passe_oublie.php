<?php
include('../views/mot_de_passe_oublie.php');

if (isset($_POST['Mail'])) {
    include('../models/recup_identifiant_utilisateur.php');
    if ($id_utilisateur != "") {
        // Géné lien et page récup mdp
        $alphabet_token = '0123456789abcdefghijklmnopqrstuvwxyz';
        $longueur_token = 10;
        $token= substr(str_shuffle($alphabet_token), 0, $longueur_token);
        include('../models/insertion_token.php');

        // Envoi lien par email

        // Notification de succès à l'utilisateur
//        header('location:?mail_ok');
    }
    else {
        header('location:?mail_inconnu');
    }
}
