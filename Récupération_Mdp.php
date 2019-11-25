<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="Stylesheet_Login.css" />
    <title>Captest</title>
</head>
<body>

<section id="sec1">
    <img id="imgAirplane" src="images/imgAirplane1.jpg">
</section>
<section id="sec2">
    <br><br>
    <div1>
        <form action="traitement.php" method="post">
            <p>
                <div4>
                    <label for="nom">Adresse Mail</label>
                    <br>
                    <input type="email" name="Mail" id="Mail" placeholder=" Votre Mail" size="35"/>
                </div4>
            </p>
        </form>
        <p>
            <button id="con" onclick="window.location.href = '';">Récuperer mon mot de passe</button>
            <br><br>
            <button id="cree" onclick="window.location.href = '';">Contacter un Administrateur</button>
        </p>
    </div1>
    <div id="divRet">
        <button id="Retour" onclick="window.location.href = 'Page_de_connexion.php';">Retour</button>
    </div>
</section>

</body>
