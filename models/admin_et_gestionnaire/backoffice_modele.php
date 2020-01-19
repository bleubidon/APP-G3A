<?php
include "../../models/connexion_bdd.php";

// Il faut matcher le pattern de table défini dans la vue
$query = "SELECT p.identifiant, p.statut, p.nom, p.prenom, p.date_de_naissance, p.telephone, p.email, p.type_emploi,
                 s.genre, s.poids, s.taille, s.groupe_sanguin, s.sommeil_moyen, s.pathologie
                 FROM profil_utilisateur p INNER JOIN sante_utilisateur s
                 ON p.identifiant = s.identifiant";

if ($_POST["identifiant"] != "") $query .= " WHERE p.identifiant LIKE '%" . $_POST["identifiant"] . "%'";
if ($_POST["statut"] != "all") $query .= " AND p.statut LIKE '%" .$_POST["statut"] . "%'";
if ($_POST["nom"] != "") $query .= " AND p.nom LIKE '%" .$_POST["nom"] . "%'";
if ($_POST["prenom"] != "") $query .= " AND p.prenom LIKE '%" .$_POST["prenom"] . "%'";
if ($_POST["date_de_naissance"] != "") $query .= " AND p.date_de_naissance LIKE '%" .$_POST["date_de_naissance"] . "%'";
if ($_POST["telephone"] != "") $query .= " AND p.telephone LIKE '%" .$_POST["telephone"] . "%'";
if ($_POST["email"] != "") $query .= " AND p.email LIKE '%" .$_POST["email"] . "%'";
if ($_POST["emploi"] != "") $query .= " AND p.type_emploi LIKE '%" .$_POST["emploi"] . "%'";
if ($_POST["genre"] != "") $query .= " AND s.genre LIKE '%" .$_POST["genre"] . "%'";
if ($_POST["poids"] != "") $query .= " AND s.poids LIKE '%" .$_POST["poids"] . "%'";
if ($_POST["taille"] != "") $query .= " AND s.taille LIKE '%" .$_POST["taille"] . "%'";
if ($_POST["groupe_sanguin"] != "") $query .= " AND s.groupe_sanguin LIKE '%" .$_POST["groupe_sanguin"] . "%'";
if ($_POST["sommeil_moyen"] != "") $query .= " AND s.sommeil_moyen LIKE '%" .$_POST["sommeil_moyen"] . "%'";
if ($_POST["pathologie"] != "") $query .= " AND s.pathologie LIKE '%" .$_POST["pathologie"] . "%'";

$sql = $bdd->prepare($query);
$sql->execute();
$liste_donnees_utilisateurs = $sql->fetchall(\PDO::FETCH_ASSOC);
