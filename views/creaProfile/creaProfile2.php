<body>
<section id="sec1">
    <img
        src="/ressources/images/captimove_logo.png"
        alt="logo"
        height="100px"
        width="100px" style=""
    />    <?php
    if (isset($modification_profil)) echo "<h1>Modification de vos données de santé</h1>";
    else echo "<h1>Vos données de santé</h1>"; ?>

    <form action="" method="post" onsubmit="return validationFormulaire()" novalidate>
        <div id="genre">
            <p>
                Genre <abbr title="Champ obligatoire">*</abbr><br/>
                <input type="radio" name="genre" value="Homme"
                       id="Homme" size="35"
                    <?php if (isset($modification_profil) && $genre == "Homme") echo "checked";
                    else if (isset($genre) && $genre == "Homme") echo "checked";
                    ?>/>
                <label for="Homme">Homme</label>
                <input type="radio" name="genre" value="Femme"
                       id="Femme" ; size="35"
                    <?php if (isset($modification_profil) && $genre == "Femme") echo "checked";
                    else if (isset($genre) && $genre == "Femme") echo "checked";
                    ?>/>
                <label for="Femme">Femme</label><br>
                <span id="genre_erreur" style="color: red"><?php echo $genre_err ?></span>
            </p>
        </div>
        <div id="poids_taille">
             <p><label for="Poids">Poids <abbr title="Champ obligatoire; pas d'accents">*</abbr></label>
                <br>
                <input type="number" name="poids" id="poids" placeholder=" Votre Poids (kg)"
                       size="35"
                    <?php if (isset($modification_profil)) echo "value=\"$poids\"";
                    else echo "value=\"$poids\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^[\d]+$"/><br>
                <span id="poids_erreur" style="color: red"><?php echo $poids_err ?></span>
            </p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <p><label for="mail">Taille (cm) <abbr title="Champ obligatoire; pas d'accents">*</abbr></label><br>
                <input type="number" name="taille" id="taille" placeholder=" Votre taille"
                       size="35"
                    <?php if (isset($modification_profil)) echo "value=\"$taille\"";
                    else echo "value=\"$taille\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^[\d]+$"/><br>
                <span id="taille_erreur" style="color: red"><?php echo $taille_err ?></span>
            </p>
        </div>
        <div id="gsang_sommeil">
            <p><label for="mail">Groupe sanguin <abbr title="Champ obligatoire; pas d'accents">*</abbr></label>
                <br>
                <input type="text" name="gsang" id="gsang" placeholder=" Votre groupe sanguin"
                       size="35"
                    <?php if (isset($modification_profil)) echo "value=\"$groupe_sanguin\"";
                    else echo "value=\"$gsang\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^[-+aboABO]+$"/><br>
                <span id="gsang_erreur" style="color: red"><?php echo $gsang_err ?></span>
            </p>&nbsp;&nbsp;

            <p><label for="mail">Sommeil moyen <abbr title="Champ obligatoire; pas d'accents">*</abbr></label><br>
                <input type="text" name="sommeil" id="duréeSommeil" size="35"
                       placeholder="0"
                    <?php if (isset($modification_profil)) echo "value=\"$sommeil_moyen\"";
                    else echo "value=\"$sommeil\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^[\d]+$"/><br>
                <span id="sommeil_erreur" style="color: red"><?php echo $sommeil_err ?></span>
            </p>
        </div>
        <div id="pathologie">
            <p><label for="pathologie">Antécedent / Pathologie</label><br>
                <textarea name="pathologie" id="pathologie" placeholder="Vos antécedents et/ou pathologies" cols="55"
                          rows="5"><?php if (isset($modification_profil)) echo $pathologie ?></textarea>
        </div>
        <p>
        <div id="boutons">
            <a id="bouton_retour" href="?etape=1">Retour</a>
            &nbsp;<input id="con" type="submit" value="Continuer"/>
        </div>
        </p>
    </form>
</section>
<script src="/scripts/validation_formulaire_creation_compte.js"></script>
</body>
</html>
