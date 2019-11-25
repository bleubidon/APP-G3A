<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Captest</title>
</head>

<body>
<?php try { $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '' , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
catch (Exception $e) { die('Erreur : ' . $e->getMessage()); }  ?>

<?php $Mdp = $bdd -> query('SELECT Mdp From client');
$row = $Mdp -> fetch();?>


<?php if (isset($_POST['Password']) AND $_POST['Password'] == $row[0]) {
        include("Mise_en_page.php");
    }
    else {
        include("Page_de_connexion_erreurmdp.php");
    }
?>

</body>
</html>