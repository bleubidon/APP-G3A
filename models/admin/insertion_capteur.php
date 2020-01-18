<?php
include "../../models/connexion_bdd.php";

// Vérifier que le nom est disponible
$nom_disponible = true;
$query = "SELECT id_capteur FROM capteurs WHERE nom_capteur=:nom_capteur_demande";
$sql = $bdd->prepare($query);
$sql->bindParam(':nom_capteur_demande', $nom_capteur);
$status = $sql->execute();
if ($sql->fetch() != null) $nom_disponible = false;

// Si c'est le cas, insérer le capteur
if ($nom_disponible) {
    $query = "INSERT INTO capteurs(nom_capteur, statut_capteur) VALUES(:nom_capteur, :statut_capteur)";
    $sql = $bdd->prepare($query);
    $sql->bindParam(':nom_capteur', $nom_capteur);
    $sql->bindParam(':statut_capteur', $statut_capteur);
    $status = $sql->execute();
}
