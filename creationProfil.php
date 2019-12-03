<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Création de votre profil</title>
    </head>

    <body>
        <form method="post" action="t.php" enctype="multipart/form-data">
            <p>
                <label for="Prenom">Prénom *</label>
                <input type="text" name="Prenom" id="Prenom" placeholder="Votre Prénom"/>

                <label for="Nom">Nom *</label>
                <input type="text" name="Nom" id="Nom" placeholder="Votre Nom"/>

                <br />
                <label for="dateNaissance">Date de Naissance *</label>
                <input type="date" name="dateNaissance" id="dateNaissance" placeholder="jj/mm/année"/>

                <label for="numeroTel">Numéro de téléphone *</label>
                <input type="tel" name="numeroTel" id="numeroTel" placeholder="00.00.00.00.00"/>

                <br />
                <label for="email">Email *</label>
                <input type="email" name="email" id="email"placeholder="Votre adresse mail"/>

                <br/>
                <label for="passworld"><strong>Mot de passe *</strong></label>
                <input type="password" name="passworld" id="passworld"/>

                <label for="validePassworld">Confirmation du mot de passe</label>
                <input type="password" name="validePassworld" id="validePassworld"/>
            </p>

            <p>
                Type d'emplois * <br/>

                <input type="radio" name="emplois" value="Pilote" id="Pilote"/>
                <label  for="Pilote">Pilote</label>

                <input type="radio" name="emplois" value="PersonnelAuSol" id="PersonnelAuSol"/>
                <label for="PersonnelAuSol">Personnel au sol</label>

                <input type="radio" name="emplois" value="¨PersonnelNaviguant" id="PersonnelNaviguant"/>
                <label for="PersonnelNaviguant">Personnel naviguant</label>
            </p>

            <p>
                Upload a photo<br/>
                <input type="file" name="PhotoProfil"/><br/>
                <input type="submit" value="Envoyer le fichier"/>
            </p>



            <p>
                <a href="page_accueil.php">Retour</a>
                <input type="submit" value="Continuer"/>
            </p>


        </form>
    </body>
</html>

