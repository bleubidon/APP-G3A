<?php
session_start();
// Vérifier que le 'client' est un administrateur
if (!isset($_SESSION['identifiant']) OR !isset($_SESSION['statut_utilisateur_site'])
    OR $_SESSION['statut_utilisateur_site'] != "administrateur") {
    $acces_authorise = false;
    echo "Pas le droit d'accéder";
}
else {  // L'utilisateur est un administrateur
    $acces_authorise = true;
}
