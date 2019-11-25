<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="Stylesheet_Login.css" />
    <title>Captest</title>
</head>
<body>

<section id="sec1">
    <img id="imgPageDeCo" src="imgPageDeCo.png">
</section>

<section id="sec2">
    <br><br>
    <div1>

        <form action="Page1.php" method="post">
            <p>
                <div4>
                    <label for="nom">Identifiant</label>
                    <br>
                    <input type="text" name="identifiant" id="identifiant" placeholder=" Identifiant" size="35"/>
                </div4>
            </p>
        </form>

        <form action="Page1.php" method="post">
            <p>
                <div4>
                    <label for="mail">Mot de passe</label>
                    <br>
                    <input type="password" name="Password" id="Password" placeholder=" Mot de Passe" size="35"/>
                </div4>
            </p>
        </form>

        <p id="error">Mot de passe ou Identifiant Incorrect veuillez réessayer</p>

        <p>
            <button id="con" onclick="window.location.href = 'Page1.php';">Se connecter</button>
            <br><br>
            <button id="cree" onclick="window.location.href = '';">Crée un compte</button>
        </p>

    </div1>

    <div2>
        <button id="mdp" onclick="window.location.href = 'Récupération_Mdp.php';">Mot de passe oublié ?</button>
    </div2>

    <div3>
        <img id="logo" src="infinite_mesure.png">
    </div3>

</section>

</body>
