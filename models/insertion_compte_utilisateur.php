<?php
include('connexion_bdd.php');

// Insertion du profil utilisateur
$mot_de_passe_hache = password_hash($_SESSION['password'], PASSWORD_ARGON2I);  // Hachage du mot de passe
$query = "INSERT INTO profil_utilisateur(identifiant, nom, prenom, date_de_naissance, telephone, email, photo, mot_de_passe, type_emploi)
            VALUES(:identifiant, :nom, :prenom, :date_de_naissance, :telephone, :email, :photo, :mot_de_passe, :type_emploi)";

$sql = $bdd->prepare($query);

$sql->bindParam(':identifiant', $_SESSION['identifiant']);
$sql->bindParam(':nom', $_SESSION['Nom']);
$sql->bindParam(':prenom', $_SESSION['Prenom']);
$sql->bindParam(':date_de_naissance', $_SESSION['dateNaissance']);
$sql->bindParam(':telephone', $_SESSION['numeroTel']);
$sql->bindParam(':email', $_SESSION['email']);
$sql->bindParam(':photo', $_SESSION['nom_photo_profil']);
$sql->bindParam(':mot_de_passe', $mot_de_passe_hache);
$sql->bindParam(':type_emploi', $_SESSION['emplois']);

$status = $sql->execute();

// Insertion des données de santé utilisateur
$query = "INSERT INTO sante_utilisateur(identifiant, genre, poids, taille, groupe_sanguin, sommeil_moyen, pathologie)
            VALUES(:identifiant, :genre, :poids, :taille, :groupe_sanguin, :sommeil_moyen, :pathologie)";

$sql = $bdd->prepare($query);

$sql->bindParam(':identifiant', $_SESSION['identifiant']);
$sql->bindParam(':genre', $_SESSION['genre']);
$sql->bindParam(':poids', $_SESSION['poids']);
$sql->bindParam(':taille', $_SESSION['taille']);
$sql->bindParam(':groupe_sanguin', $_SESSION['gsang']);
$sql->bindParam(':sommeil_moyen', $_SESSION['sommeil']);
$sql->bindParam(':pathologie', $_SESSION['pathologie']);

$status = $sql->execute();
