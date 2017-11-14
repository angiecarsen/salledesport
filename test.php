<pre>
<?php $connecteur = new PDO('mysql:host=localhost;dbname=salledesport','salledesport','hopeforce3');
					$adherents = $connecteur->query('SELECT * FROM adherent;')->fetchAll(PDO::FETCH_ASSOC);
					var_dump($adherents);
					
?>
</pre>