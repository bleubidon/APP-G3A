<?php
include "../views/mot_de_passe_oublie.php";

if (isset($_POST['Mail'])) {
    include "../models/recup_infos_utilisateur_mdp_oublie.php";
    if ($id_utilisateur != null) {  // L'adresse mail renseignée correspond à un utilisateur
        // Géné token et page de récupération de mot de passe
        $token_genere_valide = false;
        while (!$token_genere_valide) {
            $alphabet_token = '0123456789abcdefghijklmnopqrstuvwxyz';
            $longueur_token = 10;
            $token = substr(str_shuffle($alphabet_token), 0, $longueur_token);
            $timestamp_creation_token = new DateTime();
            $timestamp_creation_token = $timestamp_creation_token->getTimestamp();
            include "../models/insertion_token_reinit_mdp.php";
            if ($status) $token_genere_valide = true;  // Le token généré n'est pas déjà utilisé
        }

        // Envoi du lien de réinitialisation de mot de passe par email
        require "Email.php";
        $adresse_email_destinataire = $_POST['Mail'];
        $sujet = "$prenom_utilisateur $nom_utilisateur, réinitialisez votre mot de passe sur Captest !";
        $lien_reinit_mdp = "http://localhost/controllers/reinitialisation_mot_de_passe.php?token=$token";
        $message = "<p>Bonjour $prenom_utilisateur $nom_utilisateur, veuillez cliquer sur le lien ci-dessous pour
        réinitialiser votre mot de passe sur Captest:<br>
            <a href='$lien_reinit_mdp'>$lien_reinit_mdp</a>";

        $email_reinit_mdp = new Email($adresse_email_destinataire, $sujet, $message);
        $email_reinit_mdp->envoyerEmail();

        // Notification de succès à l'utilisateur
        redirection("?mail_ok");
    } else {
        redirection("?mail_inconnu");
    }
}
