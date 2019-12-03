<?php
include('connexion_bdd.php');
// Vérification de la validité de l'adresse email renseignée
$query = "SELECT id, prénom, nom FROM client WHERE Adresse_mail=:mail";
$sql = $bdd->prepare($query);
$sql->bindParam(':mail', $_POST['Mail']);
$sql->execute();
$donnees = $sql->fetch();
$id_utilisateur = $donnees['id'];
$prenom_utilisateur = $donnees['prénom'];
$nom_utilisateur = $donnees['nom'];
