<body style="overflow: auto">
<section class="section_centrale">
    <?php
    if (isset($modification_profil)) { ?>
        <h1>Les changements apportés à votre profil ont été pris en compte.</h1>
        <a style="justify-content: center" href="../../controllers/page_principale_utilisateur.php">Retour à ma page
            principale</a>
    <?php } else { ?>
        <h1>Inscription réussie !</h1>
        <a href="../..">Identifiez-vous</a>
    <?php } ?>
</section>
</body>
</html>
