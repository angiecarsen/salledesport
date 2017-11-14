<?php $connecteur = new PDO('mysql:host=localhost;dbname=salledesport','salledesport','hopeforce3');
					$adherents = $connecteur->query('INSERT INTO adherent VALUES();')->fetchAll(PDO::FETCH_ASSOC);				
	?>
	
