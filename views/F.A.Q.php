<?php
include "header.php"; ?>
<body>
<?php
include "Mise_en_page.php";  // Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json
?>

<div id="section_centrale">
    <p id="title">
        <h>Questions & Réponses</h>
    </p>

    <br>
    <ul id="menu-deroulant">
        <?php
        foreach ($questions_faq as &$question_faq) {
            echo "<li id='Q'><p>Id: " . $question_faq["id_question"] . "</p><p>" . $question_faq["contenu_question"] . "</p>
            <ul>
                <li><p>" . $question_faq["contenu_reponse"] . "</p></li>
            </ul>
        </li>
        <br>";
        }
        ?>
    </ul>
</div>
</body>
</html>
