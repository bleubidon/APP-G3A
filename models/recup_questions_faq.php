<?php
include "connexion_bdd.php";
// Récupération des questions de la faq
$query = "SELECT * FROM faq";
$sql = $bdd->prepare($query);
$sql->execute();
$questions_faq = $sql->fetchall(\PDO::FETCH_ASSOC);
