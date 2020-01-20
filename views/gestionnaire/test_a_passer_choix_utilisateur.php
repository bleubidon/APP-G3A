<?php
include "../../views/header.php"
?>
<body>
<?php
include "../../views/Mise_en_page.php";
?>

<div id="demanderIdentifiant">
    <h1> Vous désirez faire passer le test pour:</h1>
    <div>
        <form method="post" action="">
            <fieldset>
                <legend>Pré requis !</legend>
                <label id="labelPrerequis" for="idUtilisateur">Entrez l'identifiant de l'utilisateur à qui vous faites
                    passer le test</label>
                <input type="text" name="idUtilisateur" id="idUtilisateur" placeholder="identifiant">
                <input type="submit" value="Valider">
            </fieldset>
        </form>
    </div>

    <?php
    if (isset($_GET["identifiant_inconnu"])) echo "<p style='color: red'>Identifiant inconnu</p>";
    ?>
</div>
</body>
</html>
