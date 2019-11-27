<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="stylesheets/Stylesheet_Login.css" />
    <title>Captest</title>
</head>
<body>

<section id="sec1">
    <img id="imgCreaProfil2" src="images/creaProfil2.png">
</section>
<section id="sec2">
    <br><br>
    <div1>
        <form action="Page1.php" method="post">
            <p>
                <div4>
                    <label for="Poid">Poid</label>
                    <br>
                    <input type="number" name="poid" id="poid" placeholder=" Votre Poid (kg)" size="20"/>
                </div4>
            </p>
        </form>

        <form action="Page1.php" method="post">
            <p>
                <div4>
                    <label for="mail">Taille</label>
                    <br>
                    <input type="text" name="taille" id="taille" placeholder=" Votre taille" size="20"/>
                </div4>
            </p>
        </form>
        <br>

        <form action="Page1.php" method="post">
            <p>
                <div5>
                    <label for="mail">Groupe sanguin</label>
                    <br>
                    <input type="text" name="gsang" id="gsang" placeholder=" Votre groupe sanguin" size="20"/>
                </div5>
            </p>
        </form>

        <form action="Page1.php" method="post">
            <p>
                <div5>
                    <label for="mail">Sommeil moyen</label>
                    <br>
                    <input type="time" name="sommeil" id="duréeSommeil" placeholder=" " size="35"/>
                </div5>
            </p>
        </form>
        <br>

        <form action="Page1.php" method="post">
            <p>
                <div6>
                    <label for="mail">Taille</label>
                    <br>
                    <textarea name="taille" id="taille" placeholder=" Votre taille" rows="5" cols="50"></textarea>
                </div6>
            </p>
        </form>
    </div1>
</section>
</body>
