<?php include("views/header.php") ?>

<body>
<section id="sec1">
    <img id="imgPageDeCo" src="ressources/images/imgPageDeCo.png">
</section>

<section id="sec2">
    <br><br>
    <br><br>
    <h1 class="header">CAPTEST</h1>
    <img id="logo" src="ressources/images/captimove_logo.png">
    <div1>
        <form action="controllers/verif_auth_utilisateur.php" method="post">
            <p>
                <div4>
                    <label for="identifiant">Identifiant</label>
                    <br>
                    <input type="text" name="identifiant" id="identifiant" placeholder=" Identifiant" size="35"/>
                </div4>
            </p>
            <p>
                <div4>
                    <label for="password">Mot de passe</label>
                    <br>
                    <input type="password" name="password" id="password" placeholder="Mot de Passe" size="35"/>
                </div4>
            </p>

            <?php
            if (isset($_GET['erreur_login'])) {
                ?>
                <p id="error">Mot de passe ou identifiant incorrect</p>
                <?php
            }
            ?>

            <input id="con" type="submit" value="Se connecter">
        </form>

        <p>
            <button id="cree" onclick="window.location.href = 'controllers/creation_compte_utilisateur.php'">Créer un
                compte
            </button>
        </p>
    </div1>


    <div2>
        <a id="mdp" href="controllers/mot_de_passe_oublie.php">Mot de passe oublié ?</a>
    </div2>
    <br><br>
    <br><br><br><br>
    <br><br>


    <div4 id="conteneur">
        <div3>
            <a id="languageFR" href="">Français(FR)</a>
        </div3>
        &nbsp; &nbsp; <!--rajoute des espaces -->
        <div5>
            <a id="languageUS" href="">English(US)</a>
        </div5>
    </div4>

</section>
</body>
</html>
