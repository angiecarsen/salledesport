<?php 
	$titre = 'accueil nom salle de sport';
	$page = 'accueil';
	require_once('parts/nav.php');
?>
<h3>Page de présentation de notre salle de sport</h3>

<?php require_once('parts/main.php'); ?>

<div class="row">
	<?php 	foreach ($pingouins as $p) {
				require('parts/pingouin.php');
			} ?>
</div>
<?php require_once('parts/footer.php'); ?>