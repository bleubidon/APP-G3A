<?php
session_start();
// Vérifier que le client est un administrateur
if (!isset($_SESSION['identifiant']) OR !isset($_SESSION['statut']) OR !in_array($_SESSION['statut'], array("gestionnaire", "administrateur"))) {
    echo "";
}
else {  // L'utilisateur est un administrateur___

}
