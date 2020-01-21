<body>
<section id="">
    <?php
    if (isset($modification_profil)) { ?>
        <h2 style="color:blue; text-align: center">Les changements apportés à votre profil ont été pris en compte.</h2>
        <a style="justify-content: center" href="../../controllers/page_principale_utilisateur.php">Retour à ma page principale</a>
    <?php } else { ?>
        <h2 style="color:blue">Inscription réussie !</h2>
        <a href="../..">Identifiez-vous</a>
    <?php } ?>
</section>
</body>
</html>
