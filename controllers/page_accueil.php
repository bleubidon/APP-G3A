<?php
$parent_filename = basename($_SERVER['PHP_SELF']);
include("../views/header.php");
?>

<?php
include('../models/verif_auth_utilisateur.php');

if (isset($_POST['Password']) AND $_POST['Password'] == $row[0]) {
    header("location:../Mise_en_page.php");
}
else {
    header("location:../index.php?erreur_login");
}
?>

</html>