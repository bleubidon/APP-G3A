 <?php
    if (isset($modification_profil)) echo "<h1>Modification de votre profil</h1>";
    else echo "<h1>Création de votre profil</h1>"; ?>

 <body>
    <section id="sec1">

    <form action="" method="post" enctype="multipart/form-data" name="form1" onsubmit="return validationFormulaire()"
          novalidate>
        <!--        L'enctype utilisé ci-dessus est nécessaire pour l'upload de fichier via le formuaire-->
        <div id="name">
            <p><label for="Prenom" style="font-weight: bold">Prénom <abbr title="Champ obligatoire; pas d'accents">*</abbr></label>
                <br>
                <input type="text" name="Prenom" id="Prenom"
                       placeholder="Votre Prénom" size="35"
                    <?php if (isset($modification_profil)) echo "value=\"$prenom\"";
                    else echo "value=\"$Prenom\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^[-\w]+$"/><br>
                <span id="Prenom_erreur" style="color: red"><?php echo $Prenom_err ?></span>
            </p>
            &nbsp;
            &nbsp;
            <p><label for="Nom" style="font-weight: bold">Nom <abbr title="Champ obligatoire">*</abbr></label><br>
                <input type="text" name="Nom" id="Nom"
                       placeholder="Votre Nom" size="35"
                    <?php if (isset($modification_profil)) echo "value=\"$nom\"";
                    else echo "value=\"$Nom\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^[-\w]+$"/><br>
                <span id="Nom_erreur" style="color: red"><?php echo $Nom_err ?></span>
            </p>
        </div>
        <br/>
        <div id="phone">
            <p><label for="dateNaissance" style="font-weight: bold">Date de Naissance <abbr title="Champ obligatoire">*</abbr></label><br>
                <input type="date" name="dateNaissance" id="dateNaissance"
                       placeholder="jj/mm/aaaa" style="font-size: 17px"
                    <?php if (isset($modification_profil)) echo "value=\"$date_de_naissance\"";
                    else echo "value=\"$dateNaissance\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^\d{4}-[01]\d-[0-3]\d$"/><br>
                <span id="dateNaissance_erreur" style="color: red"><?php echo $dateNaissance_err ?></span>
            </p>
            &nbsp;
            &nbsp;
            <p><label for="numeroTel" style="font-weight: bold">Numéro de téléphone <abbr title="Champ obligatoire">*</abbr></label><br>
                <input type="tel" name="numeroTel" id="numeroTel"
                       placeholder="0xxxxxxxxx" size="35"
                    <?php if (isset($modification_profil)) echo "value=\"$telephone\"";
                    else echo "value=\"$numeroTel\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^0\d{9}$"/><br>
                <span id="numeroTel_erreur" style="color: red"><?php echo $numeroTel_err ?></span>
            </p>
        </div>
        <br>
        <div id="mail">
            <p><label for="email" style="font-weight: bold">Email <abbr title="Champ obligatoire">*</abbr></label><br>
                <input type="email" name="email" id="email"
                       placeholder="Votre adresse mail" size="35"
                    <?php if (isset($modification_profil)) echo "value=\"$adresse_email\"";
                    else echo "value=\"$email\"";
                    ?>
                       required="required"
                       aria-required="true"
                       pattern="^[-.\w]+@[-.\w]+.[a-zA-Z]+$"/><br>
                <span id="email_erreur" style="color: red"><?php echo $email_err ?></span>
            </p>
            &nbsp;
            &nbsp;
            <?php if (!isset($modification_profil)) { ?>
                <p><label for="identifiant" style="font-weight: bold">Identifiant <abbr title="Champ obligatoire">*</abbr></label><br>
                    <input type="text" name="identifiant" id="identifiant"
                           placeholder="Identifiant" size="35"
                        <?php if (isset($modification_profil)) echo "value=\"$identifiant\"";
                        else echo "value=\"$identifiant\"";
                        ?>
                           required="required"
                           aria-required="true"
                           pattern="^[a-zA-Z\d]+$"/><br>
                    <span id="identifiant_erreur" style="color: red"><?php echo $identifiant_err ?></span>
                </p>
            <?php } ?></div>
        <?php if (isset($modification_profil)) { ?>
            <p style="color: red; margin-left: 580px">Modifiez votre mot de passe :</p>
            <div id="mdp">
                <p><label for="password" style="font-weight: bold">Mot de passe actuel :</label><br>
                    <input type="password" name="password_ancien" id="password_ancien" size="35"/>
                    <span id="password_ancien_erreur"><?php echo $password_ancien_err ?></span>
                </p>
            </div>
        <?php } ?><br>
        <div id="mdp">
            <p>
                <label for="password" style="font-weight: bold"><strong><?php echo isset($modification_profil) ?
                            "Nouveau mot de passe :</strong>" :
                            "Mot de passe </strong><abbr title=\"Au moins 8 caractères d'au moins 2 types sur 3: lettres minuscules, lettres majuscules, chiffres\">*</abbr>"
                        ?>
                </label><br>

                <input type="password" name="password"
                       id="password" size="35"
                    <?php if (isset($modification_profil))
                    echo "value=\"\"/>";
                    else { ?>
                       required="required"
                       aria-required="true"
                       pattern="^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*\d))|((?=.*[A-Z])(?=.*\d)))(?=.{8,})"/>
                <?php } ?><br>
                <span id="password_erreur" style="color: red"><?php echo $password_err ?></span>
            </p>
            &nbsp;
            &nbsp;
            <p><label for="validePassword " style="font-weight: bold">Confirmation du mot de passe<?php echo isset($modification_profil) ?
                        " :" :
                        "<abbr title=\"Champ obligatoire\">*</abbr>"
                    ?>
                </label><br>
                <input type="password" name="validePassword"
                       id="validePassword" size="35"
                    <?php if (isset($modification_profil))
                    echo "value=\"\"/>";
                    else { ?>
                       required="required"
                       aria-required="true"/>
                <?php } ?><br>
                <span id="validePassword_erreur" style="color: red"><?php echo $validePassword_err ?></span>
            </p>
        </div>

        <p><div id="emplois">
            Type d'emploi : <br> <abbr title="Champ obligatoire">*</abbr><b>
            <input type="radio" name="emplois" value="Pilote"
                   id="Pilote"
                <?php if (isset($modification_profil) && $type_emploi == "Pilote") echo "checked";
                else if (isset($emplois) && $emplois == "Pilote") echo "checked";
                ?>/>
            <label for="Pilote" style="font-weight: bold">Pilote</label><br>

            <input type="radio" name="emplois" value="PersonnelAuSol"
                   id="PersonnelAuSol"
                <?php if (isset($modification_profil) && $type_emploi == "PersonnelAuSol") echo "checked";
                else if (isset($emplois) && $emplois == "PersonnelAuSol") echo "checked";
                ?>/>
            <label for="PersonnelAuSol" style="font-weight: bold">Personnel au sol</label><br>

            <input type="radio" name="emplois" value="PersonnelNaviguant"
                   id="PersonnelNaviguant"
                <?php if (isset($modification_profil) && $type_emploi == "PersonnelNaviguant") echo "checked";
                else if (isset($emplois) && $emplois == "PersonnelNaviguant") echo "checked";
                ?>/>
            <label for="PersonnelNaviguant" style="font-weight: bold">Personnel naviguant</label><br>
            <span id="emplois_erreur"><?php echo $emplois_err ?></span>
        </div>
        </p>
        <p><div id="photo">
            Photo de profil (< 2 Mo) :<br>
            <input style="width: 100px" type="file" name="PhotoProfil" id="PhotoProfilId" onchange="fichierSelectionne()"/> &nbsp;
            <label id="PhotoProfilLabel" style="font-weight: bold">Choisissez un fichier</label>
            <?php if (isset($modification_profil) && $nom_photo_profil != null) { ?>
                <script> placeHolder(<?php echo "'" . explode("_", $nom_photo_profil)[1] . "'" ?>) </script>
            <?php } ?>
        </div>
        </p>

        <p><div id="boutons" >
            <?php
            $retour = isset($retour) ? $retour : "/index.php";
            ?><button id="bouton_retour" onclick="window.location.href= '<?php echo $retour ?>'">Retour</button>

        <?php
        if (isset($_GET['identifiant_invalide'])) { ?><p style="color:blue">Identifiant invalide (vide ou déjà pris)</p>
            <?php
        } else if (isset($_GET['confirmation_mdp_erronee'])) { ?><p style="color:blue">Le mot de passe renseigné ne
            correspond pas à sa confirmation</p>
        <?php } ?> &nbsp;<input id="con" type="submit" value="Continuer"/></div>
        </p>
    </form>
</section>
<script src="/scripts/validation_formulaire_creation_compte.js"></script>
</body>
</html>
