<?php 
	$titre = 'accueil nom salle de sport';
	$page = 'accueil';
	require_once('parts/nav.php');
	require_once('SQL/inscri.php');
?>
<h3>Formulaire d'adhésion</h3>
<!-- <div class="row"> -->
	<?php/* 	foreach ($pingouins as $p) {
				require('parts/pingouin.php');
			}*/ ?>
<!-- </div> -->
<?php 
require_once('parts/inscription.php');
?>
<?php require_once('parts/footer.php'); ?>

