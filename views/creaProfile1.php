<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="Stylesheet" href="../ressources/stylesheets/Stylesheet_Login.css" />
        <title>Création de votre profil</title>
    </head>

    <body>
    <section id="sec1">
        <img id="imgPageDeCo" src="../ressources/images/creaProfile1.png">
    </section>
    <section id="sec2">
        <h1>Création de votre profil</h1>

        <form method="post" action="" enctype="multipart/form-data">
            <div id="name">
                <p><label for="Prenom">Prénom :</label>
                <br>
                <input type="text" name="Prenom" id="Prenom" placeholder="Votre Prénom"/></p>

                <p><label for="Nom">Nom :</label><br>
                <input type="text" name="Nom" id="Nom" placeholder="Votre Nom"/></p>
            </div>
                <br />
            <div id="phone">
                <p><label for="dateNaissance">Date de Naissance :</label><br>
                <input type="date" name="dateNaissance" id="dateNaissance" placeholder="jj/mm/année"/></p>

                <p><label for="numeroTel">Numéro de téléphone :</label><br>
                <input type="tel" name="numeroTel" id="numeroTel" placeholder="00.00.00.00.00"/></p>
            </div>
                <br />
            <div id="mail">
                <p><label for="email">Email :</label><br>
                    <input type="email" name="email" id="email"placeholder="Votre adresse mail"/></p>

                <p><label for="identifiant">Identifiant :</label><br>
                    <input type="text" name="identifiant" id="identifiant"placeholder="Identifiant"/></p>
            </div>
            <br>
            <div id="mdp">
                <p><label for="password"><strong>Mot de passe :</strong></label><br>
                <input type="password" name="password" id="password"/></p>

                <p><label for="validePassword">Confirmation du mot de passe :</label><br>
                <input type="password" name="validePassword" id="validePassword"/></p>
            </div>

            <p>
                Type d'emploi : <br/>

                <input type="radio" name="emplois" value="Pilote" id="Pilote"/>
                <label  for="Pilote">Pilote</label>

                <input type="radio" name="emplois" value="PersonnelAuSol" id="PersonnelAuSol"/>
                <label for="PersonnelAuSol">Personnel au sol</label>

                <input type="radio" name="emplois" value="PersonnelNaviguant" id="PersonnelNaviguant"/>
                <label for="PersonnelNaviguant">Personnel naviguant</label>
            </p>

            <p>
                Upload a photo<br/>
                    <input type="file" name="PhotoProfil"/><br/>
                <input type="submit" value="Envoyer le fichier"/>
            </p>

            <p>
                <a href="../">Retour</a>

                <?php
                    if (isset($_GET['identifiant_invalide'])) {
                ?>
                    <p style="color:blue">Identifiant invalide (vide ou déjà pris)</p>
                <?php
                    }
                    else if (isset($_GET['confirmation_mdp_erronee'])) {
                ?>
                    <p style="color:blue">Le mot de passe renseigné ne correspond pas à sa confirmation</p>
                <?php } ?>


                <input type="submit" value="Continuer"/>
            </p>
        </form>
    </section>
    </body>
</html>
