<?php
include('connexion_bdd.php');
// Vérification de la validité de l'adresse email renseignée
$query = "SELECT id FROM client WHERE Adresse_mail=:mail";
$sql = $bdd->prepare($query);
$sql->bindParam(':mail', $_POST['Mail']);
$sql->execute();
$id_utilisateur = $sql->fetch()['id'];
