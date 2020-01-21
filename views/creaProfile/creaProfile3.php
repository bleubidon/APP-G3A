<body>
<h1 style="color: black; text-align: center">Récapitulatif de vos données</h1>

<section id="secCreaProfile3">
    <table>
        <tr>
            <?php
             echo "<td><p>Prénom : " . $_SESSION['Prenom'] . "</td></p>";
             echo "<td><p>Nom : " . $_SESSION['Nom'] . "</td></p>";
             ?>
        </tr>
        <tr>
            <?php
            echo "<td><p>Identifiant : " . $_SESSION['identifiant'] . "</td></p>";
            echo "<td><p>Date de naissance : " . $_SESSION['dateNaissance'] . "</td></p>\n";
            ?>
        </tr>
        <tr>
            <?php
            echo "<td><p>Numéro de téléphone : " . $_SESSION['numeroTel'] . "</td></p>\n";
            echo "<td><p>Adresse email : " . $_SESSION['email'] . "</td></p>\n";
            ?>
        </tr>
        <tr>
            <?php
            echo "<td><p>Emploi : " . $_SESSION['emplois'] . "</td></p>\n";
            echo "<td><p>Genre : " . $_SESSION['genre'] . "</td></p>\n";
            ?>
        </tr>
        <tr>
            <?php
            echo "<td><p>Poids : " . $_SESSION['poids'] . "</td></p>\n";
            echo "<td><p>Taille : " . $_SESSION['taille'] . "</td></p>\n";
            ?>
        </tr>
        <tr>
            <?php
            echo "<td><p>Sommeil : " . $_SESSION['sommeil'] . "</td></p>\n";
            echo "<td><p>Pathologie : " . $_SESSION['pathologie'] . "</td></p>\n";
            ?>
        </tr>
    </table>
    <br><br>

    <form action="?etape=3&toutes_infos_collectees" method="post">
        <a id="bouton_retour" href="?etape=2" style="padding-top: 10px;padding-bottom: 10px; width: 100px; height: 40px; text-decoration: none">Retour</a>&nbsp;&nbsp;   <?php
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
