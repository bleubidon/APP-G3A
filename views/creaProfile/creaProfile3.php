<body>
<section id="sec2">
    <!--<img
        src="/ressources/images/captimove_logo.png"
        alt="logo"
        height="100px"
        width="100px"
    />-->
    <h1 style="margin-right: 500px">Récapitulatif de vos données de santé</h1>
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
        <a class="bouton" href="?etape=2">Retour</a>   <?php
/*        $retour = isset($_GET['retour']) ? $_GET['retour'] : "/?etape=2";
        */?><!--
        <button class="bouton" onclick="window.location.href = '<?php /*echo $retour*/?>'">Retour</button>-->

        <?php
        if (isset($_GET['inscription_reussie'])) {
            ?>
            <h2 style="color:blue">Inscription réussie !</h2>
            <a href="../..">Identifiez-vous</a>
            <?php
        }
        ?>
        &nbsp; <input id="con" type="submit" value="Je valide mon inscription"/>
    </form>
</section>
</body>
</html>
