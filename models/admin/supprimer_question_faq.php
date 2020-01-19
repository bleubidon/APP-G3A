<?php
include "../../models/connexion_bdd.php";

$query = "DELETE FROM faq WHERE id_question=:id_question";
$sql = $bdd->prepare($query);
$sql->bindParam(':id_question', $id_question_supprimer);
$status = $sql->execute();
