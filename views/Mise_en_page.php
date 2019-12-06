<!--Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json-->
<nav>
    <section id="profil">
        <br>
        <?php if ($nom_photo_profil != null) { ?>
            <div class="container" id="profImg"><img id="snake" src="/photos_profil/<?php echo $nom_photo_profil ?>">
            </div>
        <?php } else { ?>
            <div class="container" id="profImg">
            </div>
        <?php } ?>
        <p><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ?> &lt;<?php echo $_SESSION['identifiant'] ?>&gt;</p>
        <br>
        <?php echo ucfirst($_SESSION['statut_utilisateur_site']) ?>
    </section>

    <section>
        <ul>
            <h>Fonctionnalités</h>
            <br><br>
            <li><a href="Profile.html">Profil</a></li>
            <li><a href="Historique.html">Historique</a></li>
            <li><a href="faq.html">FAQ</a></li>
        </ul>
    </section>

    <div id="foot">
        <section3>
            <br>
            <p><a href="/controllers/contact_administrateur.php?retour=<?php echo $_SERVER['PHP_SELF'] ?>">Contacter le
                    support</a></p>
            <p><a href="/views/a_propos.html">À propos</a></p>
            <p><a id="CGU" href="/views/cgu.html">CGU et mentions légales</a></p>
        </section3>
        <section4>
            <img id="logoinf" src="/ressources/images/infinite_mesure.png">
        </section4>
    </div>
</nav>

<header>
    <input type="search" name="Recherche" id="Recherche" placeholder="Recherche" size="110"/>
    <button id="Logout" title="Déconnexion" onclick="window.location.href = '/controllers/deconnexion'"></button>
    <button id="settings" title="Parametres"
            onclick="window.location.href = '/modifier_parametres_compte.php'"></button>
    <button id="home" title="Accueil"
            onclick="window.location.href = '/controllers/page_principale_utilisateur.php'"></button>
</header>
