<?php
include "../../views/header.php"
?>
<body>
<?php
include "../../views/Mise_en_page.php";
?>

<div id="section_centrale">
    <h1>Test en cours pour <?php echo "<span id='identifiant'>" . $_GET["identifiant"] . "</span>" ?>
        : <?php echo "<span id='nom_test'>" . $_GET["test"] . "</span>" ?></h1>
    <div id="chartContainer"></div>
    <p id="test_fini"></p>
</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
