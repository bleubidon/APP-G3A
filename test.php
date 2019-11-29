<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="ressources/stylesheets/Stylesheet_Login.css" />
    <title>Captest</title>
</head>
<body>

<section id="sec1">
    <img id="imgCreaProfil2" src="ressources/images/creaProfil2.png">
</section>
<section id="sec2">
    <br><br>
    <div1>
        <h1>Vos données de santé</h1>
        <br>
        <div4>
            <form action="page_accueil.php" method="post">
                <p>
                    <label for="Poids">Poids</label>
                    <br>
                    <input type="number" name="poids" id="poids" placeholder=" Votre Poids (kg)" size="20"/>
                </p>
            </form>
        </div4>

        <div5>
            <form action="page_accueil.php" method="post">
                <p>
                    <label for="mail">Taille</label>
                    <br>
                    <input type="text" name="taille" id="taille" placeholder=" Votre taille" size="20"/>
                </p>
            </form>
        </div5>

        <br>

        <div6>
            <form action="page_accueil.php" method="post">
                <p>
                    <label for="mail">Groupe sanguin</label>
                    <br>
                    <input type="text" name="gsang" id="gsang" placeholder=" Votre groupe sanguin" size="20"/>
                </p>
            </form>
        </div6>


        <div7>
            <form action="page_accueil.php" method="post">
                <p>
                    <label for="mail">Sommeil moyen</label>
                    <br>
                    <input type="text" name="sommeil" id="duréeSommeil" size="20" placeholder="000-000-000"/>
                </p>
            </form>
        </div7>

        <br>

        <div8>
            <form action="page_accueil.php" method="post">
                <p>
                    <label for="mail">Antécedent / Pathologie</label>
                    <br>
                    <textarea name="taille" id="taille" placeholder=" Vos antécedent et/ou pathologie" cols="55" rows="5"></textarea>
                </p>
            </form>
        </div8>
    </div1>
</section>
</body>
