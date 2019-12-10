<?php
include "connexion_bdd.php";

// Profil utilisateur
$query = "SELECT date_de_naissance, email, type_emploi FROM profil_utilisateur WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant', $_SESSION['identifiant']);
$sql->execute();
$donnees = $sql->fetch();

$date_de_naissance = $donnees['date_de_naissance'];
$adresse_email = $donnees['email'];
$type_emploi = $donnees['type_emploi'];

// Santé utilisateur
$query = "SELECT genre, poids, taille, groupe_sanguin FROM sante_utilisateur WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant', $_SESSION['identifiant']);
$sql->execute();
$donnees = $sql->fetch();

$genre = $donnees['genre'];
$poids = $donnees['poids'];
$taille = $donnees['taille'];
$groupe_sanguin = $donnees['groupe_sanguin'];
