<?php $connecteur = new PDO('mysql:host=localhost;dbname=salle de sport','salledesport','Totodu21');
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
	echo '<h1>intitule</h1>';
	echo '<p>'.$resultatseance[$i]['intitule'].'</p>';

	echo '<h2>Heure de début</h2>';
	echo '<p>'.$resultatseance[$i]['heureDebut'].'</p>';

	echo '<h3>Heure de Fin</h3>';
	echo '<p>'.$resultatseance[$i]['heureFin'].'</p>';
	$i++;
}
?>
</body>
</html>