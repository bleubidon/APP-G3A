<?php
include "../../models/connexion_bdd.php";

// Vérifier que la modification de statut d'utilisateur demandée laissera au moins un admin à l'issue
include "verif_toujours_au_moins_un_admin.php";

// Si authorisé, procéder à la modification de statut de l'utilisateur
if ($modification_statut_authorisee) {
    $query = "UPDATE profil_utilisateur SET statut=:nouveau_statut WHERE identifiant=:identifiant";
    $sql = $bdd->prepare($query);
    $sql->bindParam(':nouveau_statut', $_POST["nouveau_statut"]);
    $sql->bindParam(':identifiant', $_POST["identifiant"]);
    $sql->execute();
} else {
    echo "modification_statut_refusee";
}
