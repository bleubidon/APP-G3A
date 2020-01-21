<?php
include "../../views/header.php"
?>
<body>
<?php
include "../../views/Mise_en_page.php";
?>

<div id="section_centrale">
    <h1> Tests à passer: </h1>
    <p>Un test grisé signifie qu'au moins un capteur associé est désactivé ou qu'aucun capteur n'est associé à ce test.
        Veuillez vous <a id="lienContactAdmin" href="/Support?retour=/Gestionnaire-faire_passer_test">rapprocher d'un administrateur.</a></p>

    <?php
    // Si aucun test n'est associé à ce type d'emploi
    if (count($tests_psycho_associes) == 0) {
        echo "<p style='color: red'>L'emploi de cet utilisateur ne lui permet de passer aucun test.</p>";
    } else { ?>
        <table id="table_tests_associes">
            <?php
            foreach ($tests_psycho_associes as &$test_psycho_associe) {
                if ($test_psycho_associe["test_passable"]) echo "<tr>";
                else echo "<tr class='grayout'>";
                echo "<td><p class='testPsycho'>" . $test_psycho_associe["nom_test_psycho"] . "</p></td>";
                if (!$test_psycho_associe["test_passable"]) echo "<td><p class='passer'> Passer </p></td>";
                else echo "<td><a class='passer' href='Gestionnaire-affichage_test_en_cours?identifiant=" . $idUtilisateur . "&test=" . $test_psycho_associe["nom_test_psycho"] . "'> Passer </a></td>";
                echo "</tr>";
            }
            ?>
        </table>

    <?php } ?>
</div>

</body>
</html>
