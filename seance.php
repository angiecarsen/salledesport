<?php $connecteur = new PDO('mysql:host=localhost;dbname=salledesport','salledesport','hopeforce3');
                    $resultatseance = $connecteur->query('SELECT * FROM seance ;')->fetchAll(PDO::FETCH_ASSOC); 
                      
?>
<!DOCTYPE html>
<html>
<head>
	<title>seance</title>
</head>
<body>
<?php 
$i=0;
while ($i<count($resultatseance)) {
	echo '<article class="container">';
	echo '<h1>intitule</h1>';
	echo '<p class="intitule">'.$resultatseance[$i]['intitule'].'</p>';

	echo '<h2>Heure de début</h2>';
	echo '<p class="heure-debut">'.$resultatseance[$i]['heureDebut'].'</p>';

	echo '<h3>Heure de Fin</h3>';
	echo '<p class="heure-fin">'.$resultatseance[$i]['heureFin'].'</p>';

	$connecteur = new PDO('mysql:host=localhost;dbname=salledesport','salledesport','hopeforce3');

	$resultatdeux = $connecteur->query('SELECT *
FROM coach AS c,seance AS s
WHERE s.idCoach = c.id')->fetchAll(PDO::FETCH_ASSOC);
	echo '<p>'.$resultatdeux[$i]['nomComplet'].'</p>';
	
	echo '</article>';

	$i++;
}
?>
</body>
</html>