<?php
include "../../models/connexion_bdd.php";

// Vérifier que la modification de statut d'utilisateur demandée laissera au moins un admin à l'issue:
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

// Si authorisé, procéder à la modification de statut de l'utilisateur
if ($modification_statut_authorisee) {
    $query = "UPDATE profil_utilisateur SET statut=:nouveau_statut WHERE identifiant=:identifiant";
    $sql = $bdd->prepare($query);
    $sql->bindParam(':nouveau_statut', $_POST["nouveau_statut"]);
    $sql->bindParam(':identifiant', $_POST["identifiant"]);
    $sql->execute();
} else {
    echo "modification_statut_refusee";
}
