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
    <br>
    <h1> Vous désirez faire passer le test pour:</h1>
    <div>
        <form method="post" action="">
        <fieldset>
            <legend>Pré requis !</legend>
                <label id="labelPrerequis" for="idUtilisateur"> Entrez l'identifiant de l'utilisateur à qui vous faites passer le test</label>
                <input type="text" name="idUtilisateur" id="idUtilisateur" placeholder="Ex: 10459">
            <input type="submit" value="Valider">
        </fieldset>
        </form>
    </div>



    <div20 id="catégories">
        <p class="pilote"> Un pilote </p>
        <p class="personnelSol"> Un personnel au sol </p>
        <p class="personnelNaviguant"> Un personnel naviguant </p>
    </div20>

    <div21 id="liens">
        <p><a id="selectionnerPilote" href="/views/test_a_passer_pilote.php"> Sélectionner </a> &nbsp;
            <a id="selectionnerPersSol" href="/views/test_a_passer_personnel_sol.php"> Sélectionner </a> &nbsp;
        <a id="selectionnerPersNaviguant" href="/views/test_a_passer_personnel_naviguant.php"> Sélectionner </a></p>
    </div21>

    <div>
        <?php
        $retour = isset($_GET['retour']) ? $_GET['retour'] : "/controllers/page_principale_utilisateur.php";
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
    <br><br>
    <p class="footer">CAPTEST</p>


</div>

</body>


