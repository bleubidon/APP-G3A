<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=captest;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Connexion échouée: ' . $e->getMessage());
}
