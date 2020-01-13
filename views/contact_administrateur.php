<?php include "../views/header.php" ?>

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
        <form action="" method="post">
            <div2>
                <p>
                    <label for="nom">Nom, Prénom</label>
                    <br>
                    <input type="text" name="nom_prenom" id="nom_prenom" placeholder=" Votre prénom , nom" size="100"/>
                </p>
            </div2>
            <br>

            <div3>
                <p>
                    <label for="mail">Mail</label>
                    <br><input type="mail" name="mail" id="mail" placeholder="Votre mail" size="100"/>
                </p>
            </div3>
            <br>

            <div4>
                <p>
                    <label for="message">Message</label>
                    <br>
                    <textarea name="message" id="message" placeholder="Votre message" cols="100" rows="5"></textarea>
                </p>
            </div4>

            <?php if (isset($_GET['email_envoye'])) { ?>
                <p>Votre message a bien été envoyé.</p>
            <?php } ?>

            <div8 id="conteneur2">

                <div9>
                    <input id="bouton_envoi" type="submit" value="Envoyer l'email">
                </div9>
                <br>
        </form>
        </div8>
        <div10>
            <?php
            $retour = isset($_GET['retour']) ? $_GET['retour'] : "/";
            ?>
            <button id="bouton_retour" onclick="window.location.href = '<?php echo $retour ?>'">Retour</button>
        </div10>


        <br><br><br>
        <br><br><br>
        <br><br><br>

        <p class="footer">CAPTEST</p>
        </div1>
    </section>
</div6>
</body>
</html>
