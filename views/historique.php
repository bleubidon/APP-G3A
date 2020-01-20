<?php include "header.php"; ?>
<body>
<?php
include "Mise_en_page.php";  // Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json
?>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div id="section_centrale">
    <br><br>
    <h1> Historique de vos tests passés: </h1>
    <?php include "liste_tests_passes.php" ?>
</div>

</body>
</html>
