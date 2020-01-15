<?php
include "connexion_bdd.php";
// Vérification de la validité de l'adresse email
$query = "SELECT email FROM profil_utilisateur WHERE email=:email_renseigne";
$sql = $bdd->prepare($query);
if (isset($_POST["ajax"])) $sql->bindParam(':email_renseigne', $_POST["email"]);
else $sql->bindParam(':email_renseigne', $email);
$sql->execute();
$adresse_email_indicateur = $sql->fetch()['email'];
if (isset($_POST["ajax"])) echo $adresse_email_indicateur == null;  // Pour la vérification du formulaire coté client
