<?php
$parent_filename = basename($_SERVER['PHP_SELF']);
include("../views/header.php");
include("../views/creation_compte_utilisateur.php");

// Inscription d'un nouvel utilisateur
if (isset($_POST['identifiant']) && isset($_POST['password'])) {
    include("../models/insertion_compte_utilisateur.php");
    header('location:?creation_compte_reussie');
}
