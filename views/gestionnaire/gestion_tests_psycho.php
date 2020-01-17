<?php
include "../../views/header.php";
include "../../views/Mise_en_page.php";
include "../../views/tableau_colore.php";
?>

<body>
<div id="section_centrale">
    <h1>Gestion des tests psychotechniques</h1>
    <h2>Vous pouvez modifier la liste des capteurs associés à chaque test psychotechnique</h2>
    <br>

    <table id="table_tests_psycho">
        <tr>
            <th class="color1">Nom du test</th>
            <th class="color2">Capteurs associés</th>
        </tr>
    </table>
    <p id="debug"></p>
</div>

<script>lister_tests_psycho()</script>
</body>
</html>
