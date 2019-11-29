<?php
$parent_filename = basename($_SERVER['PHP_SELF']);
include("views/header.php");
?>

<body>

<section id="sec1">
    <img id="imgPageDeCo" src="ressources/images/imgPageDeCo.png">
</section>

<section id="sec2">
    <br><br>
    <div1>
        <form action="controllers/page_accueil.php" method="post">
            <p>
                <div4>
                    <label for="nom">Identifiant</label>
                    <br>
                    <input type="text" name="identifiant" id="identifiant" placeholder=" Identifiant" size="35"/>
                </div4>
            </p>
            <p>
                <div4>
                    <label for="mail">Mot de passe</label>
                    <br>
                    <input type="password" name="Password" id="Password" placeholder=" Mot de Passe" size="35"/>
                </div4>
            </p>

            <?php
            if (isset($_GET['erreur_login'])) {
            ?>
                <p id="error">Mot de passe ou identifiant incorrect veuillez réessayer</p>
            <?php
                }
            ?>

            <input id="con" type="submit" value="Se connecter">
        </form>

        <p>
            <button id="cree" onclick="window.location.href = '';">Créer un compte</button>
        </p>
    </div1>
    <div2>
        <a id="mdp" href="Récupération_Mdp.php">Mot de passe oublié ?</a>
    </div2>
    <div3>
        <img id="logo" src="ressources/images/infinite_mesure.png">
    </div3>
</section>

</body>
</html>