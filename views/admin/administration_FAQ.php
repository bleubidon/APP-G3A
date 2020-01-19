<?php include "../../views/header.php" ?>

<body>
<?php
include "../../views/Mise_en_page.php";  // Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json
?>

<div id="section_centrale">
    <h1>Administration de la FAQ</h1>
    <br><br><br>
    <form action="" method="post">
        <p>
            <label for="nouvelleQuestion">Nouvelle question</label>
            <br><br>
            <textarea name="nouvelleQuestion" id="nouvelleQuestion" placeholder="Ajouter une nouvelle question"
                      cols="55"
                      rows="5"></textarea>
            <textarea name="reponseQuestion" id="reponseQuestion" placeholder="Réponse à cette question"
                      cols="55"
                      rows="5"></textarea>
            <br><br>
            <input id="bouton_ajouter" type="submit" value="Ajouter"><br>
        </p>
    </form>
    <br><br><br>
    <form action="" method="post">
        <p>
            <label for="supprimerQuestion">Supprimer une question</label>
            <br><br>
            <input type="number" name="supprimerQuestion" id="supprimerQuestion"
                   placeholder="numéro question" size="10"/>
            <br><br>
            <input id="bouton_supprimer" type="submit" value="Supprimer">
        </p>
    </form>
    <?php if (isset($_GET["succes"])) echo "<p>Opération effectuée avec succès</p>";
    else if (isset($_GET["echec"])) echo "<p style='color:red'>L'opération demandée n'a pas pu aboutir</p>";?>
</div>

</body>
</html>
