<?php
include "../../models/connexion_bdd.php";

// Vérifier que le nom est disponible
$nom_disponible = true;
$query = "SELECT id_test_psycho FROM tests_psycho WHERE nom_test_psycho=:nom_test_psycho";
$sql = $bdd->prepare($query);
$sql->bindParam(':nom_test_psycho', $nouveau_test);
$status = $sql->execute();
if ($sql->fetch() != null) $nom_disponible = false;

// Si c'est le cas, insérer le capteur
if ($nom_disponible) {
    echo "TRUE";
    $query = "INSERT INTO tests_psycho(nom_test_psycho, id_capteurs) VALUES(:nom_test_psycho, '')";
    $sql = $bdd->prepare($query);
    $sql->bindParam(':nom_test_psycho', $nouveau_test);
    $status = $sql->execute();
}
