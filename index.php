<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="stylesheets/Stylesheet_Login.css" />
    <title>Captest</title>
</head>
<body>


<section id="sec1">
    <img id="imgPageDeCo" src="images/imgPageDeCo.png">
</section>

<section id="sec2">
    <br><br>
    <div1>
        <form action="page_accueil.php" method="post">
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
            <input id="con" type="submit" value="Se connecter"></input>
        </form>
        <p>
            <button id="cree" onclick="window.location.href = '';">Créer un compte</button>
        </p>
    </div1>
    <div2>
        <a id="mdp" href="Récupération_Mdp.php">Mot de passe oublié ?</a>
    </div2>
    <div3>
        <img id="logo" src="images/infinite_mesure.png">
    </div3>
</section>

</body>


