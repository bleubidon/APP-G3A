<?php
include "connexion_bdd.php";
// Vérifier si l'utilisateur est banni
$query = "SELECT statut FROM profil_utilisateur WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant', $identifiant_propose);
$sql->execute();
$donnees = $sql->fetch();
$banni = $donnees['statut'] == "banni";
