<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="/ressources/stylesheets/Stylesheet_a_propos.css">
    <title>A propos</title>
</head>
<body>
    <section1 id="section1">
        <div id="imageCaptimove">
            <img id="logoCaptimove" src="/ressources/images/captimove_logo.png"> <br>
            <p class="captest"> CAPTEST </p>
        </div>

        <div id="foot">
            <section3>
                <br>
                <p><a href="/controllers/contact_administrateur.php?retour=<?php echo $_SERVER['PHP_SELF'] ?>">Contacter le
                    support</a></p>
                <p> <a href="/controllers/deconnexion.php"> Se déconnecter </a></p>
                <p><a href="/views/a_propos.html">À propos</a></p>
                <p><a id="CGU" href="/views/cgu.html">CGU et mentions légales</a></p>
            </section3>
        </div>
    </section1>

    <section2 id="section2">
        <p id="infoProduit"> INFORMATIONS SUR LE PRODUIT </p>
        <br><br><br><br>
        <br><br><br><br>

        <p id="coordonnees">  COORDONNEES </p>
        <br><br><br><br>
        <br><br><br><br>

        <p id="infoProduitbis">  PLUS D'INFORMATIONS </p>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>

        <div id="conteneur">
            <button id="bouton_retour" onclick="window.location.href='page_principale_utilisateur.php' ">Retour</button>
        </div>

        <p class="footer"> CAPTEST </p>
    </section2>


</body>
</html>