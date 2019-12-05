<?php
session_start();

function age($date_de_naissance) {
    $age = date_diff(date_create($date_de_naissance),
        date_create(date('Y-m-d')));
    $annee = $age->format('%y');
    $mois = $age->format('%m');
    return array($annee, $mois);
}

include('../models/recup_infos_utilisateurs_page_principale.php');
include('../views/page_principale_utilisateur.php');
