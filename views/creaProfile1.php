<body>
<script src="../scripts/upload_fichier_nom_dynamique.js"></script>
<section id="sec1">
    <img id="imgPageDeCo" src="../ressources/images/creaProfile1.png">
</section>
<section id="sec2">
    <?php
    if (isset($modification_profil)) echo "<h1>Modification de votre profil</h1>";
    else echo "<h1>Création de votre profil</h1>"; ?>
    <form action="" method="post" enctype="multipart/form-data">
        <!--        Cet enctype est nécessaire pour l'upload de fichier via le formuaire-->
        <div id="name">
            <p><label for="Prenom">Prénom :</label>
                <br>
                <input type="text" name="Prenom" id="Prenom"
                       placeholder="Votre Prénom" <?php if (isset($modification_profil)) echo "value=\"$prenom\"" ?>/>
            </p>

            <p><label for="Nom">Nom :</label><br>
                <input type="text" name="Nom" id="Nom"
                       placeholder="Votre Nom" <?php if (isset($modification_profil)) echo "value=\"$nom\"" ?>/></p>
        </div>
        <br/>
        <div id="phone">
            <p><label for="dateNaissance">Date de Naissance :</label><br>
                <input type="date" name="dateNaissance" id="dateNaissance"
                       placeholder="jj/mm/année" <?php if (isset($modification_profil)) echo "value=\"$date_de_naissance\"" ?>/>
            </p>

            <p><label for="numeroTel">Numéro de téléphone :</label><br>
                <input type="tel" name="numeroTel" id="numeroTel"
                       placeholder="00.00.00.00.00" <?php if (isset($modification_profil)) echo "value=\"$telephone\"" ?>/>
            </p>
        </div>
        <br/>
        <div id="mail">
            <p><label for="email">Email :</label><br>
                <input type="email" name="email" id="email"
                       placeholder="Votre adresse mail" <?php if (isset($modification_profil)) echo "value=\"$adresse_email\"" ?>/>
            </p>
            <?php if (!isset($modification_profil)) { ?>
                <p><label for="identifiant">Identifiant :</label><br>
                    <input type="text" name="identifiant" id="identifiant"
                           placeholder="Identifiant" <?php if (isset($modification_profil)) echo "value=\"$identifiant\"" ?>/>
                </p>
            <?php } ?>
        </div>
        <br>
        <?php if (isset($modification_profil)) { ?>
            <p>Modifiez votre mot de passe :</p>
            <div id="mdp">
                <p><label for="password">Mot de passe actuel :</label><br>
                    <input type="password" name="password_ancien" id="password"/>
                </p>
            </div>
        <?php } ?>
        <br>
        <div id="mdp">
            <p>
                <label for="password"><strong><?php echo isset($modification_profil) ? "Nouveau mot de passe :" : "Mot de passe :" ?></strong></label><br>
                <input type="password" name="password"
                       id="password" <?php if (isset($modification_profil)) echo "value=\"\"" ?>/></p>

            <p><label for="validePassword">Confirmation du mot de passe :</label><br>
                <input type="password" name="validePassword"
                       id="validePassword" <?php if (isset($modification_profil)) echo "value=\"\"" ?>/></p>
        </div>

        <p>
            Type d'emploi : <br/>
            <input type="radio" name="emplois" value="Pilote"
                   id="Pilote" <?php if (isset($modification_profil) && $type_emploi == "Pilote") echo "checked" ?>/>
            <label for="Pilote">Pilote</label>

            <input type="radio" name="emplois" value="PersonnelAuSol"
                   id="PersonnelAuSol"<?php if (isset($modification_profil) && $type_emploi == "PersonnelAuSol") echo "checked" ?>/>
            <label for="PersonnelAuSol">Personnel au sol</label>

            <input type="radio" name="emplois" value="PersonnelNaviguant"
                   id="PersonnelNaviguant"<?php if (isset($modification_profil) && $type_emploi == "PersonnelNaviguant") echo "checked" ?>/>
            <label for="PersonnelNaviguant">Personnel naviguant</label>
        </p>
        <p>
            Photo de profil (< 2 Mo) :<br/>
            <input type="file" name="PhotoProfil" id="PhotoProfilId" onchange="fichierSelectionne()"/>
            <label id="PhotoProfilLabel">Choisissez un fichier</label>
            <?php if (isset($modification_profil)) { ?>
                <script> placeHolder(<?php echo explode("_", $nom_photo_profil)[1] ?>) </script>
            <?php } ?>
        </p>

        <p>
            <a href="../">Retour</a>

            <?php
            if (isset($_GET['identifiant_invalide'])) { ?>
        <p style="color:blue">Identifiant invalide (vide ou déjà pris)</p>
    <?php
    } else if (isset($_GET['confirmation_mdp_erronee'])) { ?>
        <p style="color:blue">Le mot de passe renseigné ne correspond pas à sa confirmation</p>
    <?php } ?><input type="submit" value="Continuer"/>
        </p>
    </form>
</section>
</body>
</html>
