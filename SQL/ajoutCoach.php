 <?php 
session_start();

$connecteur = new PDO('mysql:host=localhost;dbname=salle_sport','salledesport','hopeforce3');

$connecteur->query("INSERT INTO coach (`nomComplet`, `email`, `heureDebut`, `heureFin`, `numeroLicence`") VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]))
 ?>