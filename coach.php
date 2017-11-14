<?php $connecteur = new PDO('mysql:host=localhost;dbname=salle de sport','salledesport','Totodu21');
                    $resultatcoach = $connecteur->query('SELECT * FROM coach ;')->fetchAll(PDO::FETCH_ASSOC); 
                    var_dump($resultatcoach)


    ?>



<!DOCTYPE html>
<html>
<head>
	<title>COACH</title>
</head>
<body>
	
	 <?php
	 $i=0;
	 while ($i<count($resultatcoach)) {
	 	echo '<h1>coach</h1>';
	  echo '<p>'.$resultatcoach[$i]['nomComplet'].'</p>'; 

	

	echo '<h3>email</h3>';
	echo '<p>'.$resultatcoach[$i]['email'].'</p>';

	echo '<p>heure de début</p>';
	echo '<p>'.$resultatcoach[$i]['heureDebut'].'</p>';

	
	echo '<p>heure de fin</p>';
	echo '<p>'.$resultatcoach[$i]['heureFin'].'</p>';


	 echo'<h5>numéros de licence</h5>';
	 echo '<p>'.$resultatcoach[$i]['numeroLicence'].'<p>';
	$i++;
}
	?>
	
</body>
</html>