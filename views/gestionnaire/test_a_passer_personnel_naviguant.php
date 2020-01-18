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

    <div26 id="catégories">
        <p class="testAptitudesVerbales"> Test d'aptitudes verbales </p>
        <p class="testLettres"> Test de lettres </p>
        <p class="testChiffres"> Test de chiffres </p>
    </div26>

    <div27 id="liens">
        <p><a class="passer" href=""> Passer </a>
            <br>
            <a class="passer" href=""> Passer </a>
            <br>
            <a class="passer" href=""> Passer </a></p>
    </div27>
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