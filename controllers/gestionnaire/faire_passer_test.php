<?php
include "verif_acces_authorise.php";
if ($acces_authorise) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération du type d'emploi de l'utilisateur
        $idUtilisateur = $_POST["idUtilisateur"];
        include "../../models/gestionnaire/recup_emploi_utilisateur.php";
        if ($emploi == null) header("location: ?identifiant_inconnu");
        // Récupérer la liste des tests psycho associés au type d'emploi de l'utilisateur renseigné
        include "../../models/gestionnaire/recup_tests_psycho_pour_emploi.php";

        // Vue étape 2: faire effectivement passer le test
        include "../../views/gestionnaire/test_a_passer_passer_test.php";

    } // Vue étape 1: choisir utilisateur à qui faire passer un test
    else include "../../views/gestionnaire/test_a_passer_choix_utilisateur.php";
}
