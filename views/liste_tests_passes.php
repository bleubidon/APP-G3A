<div id="liste_tests_passes">
    <?php
    $nombre_entrees_historique = count($historique);
    // Si l'historique des tests est vide
    if ($nombre_entrees_historique == 0) {
        echo "<p style='font-size: larger'>Vous n'avez passé aucun test</p>";
    } else { ?>
        <?php
        // Génération de la structure de la page
        for ($i = 0; $i < $nombre_entrees_historique; $i++) {
            $entree_historique = $historique[$i];
            $id = "chartContainer_$i";
            echo "<p>" . $entree_historique["nom_test"] . " (" . $entree_historique["date_test"] . ")</p>\n";
            echo "<div class='chartContainer' id=$id></div>";
            // Génération du graphique
            echo "<script>render_chart('$id', '" . $entree_historique["contenu_test"] . "')</script>\n\n";
            echo "<br><br><br><br><br>";
        }
        ?>
    <?php } ?>
</div>
