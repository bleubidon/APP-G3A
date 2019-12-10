<?php
include "connexion_bdd.php";

// Modification du profil utilisateur
$query = "UPDATE profil_utilisateur SET nom=:nom, prenom=:prenom, date_de_naissance=:date_de_naissance,
        telephone=:telephone, email=:email, photo=:photo, type_emploi=:type_emploi";
if (isset($_SESSION['mot_de_passe_hache_nouveau'])) $query .= ", mot_de_passe=:mot_de_passe";
$query .= " WHERE identifiant=:identifiant";

$sql = $bdd->prepare($query);

$sql->bindParam(':nom', $_SESSION['Nom_nouveau']);
$sql->bindParam(':prenom', $_SESSION['Prenom_nouveau']);
$sql->bindParam(':date_de_naissance', $_SESSION['dateNaissance_nouveau']);
$sql->bindParam(':telephone', $_SESSION['numeroTel_nouveau']);
$sql->bindParam(':email', $_SESSION['email_nouveau']);
$sql->bindParam(':photo', $_SESSION['nom_photo_profil_nouveau']);
if (isset($_SESSION['mot_de_passe_hache_nouveau'])) $sql->bindParam(':mot_de_passe', $_SESSION['mot_de_passe_hache_nouveau']);
$sql->bindParam(':type_emploi', $_SESSION['type_emploi_nouveau']);
$sql->bindParam(':identifiant', $_SESSION['identifiant']);

$status = $sql->execute();

// Modification des données de santé utilisateur
$query = "UPDATE sante_utilisateur SET genre=:genre, poids=:poids, taille=:taille, groupe_sanguin=:groupe_sanguin,
        sommeil_moyen=:sommeil_moyen, pathologie=:pathologie WHERE identifiant=:identifiant";

$sql = $bdd->prepare($query);

$sql->bindParam(':genre', $_SESSION['genre_nouveau']);
$sql->bindParam(':poids', $_SESSION['poids_nouveau']);
$sql->bindParam(':taille', $_SESSION['taille_nouveau']);
$sql->bindParam(':groupe_sanguin', $_SESSION['gsang_nouveau']);
$sql->bindParam(':sommeil_moyen', $_SESSION['sommeil_nouveau']);
$sql->bindParam(':pathologie', $_SESSION['pathologie_nouveau']);
$sql->bindParam(':identifiant', $_SESSION['identifiant']);

$status = $sql->execute();
