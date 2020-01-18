<?php
include "../../views/header.php"
?>
<body>
<?php
include "../../views/Mise_en_page.php";
?>

<div>
    <br><br>
    <h1> Tests à passer: </h1>

    <div22 id="catégories">
        <p class="testFreqCardiaque"> Test cardiaque </p>
        <p class="testTemperature"> Test de température </p>
        <p class="testMemo"> Test mémorisation </p>
    </div22>

    <div23 id="liens">
        <p><a class="passer" href=""> Passer </a>
            <br>
            <a class="passer" href=""> Passer </a>
            <br>
            <a class="passer" href=""> Passer </a></p>
    </div23>
    <div>
        <?php
        $retour = isset($_GET['retour']) ? $_GET['retour'] : "/views/test_a_passer_choix_utilisateur.php";
        ?>
        <button id="bouton_retour" onclick="window.location.href= '<?php echo $retour ?>'">Retour</button>
    </div>

    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br>


    <p class="footer">CAPTEST</p>


</div>

</body>