<?php
include "verif_acces_authorise.php";
if ($acces_authorise) {
    include "../../views/admin/backoffice_view.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $identifiant = $_POST["identifiant"];
        $statut = $_POST["statut"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $date_de_naissance = $_POST["date_de_naissance"];
        $telephone = $_POST["telephone"];
        $email = $_POST["email"];
        $mot_de_passe_hache = password_hash($_POST["mot_de_passe"], PASSWORD_ARGON2I);
        $emploi = $_POST["emploi"];
        $genre = $_POST["genre"];
        $poids = $_POST["poids"];
        $taille = $_POST["taille"];
        $groupe_sanguin = $_POST["groupe_sanguin"];
        $sommeil_moyen = $_POST["sommeil_moyen"];
        $pathologie = $_POST["pathologie"];

        include "../../models/admin/insertion_nouvel_utilisateur.php";
    }
}
