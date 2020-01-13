<?php
include "connexion_bdd.php";

// Profil utilisateur
// Certains des champs suivants sont en théorie déjà dans $_SESSION mais par sécurité on les re-charge depuis la BDD
$query = "SELECT prenom, nom, date_de_naissance, telephone, email, identifiant, type_emploi, photo FROM profil_utilisateur WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant', $_SESSION['identifiant']);
$sql->execute();
$donnees = $sql->fetch();

$prenom = $donnees['prenom'];
$nom = $donnees['nom'];
$date_de_naissance = $donnees['date_de_naissance'];
$telephone = $donnees['telephone'];
$adresse_email = $donnees['email'];
$identifiant = $donnees['identifiant'];
$type_emploi = $donnees['type_emploi'];
$nom_photo_profil = $donnees['photo'];

// Santé utilisateur
$query = "SELECT genre, poids, taille, groupe_sanguin, sommeil_moyen, pathologie FROM sante_utilisateur WHERE identifiant=:identifiant";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant', $_SESSION['identifiant']);
$sql->execute();
$donnees = $sql->fetch();

$genre = $donnees['genre'];
$poids = $donnees['poids'];
$taille = $donnees['taille'];
$groupe_sanguin = $donnees['groupe_sanguin'];
$sommeil_moyen = $donnees['sommeil_moyen'];
$pathologie = $donnees['pathologie'];
