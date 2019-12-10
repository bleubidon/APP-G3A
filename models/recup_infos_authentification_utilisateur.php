<?php
include "connexion_bdd.php";
// Vérification de la validité du mot de passe
$query = "SELECT mot_de_passe, prenom, nom, statut, photo FROM profil_utilisateur WHERE identifiant=:nom";
$sql = $bdd->prepare($query);
$sql->bindParam(':nom', $_SESSION['identifiant']);
$sql->execute();
$donnees = $sql->fetch();
$mot_de_passe_hache = $donnees['mot_de_passe'];
$prenom = $donnees['prenom'];
$nom = $donnees['nom'];
$statut_utilisateur_site = $donnees['statut'];
$nom_photo_profil = $donnees['photo'];
