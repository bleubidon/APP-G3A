<?php
// TODO integrer cette page quelque part
session_start();
include "../views/header.php"
?>


<body>
<?php
include('Mise_en_page.php');
?>

<div>
    <br><br><br>
    <h1> Tests à passer: </h1>

    <div22 id="catégories">
        <p class="testFreqCardiaque"> Test cardiaque </p>
        <p class="testCalcMental"> Test calcul mental </p>
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
        $retour = isset($_GET['retour']) ? $_GET['retour'] : "/";
        ?>
        <button id="bouton_retour" onclick="window.location.href = '<?php echo $retour ?>'">Retour</button>
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


    <p class="footer">CAPTEST</p>


</div>

</body>