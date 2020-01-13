<body>
<section id="sec1">
    <img id="imgPageDeCo" src="../../ressources/images/creaProfile1.png">
</section>
<section id="sec2">
    <?php
    if (isset($modification_profil)) echo "<h1>Modification de votre profil</h1>";
    else echo "<h1>Création de votre profil</h1>"; ?>

    <form action="" method="post" enctype="multipart/form-data" name="form1" onsubmit="return validationFormulaire()"
          novalidate>
        <!--        L'enctype utilisé ci-dessus est nécessaire pour l'upload de fichier via le formuaire-->
        <div id="name">
            <p><label for="Prenom">Prénom <abbr title="Champ obligatoire; pas d'accents">*</abbr></label>
                <br>
                <input type="text" name="Prenom" id="Prenom"
                       placeholder="Votre Prénom"
                    <?php if (isset($modification_profil)) echo "value=\"$prenom\"";
                    else echo "value=\"$Prenom\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^[-\w]+$"/>
                <span id="Prenom_erreur"><?php echo $Prenom_err ?></span>
            </p>
            &nbsp;
            &nbsp;
            <p><label for="Nom">Nom <abbr title="Champ obligatoire">*</abbr></label><br>
                <input type="text" name="Nom" id="Nom"
                       placeholder="Votre Nom"
                    <?php if (isset($modification_profil)) echo "value=\"$nom\"";
                    else echo "value=\"$Nom\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^[-\w]+$"/>
                <span id="Nom_erreur"><?php echo $Nom_err ?></span>
            </p>
        </div>
        <br/>
        <div id="phone">
            <p><label for="dateNaissance">Date de Naissance <abbr title="Champ obligatoire">*</abbr></label><br>
                <input type="date" name="dateNaissance" id="dateNaissance"
                       placeholder="jj/mm/année"
                    <?php if (isset($modification_profil)) echo "value=\"$date_de_naissance\"";
                    else echo "value=\"$dateNaissance\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^\d{4}-[01]\d-[0-3]\d$"/>
                <span id="dateNaissance_erreur"><?php echo $dateNaissance_err ?></span>
            </p>
            &nbsp;
            &nbsp;
            <p><label for="numeroTel">Numéro de téléphone <abbr title="Champ obligatoire">*</abbr></label><br>
                <input type="tel" name="numeroTel" id="numeroTel"
                       placeholder="0xxxxxxxxx"
                    <?php if (isset($modification_profil)) echo "value=\"$telephone\"";
                    else echo "value=\"$numeroTel\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^0\d{9}$"/>
                <span id="numeroTel_erreur"><?php echo $numeroTel_err ?></span>
            </p>
        </div>
        <br/>
        <div id="mail">
            <p><label for="email">Email <abbr title="Champ obligatoire">*</abbr></label><br>
                <input type="email" name="email" id="email"
                       placeholder="Votre adresse mail"
                    <?php if (isset($modification_profil)) echo "value=\"$adresse_email\"";
                    else echo "value=\"$email\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^[-.\w]+@[-.\w]+.[a-zA-Z]+$"/>
                <span id="email_erreur"><?php echo $email_err ?></span>
            </p>
            &nbsp;
            &nbsp;
            <?php if (!isset($modification_profil)) { ?>
                <p><label for="identifiant">Identifiant <abbr title="Champ obligatoire">*</abbr></label><br>
                    <input type="text" name="identifiant" id="identifiant"
                           placeholder="Identifiant"
                        <?php if (isset($modification_profil)) echo "value=\"$identifiant\"";
                        else echo "value=\"$identifiant\"";
                        ?>
                           required="required"
                           aria-required="true"
                           pattern="^[a-zA-Z\d]+$"/>
                    <span id="identifiant_erreur"><?php echo $identifiant_err ?></span>
                </p>
            <?php } ?></div>
        <br>
        <?php if (isset($modification_profil)) { ?>
            <p>Modifiez votre mot de passe :</p>
            <div id="mdp">
                <p><label for="password">Mot de passe actuel :</label><br>
                    <input type="password" name="password_ancien" id="password_ancien"/>
                    <span id="password_ancien_erreur"><?php echo $password_ancien_err ?></span>
                </p>
            </div>
        <?php } ?><br>
        <div id="mdp">
            <p>
                <label for="password"><strong><?php echo isset($modification_profil) ?
                            "Nouveau mot de passe :</strong>" :
                            "Mot de passe </strong><abbr title=\"Au moins 8 caractères d'au moins 2 types sur 3: lettres minuscules, lettres majuscules, chiffres\">*</abbr>"
                        ?>
                </label><br>

                <input type="password" name="password"
                       id="password"
                    <?php if (isset($modification_profil))
                    echo "value=\"\"/>";
                    else { ?>
                       required="required"
                       aria-required="true"
                       pattern="^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*\d))|((?=.*[A-Z])(?=.*\d)))(?=.{8,})"/>
                <?php } ?>
                <span id="password_erreur"><?php echo $password_err ?></span>
            </p>
            &nbsp;
            &nbsp;
            <p><label for="validePassword">Confirmation du mot de passe<?php echo isset($modification_profil) ?
                        " :" :
                        "<abbr title=\"Champ obligatoire\">*</abbr>"
                    ?>
                </label><br>
                <input type="password" name="validePassword"
                       id="validePassword"
                    <?php if (isset($modification_profil))
                    echo "value=\"\"/>";
                    else { ?>
                       required="required"
                       aria-required="true"/>
                <?php } ?>
                <span id="validePassword_erreur"><?php echo $validePassword_err ?></span>
            </p>
        </div>

        <p>
            Type d'emploi <abbr title="Champ obligatoire">*</abbr><br/>
            <input type="radio" name="emplois" value="Pilote"
                   id="Pilote"
                <?php if (isset($modification_profil) && $type_emploi == "Pilote") echo "checked";
                else if (isset($emplois) && $emplois == "Pilote") echo "checked";
                ?>/>
            <label for="Pilote">Pilote</label>

            <input type="radio" name="emplois" value="PersonnelAuSol"
                   id="PersonnelAuSol"
                <?php if (isset($modification_profil) && $type_emploi == "PersonnelAuSol") echo "checked";
                else if (isset($emplois) && $emplois == "PersonnelAuSol") echo "checked";
                ?>/>
            <label for="PersonnelAuSol">Personnel au sol</label>

            <input type="radio" name="emplois" value="PersonnelNaviguant"
                   id="PersonnelNaviguant"
                <?php if (isset($modification_profil) && $type_emploi == "PersonnelNaviguant") echo "checked";
                else if (isset($emplois) && $emplois == "PersonnelNaviguant") echo "checked";
                ?>/>
            <label for="PersonnelNaviguant">Personnel naviguant</label>
            <span id="emplois_erreur"><?php echo $emplois_err ?></span>
        </p>
        <p>
            Photo de profil (< 2 Mo) :<br/>
            <input type="file" name="PhotoProfil" id="PhotoProfilId" onchange="fichierSelectionne()"/>
            <label id="PhotoProfilLabel">Choisissez un fichier</label>
            <?php if (isset($modification_profil) && $nom_photo_profil != null) { ?>
                <script> placeHolder(<?php echo "'" . explode("_", $nom_photo_profil)[1] . "'" ?>) </script>
            <?php } ?>
        </p>

        <p>
            <?php
            $retour = isset($retour) ? $retour : "/";
            ?><a href="<?php echo $retour ?>">Retour</a>

        <?php
        if (isset($_GET['identifiant_invalide'])) { ?><p style="color:blue">Identifiant invalide (vide ou déjà pris)</p>
            <?php
        } else if (isset($_GET['confirmation_mdp_erronee'])) { ?><p style="color:blue">Le mot de passe renseigné ne
            correspond pas à sa confirmation</p>
        <?php } ?><input type="submit" value="Continuer"/>
        </p>
    </form>
</section>
<script src="/scripts/validation_formulaire_creation_compte.js"></script>
</body>
</html>
