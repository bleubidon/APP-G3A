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

    <form action="" method="get">
        <div10>
            <p>
                <label for="nouvelleQuestion" style="font-weight: bold; font-size: 20px" >Nouvelle question</label>
                <br><br>
                <input type="text" name="nouvelleQuestion" id="nouvelleQuestion"
                       placeholder=" Ajouter une nouvelle question" size="100"/>
                <br><br>
                <input id="bouton_ajouter" type="submit" value="Ajouter" style="margin-left: 550px"><br>
            </p>
        </div10>
        <br><br><br><br><br>
        <div11>
            <p>
                <label for="supprimerQuestion" style="font-weight: bold; font-size: 20px">Supprimer une question</label>
                <br><br>
                <input type="text" name="supprimerQuestion" id="supprimerQuestion"
                       placeholder=" Supprimez une question: entrez le numéro de la question" size="100"/>
                <br><br>
                <input id="bouton_supprimer" type="reset" value="Supprimer" style="margin-left: 550px">
            </p>
        </div11>

        <div12>
            <br><br><br><br><br>
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
