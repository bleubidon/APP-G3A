<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="../ressources/stylesheets/Stylesheet_Login.css" />
    <title>Captest</title>
</head>

<body>
<section id="sec1">
    <img id="imgPageDeCo" src="../ressources/images/imgPageDeCo.png">
</section>

<section id="sec2">
    <br><br>
    <div1>
        <form action="" method="post">
            <p>
                <div4>
                    <label for="identifiant">Nom</label>
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
            // Message si compte créé avec succès
            if (isset($_GET['creation_compte_reussie'])) {
            ?>
            <p>Compte créé avec succès !</p>
            <a href='../index.php'>Retour à la page de connexion</a><br><br>
            <?php
            }
            ?>

            <input id="con" type="submit" value="S'incrire">
        </form>
    </div1>
    <div3>
        <img id="logo" src="../ressources/images/infinite_mesure.png">
    </div3>
</section>
</body>
</html>