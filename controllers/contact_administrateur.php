<?php
include "../views/contact_administrateur.php";

if (isset($_POST['nom_prenom']) && isset($_POST['mail']) && isset($_POST['message'])) {
    // Envoi du message à un administrateur (le premier qu'on trouve dans la bdd)
    require "Email.php";
    include "../models/recup_adresse_mail_administrateur.php";
    $adresse_email_destinataire = $adresse_email_administrateur;
    $sujet = $_POST['nom_prenom'] . " vous a envoyé un message sur Captest";
    $message = "<p>Bonjour, " . $_POST['nom_prenom'] . " vous a envoyé le message suivant sur Captest:<br><br>\""
        . $_POST['message'] . "\"</p>";

    $email_message_admin = new Email($adresse_email_destinataire, $sujet, $message, $_POST['mail']);
    $email_message_admin->envoyerEmail();

    // Notification de succès à l'utilisateur
    redirection("?email_envoye");
}
