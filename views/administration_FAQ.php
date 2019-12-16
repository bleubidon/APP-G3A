<?php
// TODO integrer cette page dans le backoffice
session_start();
$_SESSION['statut_utilisateur_site'] = "administrateur";  // TODO Changer ça, c'est juste une simulation
include "../views/header.php";
include "Mise_en_page.php";
?>
<body>
<br><br>
<div9 id="sectionAdminFaq">
    <h1 id="titre">Administration de la FAQ</h1>

    <br><br><br>
    <br><br><br>

    <form action="" method="get">
        <div10>
            <p>
                <label for="nouvelleQuestion">Nouvelle question</label>
                <br>
                <input type="text" name="nouvelleQuestion" id="nouvelleQuestion"
                       placeholder=" Ajouter une nouvelle question" size="100"/><br>
                <input id="bouton_ajouter" type="submit" value="Ajouter"><br>
            </p>
        </div10>
        <br><br><br><br><br>
        <div11>
            <p>
                <label for="supprimerQuestion">Supprimer une question</label>
                <br>
                <input type="text" name="supprimerQuestion" id="supprimerQuestion"
                       placeholder=" Supprimez une question: entrez le numéro de la question" size="100"/><br>
                <input id="bouton_supprimer" type="submit" value="Supprimer">
            </p>
        </div11>

        <div12>
            <br><br><br><br><br><br><br>
            <br><br>
            <?php
            $retour = isset($_GET['retour']) ? $_GET['retour'] : "/";
            ?>
            <button id="bouton_retour" onclick="window.location.href = '<?php echo $retour ?>'">Retour</button>
            <br><br><br>

            <p class="footer"> CAPTEST </p>
        </div12>
    </form>
</div9>
</body>
</html>
