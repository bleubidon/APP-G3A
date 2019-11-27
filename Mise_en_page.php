<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" href="stylesheets/Stylesheet.css" />
    <title>Mise en page</title>
</head>
<body>
<nav>
    <section id="profil">
        <br>
        <div class="container" id="profImg"><img id="snake" src="images/snake2.jpg"></div>
        <?php try { $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '' , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
        catch (Exception $e) { die('Erreur : ' . $e->getMessage()); }  ?>

        <?php $rep = $bdd->query('SELECT * FROM client'); ?>
        <?php $don = $rep->fetch() ?>

        <?php echo $don['Nom'] .' '. $don['Prénom'] ?>
        <br>
        <?php echo $don['Statut'] ?>

        <?php $rep->closeCursor(); ?>
    </section>
    </section>

    <section>
        <ul>
            <h>Fonctionnalités</h><br><br>
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
            <img id="logoinf" src="images/infinite_mesure.png">
        </section4>
    </div>
</nav>

<header>
    <input type="search" name="Recherche" id="Recherche" placeholder=" Recherche" size="110"/>
    <button id="Logout" title="Déconnexion" onclick="window.location.href = 'Page_de_connexion.php';"></button>
    <button id="settings" title="Parametres" onclick="window.location.href = '';"></button>
    <button id="home" title="Accueil" onclick="window.location.href = '';"></button>
</header>

</body>
</html>
