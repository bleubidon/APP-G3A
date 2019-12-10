<?php
session_start();

if (isset($_SESSION['identifiant'])) {  // Un utilisateur du site est connecté
    function age($date_de_naissance)
    {
        $age = date_diff(date_create($date_de_naissance),
            date_create(date('Y-m-d')));
        $annee = $age->format('%y');
        $mois = $age->format('%m');
        return array($annee, $mois);
    }

    include "../models/recup_infos_utilisateurs_page_principale.php";
    include "../views/page_principale_utilisateur.php";
} else {
    echo "Vous n'êtes pas connecté. <a href ='/'>Me connecter</a>";
}
