<?php 
session_start();

$conn = new PDO('mysql:host=localhost;dbname=salle_sport','salledesport','hopeforce3');

$info = $connecteur->query('SELECT * FROM adherent')->fetchAll(PDO::FETCH_ASSOC);
?>