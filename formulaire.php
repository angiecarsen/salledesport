<?php 
	$titre = 'accueil nom salle de sport';
	$page = 'accueil';
	require_once('parts/nav.php');
?>
<h3>Peut importe</h3>
<div class="row">
	<?php 	foreach ($pingouins as $p) {
				require('parts/pingouin.php');
			} ?>
</div>
<?php 
require_once('parts/inscription.php');
?>
<?php require_once('parts/footer.php'); ?>