<nav>
    <section id="profil">
        <br>
        <div class="container" id="profImg"><img id="snake" src="../ressources/images/snake2.jpg"></div>
        <p><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ?> &lt;<?php echo $_SESSION['identifiant'] ?>&gt;</p>
        <br>
        <?php echo ucfirst($_SESSION['statut_utilisateur_site']) ?>
    </section>

    <section>
        <ul>
            <h>Fonctionnalités</h>
            <br><br>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="Profile.html">Profil</a></li>
            <li><a href="Historique.html">Historique</a></li>
            <li><a href="forum.html">Forum</a></li>
        </ul>
    </section>

    <div id="foot">
        <section3>
            <br>
            <p><a href="contact.html">Contacter le support</a></p>
            <p><a href="Apropos.html">À propos</a></p>
            <p><a href="acceuil.html">Se déconnecter</a></p>
            <p><a id="CGU" href="CGU.html">CGU et mentions légales</a></p>
        </section3>
        <section4>
            <img id="logoinf" src="../ressources/images/infinite_mesure.png">
        </section4>
    </div>
</nav>

<header>
    <input type="search" name="Recherche" id="Recherche" placeholder=" Recherche" size="110"/>
    <button id="Logout" title="Déconnexion" onclick="window.location.href = '/index.php'"></button>
    <button id="settings" title="Parametres" onclick="window.location.href = 'modifier_parametres_compte.php'"></button>
    <button id="home" title="Accueil" onclick="window.location.href = ''"></button>
</header>
