<!--Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json-->
<nav>
    <section id="profil">
        <br>
        <?php if ($_SESSION['nom_photo_profil'] != null) { ?>
            <div class="container" id="profImg"><img id="snake"
                                                     src="/photos_profil/<?php echo $_SESSION['nom_photo_profil'] ?>">
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
            <li><a href="/Historique">Historique</a></li>
            <br>
                <li><a href="/FAQ">FAQ</a></li>
            <?php if ($_SESSION['statut_utilisateur_site'] == "gestionnaire") { ?>
                <br>
                <li><a href="/Gestionnaire-statistiques">Statistiques</a></li><br>
                <li><a href="/Gestionnaire-moteur_de_recherche">Moteur de recherche des utilisateurs</a></li><br>
                <li><a href="/Gestionnaire-gestion_tests_psycho">Gestion des tests psychotechniques</a></li><br>
                <li><a href="/Gestionnaire-gestion_emplois_quels_tests">Gestion des associations emploi - tests psychotehniques</a></li><br>
                <button id="bouton_test"
                        onclick="window.location.href = '/Gestionnaire-faire_passer_test'"> Faire passer un test </button>
            <?php } else if ($_SESSION['statut_utilisateur_site'] == "administrateur") { ?>
                <br>
                <h>Backoffice</h><br><br>
                <li><a href="/Backoffice-liste_utilisateurs">Gestion des utilisateurs</a></li><br>
                <li><a href="/Backoffice-gestion_capteurs">Gestion des capteurs</a></li><br>
                <li><a href="/Backoffice-administration_FAQ">Administration de la FAQ</a></li><br>
            <?php } ?>
        </ul>
    </section>

    <div id="foot">
        <section3>
            <br>
            <p>
                <a href="/Support?retour=/Home">Contacter le support</a></p>
            <p><a href="/A-propos">À propos</a></p>
            <p><a id="CGU" href="/CGU?retour=/Home">CGU et mentions légales</a></p>
        </section3>
        <section4>
            <img id="logoinf" src="/ressources/images/captimove_logo.png">
        </section4>
    </div>
</nav>

<header>
    <?php if ($_SESSION['statut_utilisateur_site'] == "utilisateur") { ?>
        <input type="search" name="Recherche" id="Recherche" placeholder="Recherche" size="110"/>
    <?php } ?>
    <button id="Logout" title="Déconnexion" onclick="window.location.href = '/scripts/deconnexion.php'"></button>
    <button id="settings" title="Modifier votre profil"
            onclick="window.location.href = '/controllers/gestion_formulaire_compte_utilisateur/modification_compte_utilisateur.php'"></button>
    <button id="home" title="Accueil"
            onclick="window.location.href = '/controllers/page_principale_utilisateur.php'"></button>
</header>
