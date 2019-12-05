<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="../ressources/stylesheets/Stylesheet_contact_administrateur.css" />
    <title>Contacter un administrateur</title>
</head>

<body>
<br>
<br><br>
<br><br>

    <section class="Section1"><!-- place l'image contacter un admin dans une section -->
        <div7>
            <img class="imgContactAdmin" src="../ressources/images/contact.jpg">
        </div7>
    </section>

<div6 id="conteneur1">

    <section class="section2"> <!-- place le texte associé à droite, dans une 2e section -->
    <br>
        <h1>Vous voulez qu’on jette un œil sur vos préoccupations ?</h1>
        <br>
        <form action="" method="get">
            <div2>
                <p>
                    <label for="nom">Nom Prénom</label>
                    <br>
                    <input type="text" name="nom_prenom" id="nom_prenom" placeholder=" Votre prénom , nom" size="55"/>
                </p>
            </div2>
        <br>

            <div3>
                <p>
                    <label for="mail">Mail</label>
                    <br><input type="mail" name="mail" id="mail" placeholder="Votre mail" size="55"/>
                    </p>
            </div3>
        <br>

            <div4>
                <p>
                    <label for="numero">Numéro</label>
                    <br>
                    <input type="text" name="numero" id="numero" placeholder="Votre numéro" size="55"/>
                </p>
            </div4>
        <br>

            <div5>
                <p>
                    <label for="message">Message</label>
                    <br>
                    <textarea name="message" id="message" placeholder=" Votre message" cols="55" rows="5"></textarea>
                </p>
            </div5>
        <br><br>
        <br><br>

        <div8 id="conteneur2">

            <div9>
                <input id="bouton_envoi" type="submit" value="Envoyer l'email">
            </div9>
            <br>

            <div10>
                <button id="bouton_retour" onclick="window.location.href = 'mot_de_passe_oublie.php'">Retour</button>
            </div10>

        </div8>
        </form>

        <br><br><br>
        <p class="footer">CAPTEST</p>
    </div1>
</section>
</div6>
</body>



<?php

?>