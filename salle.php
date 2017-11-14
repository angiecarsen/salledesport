<?php $connecteur = new PDO('mysql:host=localhost;dbname=salle de sport','salledesport','cfjacquet15');
          $resultatsalle = $connecteur->query('SELECT * FROM salle ;')->fetchAll(PDO::FETCH_ASSOC); 
                    var_dump($resultatsalle)


    ?>



<!DOCTYPE html>
<html>
<head>
	<title>SALLE</title>
</head>
<body>
	
	 <?php
	 $i=0;
	 while ($i<count($resultatsalle)) {
	 	echo '<h1>coach</h1>';
	  echo '<p>'.$resultatsalle[$i]['nomComplet'].'</p>'; 

	

	echo '<h3>nom</h3>';
	echo '<p>'.$resultatsalle[$i]['nom'].'</p>';

	echo '<p>capacite</p>';
	echo '<p>'.$resultatsalle[$i]['capacite'].'</p>';

	echo'<h5>equipement</h5>';
	echo '<p>'.$resultatsalle[$i]['equipement'].'<p>';
	$i++;
}
	?>
	
</body>
</html>