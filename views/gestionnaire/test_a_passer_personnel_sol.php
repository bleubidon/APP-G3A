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
    <br><br>
    <h1> Tests à passer: </h1>

    <div24 id="catégoriesPersonnelSol">
        <p class="testIntelligence"> Test intelligence et logique </p>
        <p class="testRaisonnement"> Test de raisonnement </p>
        <p class="testTonalite"> Test de tonalité </p>
    </div24>

    <div25 id="liens">
        <p><a class="passer" href=""> Passer </a>
            <br>
            <a class="passer" href=""> Passer </a>
            <br>
            <a class="passer" href=""> Passer </a></p>
    </div25>
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