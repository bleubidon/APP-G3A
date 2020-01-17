<?php
include "../../models/connexion_bdd.php";

// Récupérer le id_capteurs actuel
$query = "SELECT id_capteurs FROM tests_psycho WHERE nom_test_psycho=:nom_test";
$sql = $bdd->prepare($query);
$sql->bindParam(':nom_test', $_POST["nom_test"]);
$sql->execute();
$id_capteurs = $sql->fetch()['id_capteurs'];

// Le mettre à jour en fonction de id_capteur et nouveau_statut
$id_capteurs = explode(";", $id_capteurs);

if (in_array($_POST["id_capteur"], $id_capteurs)) {
    if ($_POST["nouveau_statut"] == "false") {  // S'il faut détacher ce capteur du test
        // On supprime le capteur de id_capteurs
        if (($key = array_search($_POST["id_capteur"], $id_capteurs)) !== false) {
            unset($id_capteurs[$key]);
        }
    }
} // S'il faut attacher ce capteur au test
else if ($_POST["nouveau_statut"] == "true") {
    array_push($id_capteurs, $_POST["id_capteur"]);
}

$id_capteurs = implode(";", array_values($id_capteurs));

// Màj de la bdd
$query = "UPDATE tests_psycho SET id_capteurs=:id_capteurs WHERE nom_test_psycho=:nom_test";
$sql = $bdd->prepare($query);
$sql->bindParam(':id_capteurs', $id_capteurs);
$sql->bindParam(':nom_test', $_POST["nom_test"]);
$sql->execute();
