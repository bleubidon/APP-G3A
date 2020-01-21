<?php
include "verif_acces_authorise.php";
if ($acces_authorise) {
    // Récupérer la liste des tests psycho associés au type d'emploi de l'utilisateur renseigné
    $nom_test_verifier_passable = $_GET["test"];
    include "../../models/gestionnaire/verif_validite_test_passable.php";
    if ($test_passable) include "../../views/gestionnaire/affichage_test_en_cours.php";
    else echo "Il n'est pas possible de passer ce test";
}
