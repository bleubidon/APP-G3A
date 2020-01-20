<?php
include "connexion_bdd.php";
// Récupération des données d'historique d'un utilisateur
$query = "SELECT nom_test, contenu_test, date_test FROM tests_passes WHERE id_utilisateur=:id_utilisateur";
$sql = $bdd->prepare($query);
if (isset($_POST["identifiant"])) $sql->bindParam(':id_utilisateur', $_POST["identifiant"]);
else $sql->bindParam(':id_utilisateur', $identifiant);
$sql->execute();
$historique = $sql->fetchall(\PDO::FETCH_ASSOC);
if (isset($_POST["identifiant"])) echo json_encode($historique);
