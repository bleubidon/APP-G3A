<?php
include "connexion_bdd.php";
// Vérification de la validité de l'identifiant
$query = "SELECT identifiant FROM profil_utilisateur WHERE identifiant=:identifiant_renseigne";
$sql = $bdd->prepare($query);
if (isset($_POST["ajax"])) $sql->bindParam(':identifiant_renseigne', $_POST['identifiant']);
else $sql->bindParam(':identifiant_renseigne', $identifiant);
$sql->execute();
$identifiant_indicateur = $sql->fetch()['identifiant'];
if (isset($_POST["ajax"])) echo $identifiant_indicateur == null;  // Pour la vérification du formulaire coté client
