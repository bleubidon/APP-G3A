<?php
include "../../models/connexion_bdd.php";

// Vérifier que l'opération demandée laissera au moins un admin à l'issue:
$modification_statut_authorisee = true;

// L'utilisateur dont on voudrait changer le statut est-il actuellement un admin ?
$query = "SELECT statut FROM profil_utilisateur WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant', $_POST["identifiant"]);
$sql->execute();
$statut_courant = $sql->fetch()["statut"];

// Si oui, vérifier qu'il y a un autre admin
if ($statut_courant == "administrateur") {
    $query = "SELECT statut FROM profil_utilisateur WHERE identifiant != :identifiant AND statut = 'administrateur'";
    $sql = $bdd->prepare($query);
    $sql->bindParam(':identifiant', $_POST["identifiant"]);
    $sql->execute();
    if ($sql->fetch()['statut'] == null) $modification_statut_authorisee = false;
}
