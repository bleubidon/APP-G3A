<?php session_start();
include "header.php"; ?>

<body>
<?php
include "Mise_en_page.php";  // Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json
?>

<br><br><br>
<p id="title">
    <h>Questions & Réponses</h>
</p>

<br>

<ul id="menu-deroulant">
    <li id="Q"><a href="#" id="Q1">↓ Question 1</a>
        <ul>
            <li><a href="#">Réponse</a></li>
        </ul>
    </li>
    <br>
    <li id="Q"><a href="#" id="Q2">↓ Question 2</a>
        <ul>
            <li><a href="#">Réponse</a></li>
        </ul>
    </li>
    <br>
    <li id="Q"><a href="#" id="Q3">↓ Question 3</a>
        <ul>
            <li><a href="#">Réponse</a></li>
        </ul>
    </li>
    <br>
    <li id="Q"><a href="#" id="Q4">↓ Question 4</a>
        <ul>
            <li><a href="#">Réponse</a></li>
        </ul>
    </li>
    <br>
    <li id="Q"><a href="#" id="Q5">↓ Question 5</a>
        <ul>
            <li><a href="#">Réponse</a></li>
        </ul>
    </li>
</ul>
<br><br>
<button id="retour" onclick="window.location.href = '/controllers/page_principale_utilisateur.php'"> Retour </button>
<button id="Message" onclick="window.location.href = '/controllers/contact_administrateur.php'"> Envoyer un Message </button>
</body>
</html>
