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
    <h1> Vous désirez faire passer le test pour:</h1>

    <div20 id="catégories">
        <p class="pilote"> Un pilote </p>
        <p class="personnelSol"> Un personnel au sol </p>
        <p class="personnelNaviguant"> Un personnel naviguant </p>
    </div20>

    <div21 id="liens">
        <p><a id="selectionnerPilote" href="/views/test_a_passer.php"> Sélectionner </a> &nbsp;
            <a id="selectionnerPersSol" href=""> Sélectionner </a> &nbsp;
        <a id="selectionnerPersNaviguant" href=""> Sélectionner </a></p>
    </div21>

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


