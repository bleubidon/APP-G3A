<?php
session_start();
// Vérifier que le client est un administrateur
if (!isset($_SESSION['identifiant']) OR !isset($_SESSION['statut_utilisateur_site'])
    OR !in_array($_SESSION['statut_utilisateur_site'], array("gestionnaire", "administrateur"))) {
    echo "Pas le droit d'accéder";
}
else {  // L'utilisateur est un administrateur___
    echo "Bienvenue dans le backoffice";
}
?>
<br>
<a href="/index.php">Retour</a>
