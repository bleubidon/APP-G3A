<?php
include "../../models/connexion_bdd.php";

$test_passable = true;

$query = "SELECT id_capteurs FROM tests_psycho WHERE nom_test_psycho=:nom_test_psycho";
$sql = $bdd->prepare($query);
$sql->bindParam(':nom_test_psycho', $nom_test_verifier_passable);
$sql->execute();
$ids_capteurs_associes = $sql->fetch()["id_capteurs"];

$ids_capteurs_associes = explode(";", $ids_capteurs_associes);
// Il faut au moins un capteur associé
if (count($ids_capteurs_associes) < 2) $test_passable = false;

foreach ($ids_capteurs_associes as &$id_capteur_associe) {
    if ($id_capteur_associe != "") {
        $query = "SELECT statut_capteur FROM capteurs WHERE id_capteur=:id_capteur";
        $sql = $bdd->prepare($query);
        $sql->bindParam(':id_capteur', $id_capteur_associe);
        $sql->execute();
        $statut_capteur_associe = $sql->fetch()["statut_capteur"];
        if (!$statut_capteur_associe) {
            $test_passable = false;
            break;
        }
    }
}
