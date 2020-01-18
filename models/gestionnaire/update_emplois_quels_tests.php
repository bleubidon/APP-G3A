<?php
include "../../models/connexion_bdd.php";

// Récupérer le id_tests_psycho actuel
$query = "SELECT id_tests_psycho FROM emplois_quels_tests WHERE nom_emploi=:nom_emploi";
$sql = $bdd->prepare($query);
$sql->bindParam(':nom_emploi', $_POST["nom_emploi"]);
$sql->execute();
$id_tests_psycho = $sql->fetch()['id_tests_psycho'];

// Le mettre à jour en fonction de id_test_psycho et nouveau_statut
$id_tests_psycho = explode(";", $id_tests_psycho);

if (in_array($_POST["id_test_psycho"], $id_tests_psycho)) {
    if ($_POST["nouveau_statut"] == "false") {  // S'il faut détacher ce test psycho de l'emploi
        // On supprime le test psycho de id_tests_psycho
        if (($key = array_search($_POST["id_test_psycho"], $id_tests_psycho)) !== false) {
            unset($id_tests_psycho[$key]);
        }
    }
} // S'il faut attacher ce test psycho à l'emploi
else if ($_POST["nouveau_statut"] == "true") {
    array_push($id_tests_psycho, $_POST["id_test_psycho"]);
}

$id_tests_psycho = implode(";", array_values($id_tests_psycho));

// Màj de la bdd
$query = "UPDATE emplois_quels_tests SET id_tests_psycho=:id_tests_psycho WHERE nom_emploi=:nom_emploi";
$sql = $bdd->prepare($query);
$sql->bindParam(':id_tests_psycho', $id_tests_psycho);
$sql->bindParam(':nom_emploi', $_POST["nom_emploi"]);
$sql->execute();
