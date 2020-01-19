<?php
include "../../models/connexion_bdd.php";

$query = "INSERT INTO faq(contenu_question, contenu_reponse) VALUES(:contenu_question, :contenu_reponse)";
$sql = $bdd->prepare($query);
$sql->bindParam(':contenu_question', $nouvelle_question);
$sql->bindParam(':contenu_reponse', $reponse_question);
$status = $sql->execute();
