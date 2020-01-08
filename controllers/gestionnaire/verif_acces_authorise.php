<?php
session_start();
// Vérifier que le 'client' est un gestionnaire
if (!isset($_SESSION['identifiant']) OR !isset($_SESSION['statut_utilisateur_site'])
    OR $_SESSION['statut_utilisateur_site'] != "gestionnaire") {
    $acces_authorise = false;
    echo "Pas le droit d'accéder";
}
else {  // L'utilisateur est un gestionnaire
    $acces_authorise = true;
}
