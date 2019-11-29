<?php
$stylesheets_map = file_get_contents("{$_SERVER['DOCUMENT_ROOT']}/stylesheets_map.json");
$json_all = json_decode($stylesheets_map, true);
if (isset($json_all[$parent_filename])) {
    $stylesheet = $json_all[$parent_filename];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    if (isset($stylesheet)) {
        echo "<link rel=\"Stylesheet\" href=\"stylesheets/$stylesheet\">";
    }
    ?>

    <title>Captest</title>
</head>