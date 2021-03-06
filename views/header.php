<?php
// Récupération du nom de la page qui demande un header
$include_tree = get_included_files();
array_pop($include_tree);
$fichier_parent = str_replace("\\", "/", explode("APP-G3A", end($include_tree))[1]);
// Récupération des infos associés à cette page
$stylesheets_et_titres = file_get_contents("{$_SERVER['DOCUMENT_ROOT']}/stylesheets_et_titres.json");
$json_all = json_decode($stylesheets_et_titres, true);

// Stylesheets (il peut y en avoir plusieurs)
if (isset($json_all["stylesheets"][$fichier_parent])) {
    $stylesheets = $json_all["stylesheets"][$fichier_parent];
}

// JavaScripts (il peut y en avoir plusieurs)
if (isset($json_all["scripts"][$fichier_parent])) {
    $javascripts = $json_all["scripts"][$fichier_parent];
}

// Titre (il est unique)
if (isset($json_all["titres"][$fichier_parent])) {
    $titre = $json_all["titres"][$fichier_parent];
}

// Inclusion des scripts php
//foreach (glob($_SERVER["DOCUMENT_ROOT"] . "/scripts/*.php") as $nom_script){
//    include $nom_script;
//}
include $_SERVER["DOCUMENT_ROOT"] . "/scripts/redirection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="/ressources/images/favicon.png">
    <?php
    if (isset($stylesheets)) {
        foreach ($stylesheets as &$stylesheet) {
            echo "<link rel=\"Stylesheet\" href=\"/ressources/stylesheets/$stylesheet\">\n";
        }
    }
    if (isset($javascripts)) {
        foreach ($javascripts as &$javascript) {
            echo "    <script src=\"/scripts/$javascript\"></script>\n";
        }
    }
    if (isset($titre)) {
        echo "    <title>$titre</title>\n";
    }
    ?>
</head>
