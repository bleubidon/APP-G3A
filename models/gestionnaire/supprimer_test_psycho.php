<?php
include "../../models/connexion_bdd.php";

$query = "DELETE FROM tests_psycho WHERE nom_test_psycho=:nom_test_psycho";
$sql = $bdd->prepare($query);
$sql->bindParam(':nom_test_psycho', $_POST["nom_test_psycho"]);
$sql->execute();
