<?php
include "../../models/connexion_bdd.php";

// Insertion du profil utilisateur
$query = "INSERT INTO profil_utilisateur(identifiant, statut, nom, prenom, date_de_naissance, telephone, email, mot_de_passe, type_emploi)
            VALUES(:identifiant, :statut, :nom, :prenom, :date_de_naissance, :telephone, :email, :mot_de_passe, :type_emploi)";

$sql = $bdd->prepare($query);

$sql->bindParam(':identifiant', $identifiant);
$sql->bindParam(':statut', $statut);
$sql->bindParam(':nom', $nom);
$sql->bindParam(':prenom', $prenom);
$sql->bindParam(':date_de_naissance', $date_de_naissance);
$sql->bindParam(':telephone', $telephone);
$sql->bindParam(':email', $email);
$sql->bindParam(':mot_de_passe', $mot_de_passe_hache);
$sql->bindParam(':type_emploi', $emploi);

$status = $sql->execute();

// Insertion des données de santé utilisateur
$query = "INSERT INTO sante_utilisateur(identifiant, genre, poids, taille, groupe_sanguin, sommeil_moyen, pathologie)
            VALUES(:identifiant, :genre, :poids, :taille, :groupe_sanguin, :sommeil_moyen, :pathologie)";

$sql = $bdd->prepare($query);

$sql->bindParam(':identifiant', $identifiant);
$sql->bindParam(':genre', $genre);
$sql->bindParam(':poids', $poids);
$sql->bindParam(':taille', $taille);
$sql->bindParam(':groupe_sanguin', $groupe_sanguin);
$sql->bindParam(':sommeil_moyen', $sommeil_moyen);
$sql->bindParam(':pathologie', $pathologie);

$status = $sql->execute();
