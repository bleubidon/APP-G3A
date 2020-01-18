<?php
include "../../views/header.php"; ?>
<body>
<?php
include "../../views/Mise_en_page.php";
include "../../views/tableau_colore.php";
?>

<div id="section_centrale">
    <h1>Gestion des associations entre emplois et tests psychotechniques</h1>
    <h2>Vous pouvez modifier la liste des tests psychotechniques associés à chaque type d'emploi.</h2>
    <br>
    <table id="table_emplois_quels_tests">
        <tr>
            <th class="color1">Type d'emploi</th>
            <th class="color2">Tests associés</th>
        </tr>
    </table>
</div>

<script>lister_emplois_quels_tests()</script>
</body>
</html>
