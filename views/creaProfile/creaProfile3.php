<body>
<section id="sec2">
    <?php
    echo "<p>Prénom : " . $_SESSION['Prenom'] . "</p>\n";
    echo "<p>Nom : " . $_SESSION['Nom'] . "</p>\n";
    echo "<p>Identifiant : " . $_SESSION['identifiant'] . "</p>\n";
    echo "<p>Date de naissance : " . $_SESSION['dateNaissance'] . "</p>\n";
    echo "<p>Numéro de téléphone : " . $_SESSION['numeroTel'] . "</p>\n";
    echo "<p>Adresse email : " . $_SESSION['email'] . "</p>\n";
    echo "<p>Emploi : " . $_SESSION['emplois'] . "</p>\n";

    echo "<p>Genre : " . $_SESSION['genre'] . "</p>\n";
    echo "<p>Poids : " . $_SESSION['poids'] . "</p>\n";
    echo "<p>Taille : " . $_SESSION['taille'] . "</p>\n";
    echo "<p>Groupe sanguin : " . $_SESSION['gsang'] . "</p>\n";
    echo "<p>Sommeil : " . $_SESSION['sommeil'] . "</p>\n";
    echo "<p>Pathologie : " . $_SESSION['pathologie'] . "</p>\n";
    ?>

    <form action="?etape=3&toutes_infos_collectees" method="post">
        <a class="bouton" href="?etape=2">Retour</a>

        <?php
        if (isset($_GET['inscription_reussie'])) {
            ?>
            <h2 style="color:blue">Inscription réussie !</h2>
            <a href="../..">Identifiez-vous</a>
            <?php
        }
        ?>
        <input type="submit" value="Je valide mon inscription"/>
    </form>
</section>
</body>
</html>
