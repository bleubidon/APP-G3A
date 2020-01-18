<?php
include "verif_acces_authorise.php";
if ($acces_authorise) {
    include "../../views/gestionnaire/gestion_tests_psycho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nouveau_test = $_POST["nouveau_test"];
        include "../../models/gestionnaire/insertion_nouveau_test.php";
    }
}
