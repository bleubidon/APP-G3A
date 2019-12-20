<?php
include "connexion_bdd.php";
// Vérification de la validité de l'identifiant
$query = "SELECT identifiant FROM profil_utilisateur WHERE identifiant=:identifiant_renseigne";
$sql = $bdd->prepare($query);
$sql->bindParam(':identifiant_renseigne', $_POST['identifiant']);
$sql->execute();
$identifiant_indicateur = $sql->fetch()['identifiant'];
if (isset($_POST["verbose"])) echo $identifiant_indicateur == null;  // Pour la vérification du formulaire cîté client
