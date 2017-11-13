<?php if (isset($_SESSION['prenom'])):?><h2>Contenu de votre panier</h2>
<?php if (empty($_SESSION['panier'])):?>
    <p class="message"> Votre Panier est vide </p>
<?php else: ?> 
	<p classe="message">Votre Panier contient <?php echo count ($_SESSION['panier']); ?> pingouin(s)</p>
<section id="panier" class="row">
		<?php 
		$prixtotal = 0;
		foreach ($_SESSION['panier'] as $p) {
			require ('parts/pingouin.php');
			$prixtotal += $prix;
		}
		?>
	</section>
	<p> Prix Total : <?php echo number_format ($prixtotal, 2, ',', ' '); ?></p><button><a href="viderpanier.php">Vider le panier</a></button>
<?php endif; ?>
<?php endif; ?>