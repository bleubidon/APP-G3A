<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Réinitialisation de votre mot de passe</title>
    <link rel="Stylesheet" href="../ressources/stylesheets/Stylesheet_login.css" />
</head>
<body>
    <form action="" method="post">
        <p>
            <div4>
                <label for="password">Votre nouveau mot de passe</label>
                <br>
                <input type="password" name="password" id="password" placeholder="Mon nouveau mot de Passe" size="35"/>
            </div4>
        </p>

        <?php
        if (isset($_GET['fini'])) {
        ?>
            <p>
                Demande prise en compte. Si elle était valide, vous pouvez à présent vous <a href="../index.php">connecter</a>
            </p>
        <?php } ?>

        <input id="con" type="submit" value="Envoyer">
    </form>

</body>
</html>