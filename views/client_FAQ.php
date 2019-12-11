<?php include("../views/header.php") ?>

<body>

<?php
include('Mise_en_page_3.php');
?>

<div19 id="sectionClientFAQ">
    <br><br><br>
    <h1> FAQ </h1>

    <div13>
        <p>
            <label for="question1">1 - Question</label>
            <br>
            <input type="text" name="reponse1" id="reponse1" placeholder=" Réponse " readonly="true" size="100"/><br>
        </p>
        <br>
    </div13>

    <div14>
        <p>
            <label for="question2">2 - Question</label>
            <br>
            <input type="text" name="reponse2" id="reponse2" placeholder=" Réponse " readonly="true" size="100"/><br>
        </p>
        <br>
    </div14>

    <div15>
        <p>
            <label for="question3">3 - Question</label>
            <br>
            <input type="text" name="reponse3" id="reponse3" placeholder=" Réponse " readonly="true" size="100"/><br>
        </p>
        <br>
    </div15>

    <div16>
        <p>
            <label for="question4">4 - Question</label>
            <br>
            <input type="text" name="reponse4" id="reponse4" placeholder=" Réponse " readonly="true" size="100"/><br>
        </p>
        <br>
    </div16>

    <div17>
        <p>
            <label for="question5">5 - Question</label>
            <br>
            <input type="text" name="reponse5" id="reponse5" placeholder=" Réponse " readonly="true" size="100"/><br>
        </p>
        <br>
    </div17>

    <div18>
        <p>
            <label for="question6">6 - Question</label>
            <br>
            <input type="text" name="reponse6" id="reponse6" placeholder=" Réponse " readonly="true" size="100"/><br>
        </p>
        <br>
    </div18>


    <?php
    $retour = isset($_GET['retour']) ? $_GET['retour'] : "/";
    ?>
    <button id="bouton_retour" onclick="window.location.href = '<?php echo $retour ?>'">Retour</button>
    <br><br><br>


    <p class="footer"> CAPTEST </p>


</div19>
</body>

