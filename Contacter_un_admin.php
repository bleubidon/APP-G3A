<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="ressources/stylesheets/Stylesheet_Contacter_un_admin.css" />
    <title>Contacter un administrateur</title>
</head>

<body>

<section id="Section1">  <!-- place l'image contacter un admin dans une section -->
    <br><br>
    <br><br>
    <br><br>
</section>

<section id="section2"> <!-- place le texte associé à droite, dans une 2e section -->
    <br>
    <div1>
        <h1>Vous voulez qu’on jette un oeil sur vous préoccupations?</h1>
        <br>
            <div2>
                <form action="" method="">
                    <p>
                        <label for="nom">Nom Prénom</label>
                        <br>
                        <input type="text" name="nom_prenom" id="nom_prenom" placeholder=" Votre prénom , nom" size="35"/>
                    </p>
                </form>
            </div2>

            <div3>
                <form action="" method="">
                    <p>
                        <label for="mail">Mail</label>
                        <br>
                        <input type="mail" name="mail" id="mail" placeholder="Votre mail" size="35"/>
                    </p>
                </form>
            </div3>

            <div4>
                <form action="" method="">
                    <p>
                        <label for="numero">Numéro</label>
                        <br>
                        <input type="text" name="numero" id="numero" placeholder="Votre numéro" size="35"/>
                    </p>
                </form>
            </div4>

            <div5>
                <form action="" method="">
                    <p>
                        <label for="message">Message</label>
                        <br>
                        <textarea name="message" id="message" placeholder=" Votre message" cols="55" rows="5"></textarea>
                    </p>
                </form>
            </div5>


        <form action="" method="">
            <input id="bouton_envoi" type="submit" value="Envoyer l'email">
        </form>

        <input id="bouton_retour" type="submit" value="Retour">

    </div1>
</section>
</body>

<?php

?>