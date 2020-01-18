<?php
include "../../views/header.php";
include "../../views/Mise_en_page.php";
include "../../views/tableau_colore.php";
?>

<body>
<div id="section_centrale">
    <h1>Gestion des tests psychotechniques</h1>
    <h2>Vous pouvez:</h2>
    <ul>
        <li>- Modifier la liste des capteurs associés à chaque test psychotechnique</li>
        <li>- Ajouter un test psychotechnique</li>
        <li>- Supprimer un test psychotechnique</li>
    </ul>
    <br>

    <form action="" method="post" class="textarea_form">
        <label for="me">Nouveau test psychotechnique: </label>
        <textarea name="nouveau_test" id="nouveau_test" placeholder="Description du test psychotechnique"
                  cols="55"></textarea>
        <input type="submit" value="Ajouter">
    </form>
    <br>

    <table id="table_tests_psycho">
        <tr>
            <th class="color1">Nom du test</th>
            <th class="color2">Capteurs associés</th>
        </tr>
    </table>
</div>

<script>lister_tests_psycho()</script>
</body>
</html>
