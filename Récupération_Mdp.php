<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="ressources/stylesheets/Stylesheet_Login.css" />
    <title>Captest</title>
</head>
<body>

<section id="sec1">
    <img id="imgAirplane" src="ressources/images/imgAirplane1.jpg">
</section>
<section id="sec2">
    <br><br>
    <div1>
        <form action="controllers/envoi_mail_recup_mdp.php" method="post">
            <p>
                <div4>
                    <label for="nom">Adresse Mail</label>
                    <br>
                    <input type="email" name="Mail" id="Mail" placeholder=" Votre Mail" size="35"/>
                </div4>
            </p>

            <input id="con" type="submit" value="Récuperer mon mot de passe">
        </form>
        <p>
            <button id="cree" onclick="window.location.href = '';">Contacter un Administrateur</button>
        </p>
    </div1>
    <div id="divRet">
        <button id="Retour" onclick="window.location.href = 'index.php';">Retour</button>
    </div>
</section>

</body>
