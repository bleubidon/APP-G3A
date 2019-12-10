<?php
include "connexion_bdd.php";
// Vérification de la validité du mot de passe
$query = "SELECT email FROM profil_utilisateur WHERE statut='administrateur'";
$sql = $bdd->prepare($query);
$sql->execute();
$adresse_email_administrateur = $sql->fetch()['email'];
