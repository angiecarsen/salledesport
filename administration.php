<?php 
	$titre = 'accueil nom salle de sport';
	$page = 'accueil';
	require_once('parts/nav.php');
?>
<h3>Panel administration</h3>

<?php 
require_once('parts/ajoutCoach.php');
?>

<?php 
require_once('parts/seance.php');
?>

<?php 
require_once('parts/salle.php');
?>

<?php require_once('parts/footer.php'); ?>