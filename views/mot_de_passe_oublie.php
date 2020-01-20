<?php include "header.php" ?>

<body>

<section id="sec1">
    <img id="imgAirplane" src="../ressources/images/imgAirplane1.jpg">
</section>
<section id="sec2">
    <div1>
        <form action="" method="post">
            <p>
                <div4>
                    <label for="nom">Adresse Mail</label>
                    <br>

                    <input type="email" name="Mail" id="Mail" placeholder=" Votre Mail" size="35"/>
                </div4>
                <br><br>

            </p>

            <?php
            // Message si mail renseigné inconnu
            if (isset($_GET['mail_inconnu'])) {
                ?>
                <p id="error">Adresse email inconnue</p>
                <?php
            } else if (isset($_GET['mail_ok'])) {
                ?>
                <p>Un email de réinitialisation de votre mot de passe vous a été envoyé à l'adresse renseignée.</p>
                <?php
            } else if (isset($_GET['mail_ko'])) {
                ?>
                <p style="color: red">L'opération a échoué</p>
                <?php
            }
            ?>

            <input id="con" type="submit" value="Récupérer mon mot de passe">
        </form>
        <p>
            <?php $php_self = htmlspecialchars($_SERVER["PHP_SELF"]) ?>
            <button id="cree"
                    onclick="window.location.href = '../controllers/contact_administrateur.php?retour=<?php echo $php_self ?>'">
                Contacter un
                Administrateur
            </button>
        </p>
    </div1>
    <div id="divRet">
        <button id="Retour" onclick="window.location.href = '../index.php'">Retour</button>
    </div>
</section>

</body>
