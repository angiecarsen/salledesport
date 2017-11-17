<?php $connecteur = new PDO('mysql:host=localhost;dbname=salle_de_sport','salledesport','hopeforce3');
                    $resultatcoach = $connecteur->query('SELECT * FROM coach ;')->fetchAll(PDO::FETCH_ASSOC); 
                      
?>
<!DOCTYPE html>
<html>
<head>
	<title>Coachs</title>
</head>
<body>
<?php 
    echo '<article class="container">';
$i=0;
$compteur=0;
while($i<count($resultatcoach))
{
    echo '<div class="row">';
while ($compteur<4&&$i<count($resultatcoach)) {
    
    echo '<div class="col-sm-3 col-md-3">';
    echo '<h2>'.$resultatcoach[$i]['nomComplet'].'</h2>';

    echo '<p><strong>Travail de '.$resultatcoach[$i]['heureDebut'].' à '.$resultatcoach[$i]['heureFin'].'</strong></p>';
	
    echo '<h4> Le mot du Coach:</h4>';
	echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum dapibus ante, eu aliquam ante euismod eleifend. Ut malesuada augue ut luctus pellentesque. Aenean id varius ipsum. Nunc malesuada ex ut ipsum interdum vestibulum.</p>';
    
    echo '<p><strong> Le contacter:</strong> '.$resultatcoach[$i]['email'].'</p>';
	
	$connecteur = new PDO('mysql:host=localhost;dbname=salle_de_sport','salledesport','hopeforce3');

    $resultatdeux = $connecteur->query('SELECT *
FROM coach AS c,seance AS s
WHERE s.idCoach = c.id')->fetchAll(PDO::FETCH_ASSOC);
    echo '<p><strong>Numéro de licence:</strong> '.$resultatdeux[$i]['numeroLicence'].'</p>';
    echo '</div>';
    $compteur++;
    $i++;
}
    echo '</div>';
    $compteur=0;
 }
 echo '<article>';
?>
</body>
</html>