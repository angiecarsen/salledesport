<article class="col-md-6">
		<h4><?php echo $p['nom']; ?> 
			<span class="pingouin-sexe pingouin-sexe-<?php echo $p['sexe']; ?>"><?php echo $symboles[$p['sexe']]; ?></span></h4>
		<img src="img/<?php echo $p['id']; ?>.jpg"/>
		<ul>
			<li>Âge : <?php echo $p['age']; ?> semaines</li>
			<li>Poids : <?php echo $p['poids']; ?>kg</li>
		</ul><a href="ajoutpanier.php?id=<?php echo $p['id'];?>">
		<button>Adopter <?php echo $p['nom']; ?> (<?php 
			$prix = $p['poids'] * $prix_au_kilo[$p['sexe']];
			echo number_format($prix, 2, ',', ' ');
		?> €)</button></a>
	</article>