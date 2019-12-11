<!--uniquement barre latérale sans onglet statistiques, sans barre de recherche-->

<nav>
    <section id="profil">
        <br>
        <?php if ($_SESSION['nom_photo_profil'] != null) { ?>
            <div class="container" id="profImg"><img id="snake" src="/photos_profil/<?php echo $_SESSION['nom_photo_profil'] ?>">
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
            <li><a href="Profile.html">Profil</a></li><br>
            <li><a href="Historique.html">Historique</a></li><br>
            <li><a href="administration_FAQ.php">FAQ</a></li>
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
            <img id="logoinf" src="/ressources/images/captimove_logo.png">
        </section4>
    </div>
</nav>

<header>
    <button id="Logout" title="Déconnexion" onclick="window.location.href = '/scripts/deconnexion'"></button>
    <button id="settings" title="Modifier votre profil"
            onclick="window.location.href = '/controllers/modification_compte_utilisateur.php'"></button>
    <button id="home" title="Accueil"
            onclick="window.location.href = '/controllers/page_principale_utilisateur.php'"></button>
</header>