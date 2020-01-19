<?php
include "verif_acces_authorise.php";
include $_SERVER["DOCUMENT_ROOT"] . "/scripts/clean_user_input.php";
if ($acces_authorise) {
    include "../../views/admin/administration_FAQ.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ajout question à la FAQ
        if (isset($_POST["nouvelleQuestion"]) && isset($_POST["reponseQuestion"])) {
            $nouvelle_question = clean_user_input($_POST["nouvelleQuestion"]);
            $reponse_question = clean_user_input($_POST["reponseQuestion"]);
            include("../../models/admin/ajouter_question_faq.php");

        } // Suppression question de la FAQ
        else if (isset($_POST["supprimerQuestion"])) {
            $id_question_supprimer = clean_user_input($_POST["supprimerQuestion"]);
            include("../../models/admin/supprimer_question_faq.php");
        }
        if ($status) redirection("?succes");
        else redirection("?echec");
    }
}
