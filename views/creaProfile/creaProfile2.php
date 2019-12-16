<body>
<section id="sec1">
    <img id="imgCreaProfil2" src="../../ressources/images/creaProfil2.png">
</section>
<section id="sec2">
    <?php
    if (isset($modification_profil)) echo "<h1>Modification de vos données de santé</h1>";
    else echo "<h1>Vos données de santé</h1>"; ?>

    <form action="" method="post">
        <div id="genre">
            <p>
                Genre : <br/>
                <input type="radio" name="genre" value="Homme"
                       id="Homme" <?php if (isset($modification_profil) && $genre == "Homme") echo "checked" ?>/>
                <label for="Homme">Homme</label>

                <input type="radio" name="genre" value="Femme"
                       id="Femme" <?php if (isset($modification_profil) && $genre == "Femme") echo "checked" ?>/>
                <label for="Femme">Femme</label>
            </p>
        </div>
        <div id="poids_taille">
            <p><label for="Poids">Poids</label>
                <br>
                <input type="number" name="poids" id="poids" placeholder=" Votre Poids (kg)"
                       size="20" <?php if (isset($modification_profil)) echo "value=\"$poids\"" ?>/></p>

            <p><label for="mail">Taille</label><br>
                <input type="text" name="taille" id="taille" placeholder=" Votre taille"
                       size="20" <?php if (isset($modification_profil)) echo "value=\"$taille\"" ?>/></p>
        </div>
        <div id="gsang_sommeil">
            <p><label for="mail">Groupe sanguin</label>
                <br>
                <input type="text" name="gsang" id="gsang" placeholder=" Votre groupe sanguin"
                       size="20" <?php if (isset($modification_profil)) echo "value=\"$groupe_sanguin\"" ?>/></p>

            <p><label for="mail">Sommeil moyen</label><br>
                <input type="text" name="sommeil" id="duréeSommeil" size="20"
                       placeholder="000-000-000" <?php if (isset($modification_profil)) echo "value=\"$sommeil_moyen\"" ?>/>
            </p>
        </div>
        <div id="pathologie">
            <p><label for="mail">Antécedent / Pathologie</label>
                <br>
                <textarea name="pathologie" id="pathologie" placeholder="Vos antécedent et/ou pathologie" cols="55"
                          rows="5"><?php if (isset($modification_profil)) echo $pathologie ?></textarea>
        </div>
        <p>
            <a href="?etape=1">Retour</a>
            <input type="submit" value="Continuer"/>
        </p>
    </form>
</section>
</body>
</html>