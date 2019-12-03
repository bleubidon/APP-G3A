<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="Stylesheet" href="ressources/stylesheets/Stylesheet_Login.css" />
        <title>Création de votre profil</title>
    </head>

    <body>
    <section id="sec1">
        <img id="imgCreaProfil2" src="ressources/images/creaProfile1.png">
    </section>
    <section id="sec2">
        <form method="post" action="t.php" enctype="multipart/form-data">
            <div id="name">
                <p><label for="Prenom">Prénom :</label><br>
                    <input type="text" name="Prenom" id="Prenom" placeholder="Votre Prénom" size="25"/></p>
                <p><label for="Nom">Nom :</label><br>
                <input type="text" name="Nom" id="Nom" placeholder="Votre Nom" size="25"/></p>
            </div>
            <div id="phone">
                <p><label for="dateNaissance">Date de Naissance :</label>
                <br>
                <input type="date" name="dateNaissance" id="dateNaissance" placeholder="jj/mm/année"/></p>
                <p><label for="numeroTel">Numéro de téléphone :</label>
                <br>
                <input type="tel" name="numeroTel" id="numeroTel" placeholder="00.00.00.00.00" size="25"/>
                </p>
            </div>
            <div id="mail">
                <p><label for="email">Email :</label><br>
                <input type="email" name="email" id="email"placeholder="Votre adresse mail" size="50"/></p>
            </div>
            <div id="mdp">
                <p><label for="passworld"><strong>Mot de passe :</strong></label><br>
                <input type="password" name="passworld" id="passworld"/><br>
                <label for="validePassworld">Confirmation du mot de passe :</label><br>
                <input type="password" name="validePassworld" id="validePassworld"/></p>
            </div>
            <div id="Trav">
            <p> Type d'emplois : </p>
                <input type="radio" name="emplois" value="Pilote" id="Pilote"/>
                    <label  for="Pilote">Pilote</label>
                <input type="radio" name="emplois" value="PersonnelAuSol" id="PersonnelAuSol"/>
                    <label for="PersonnelAuSol">Personnel au sol</label>
                <input type="radio" name="emplois" value="¨PersonnelNaviguant" id="PersonnelNaviguant"/>
                    <label for="PersonnelNaviguant">Personnel naviguant</label>
                <br>
                <p>Upload a photo<br/>
                <input type="file" name="PhotoProfil" id="PP"/>
                <input type="submit" value="Envoyer le fichier" id="envoyerPP"/>
                </p>
                <p><input type="submit" value="Continuer"/>
                <a href="page_accueil.php">Retour</a></p>
            </div>


        </form>
    </section>
    </body>
</html>

