<?php
session_start();
// Récupérer les données d'historique de l'utilisateur
$identifiant = $_SESSION["identifiant"];
include "../models/recup_donnees_historique.php";
include "../views/historique.php";
