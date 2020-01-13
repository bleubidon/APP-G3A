<?php
include "connexion_bdd.php";
// Vérification de la validité de l'adresse email renseignée
$query = "SELECT identifiant, prenom, nom FROM profil_utilisateur WHERE email=:mail";
$sql = $bdd->prepare($query);
$sql->bindParam(':mail', $_POST['Mail']);
$sql->execute();
$donnees = $sql->fetch();
$id_utilisateur = $donnees['identifiant'];
$prenom_utilisateur = $donnees['prenom'];
$nom_utilisateur = $donnees['nom'];
