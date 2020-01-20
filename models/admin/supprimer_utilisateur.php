<?php
include "../../models/connexion_bdd.php";

// Vérifier que la suppression d'utilisateur demandée laissera au moins un admin à l'issue
include "verif_toujours_au_moins_un_admin.php";

// Si authorisé, procéder à la modification de statut de l'utilisateur
if ($modification_statut_authorisee) {
// Profil utilisateur
    $query = "DELETE FROM profil_utilisateur WHERE identifiant=:identifiant";
    $sql = $bdd->prepare($query);
    $sql->bindParam(':identifiant', $_POST["identifiant"]);
    $sql->execute();

// Sante utilisateur
    $query = "DELETE FROM sante_utilisateur WHERE identifiant=:identifiant";
    $sql = $bdd->prepare($query);
    $sql->bindParam(':identifiant', $_POST["identifiant"]);
    $sql->execute();
} else {
    echo "modification_statut_refusee";
}
