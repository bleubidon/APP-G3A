<?php
include "../../models/connexion_bdd.php";

// Profil utilisateur
$query = "DELETE FROM profil_utilisateur WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant', $_POST["identifiant"]);
$sql->execute();

// Sante utilisateur
$query = "DELETE FROM sante_utilisateur WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant', $_POST["identifiant"]);
$sql->execute();
