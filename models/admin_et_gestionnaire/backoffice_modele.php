<?php
include "../../models/connexion_bdd.php";

// Il faut matcher le pattern de table défini dans la vue
$query = "SELECT p.identifiant, p.statut, p.nom, p.prenom, p.date_de_naissance, p.telephone, p.email, p.type_emploi,
                 s.genre, s.poids, s.taille, s.groupe_sanguin, s.sommeil_moyen, s.pathologie
                 FROM profil_utilisateur p INNER JOIN sante_utilisateur s
                 ON p.identifiant = s.identifiant";

if ($_POST["identifiant"] != "") $query .= " WHERE p.identifiant='" . $_POST["identifiant"] . "'";
if ($_POST["statut"] != "all") $query .= " WHERE p.statut='" .$_POST["statut"] . "'";
if ($_POST["nom"] != "") $query .= " WHERE p.nom='" .$_POST["nom"] . "'";
if ($_POST["prenom"] != "") $query .= " WHERE p.prenom='" .$_POST["prenom"] . "'";
if ($_POST["date_de_naissance"] != "") $query .= " WHERE p.date_de_naissance='" .$_POST["date_de_naissance"] . "'";
if ($_POST["telephone"] != "") $query .= " WHERE p.telephone='" .$_POST["telephone"] . "'";
if ($_POST["email"] != "") $query .= " WHERE p.email='" .$_POST["email"] . "'";
if ($_POST["emploi"] != "") $query .= " WHERE p.type_emploi='" .$_POST["emploi"] . "'";
if ($_POST["genre"] != "") $query .= " WHERE s.genre='" .$_POST["genre"] . "'";
if ($_POST["poids"] != "") $query .= " WHERE s.poids='" .$_POST["poids"] . "'";
if ($_POST["taille"] != "") $query .= " WHERE s.taille='" .$_POST["taille"] . "'";
if ($_POST["groupe_sanguin"] != "") $query .= " WHERE s.groupe_sanguin='" .$_POST["groupe_sanguin"] . "'";
if ($_POST["sommeil_moyen"] != "") $query .= " WHERE s.sommeil_moyen='" .$_POST["sommeil_moyen"] . "'";
if ($_POST["pathologie"] != "") $query .= " WHERE s.pathologie='" .$_POST["pathologie"] . "'";

$sql = $bdd->prepare($query);
$sql->execute();
$liste_donnees_utilisateurs = $sql->fetchall(\PDO::FETCH_ASSOC);
