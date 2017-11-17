<?php 
	$titre = 'accueil nom salle de sport';
	$page = 'accueil';
	require_once('parts/nav.php');
?>
<h3>Panel administration</h3>


<!--Ajout d'un coach --><div id="alignement">
<div class="container"><div class="cadre">
	<h4>Ajout d'un Coach</h4>

	<form method="post" action="SQL/ajoutCoach.php">
	  	<div class="form-group row">
			<label for="prenom" class="col-sm-2 col-form-label">Nom complet :</label>
	    	<div class="col-sm-10">
	    		<input type="texte" class="form-control" id="prenom" name="prenom" required>
	    	</div>
		</div>

		<div class="form-group row">
		    <label for="email" class="col-sm-2 col-form-label">Email :</label>
	    	<div class="col-sm-10">
	    		<input type="email" class="form-control" id="email" name="email" required>
	    	</div>	
		</div>

		<div class="form-group row">
			<label for="debut" class="col-sm-2 col-form-label">Heure de début :</label>
	    	<div class="col-sm-10">
	    		<input id="debut" type="time" class="form-control" name="debut" required>
	    	</div>	
		</div>

		<div class="form-group row">
			<label for="fin" class="col-sm-2 col-form-label">Heure de fin:</label>
	    	<div class="col-sm-10">
	    		<input type="time" class="form-control" id="fin" name="fin" required>
	    	</div>	
		</div>

		<div class="form-group row">
			<label for="licence" class="col-sm-2 col-form-label">Licence :</label>
	    	<div class="col-sm-10">
	    		<input type="texte" class="form-control" id="licence" name="licence"required>
			</div>
		</div>

	  <button type="submit" class="btn btn-primary">Valider</button>
	</form>
</div></div>

<!--Ajout d'une séance -->
<div class="container"><div class="cadre">
	<h4>Ajout d'une séance</h4>

	<form method="post" action="SQL/ajoutSeance.php">
	  
	  	<div class="form-group row">
			<label for="debut" class="col-sm-2 col-form-label">Heure de début :</label>
	    	<div class="col-sm-10">
	    		<input type="datetime-local" class="form-control" id="debut" name="debut" required>
	    	</div>
		</div>   
		
		<div class="form-group row">
			<label for="fin" class="col-sm-2 col-form-label">Heure de fin:</label>
	    	<div class="col-sm-10">
	    		<input type="datetime-local" class="form-control" id="fin" name="fin" required>
	    	</div>
		</div>

		<div class="form-group row">
			<label for="intitule" class="col-sm-2 col-form-label">Intitulé :</label>
	    	<div class="col-sm-10">
	    		<input type="texte" class="form-control" id="intitule" name="intitule" required>
	    	</div>
		</div>

		<div class="form-group row">
	    	<label for="coach" class="col-sm-2 col-form-label">Coach :</label>
	    	<div class="col-sm-10">
	    		<input type="texte" class="form-control" id="coach" name="coach" required>
	    	</div>	
		</div>

		<div class="form-group row">
			<label for="salle" class="col-sm-2 col-form-label">Salle :</label>
	    	<div class="col-sm-10">
	    		<input type="texte" class="form-control" id="salle" name="salle" required>
	    	</div>	
	  	</div>

	  <button type="submit" class="btn btn-primary">Valider</button>
	</form>
</div></div>

<!--Ajout d'une salle -->
<div class="container"><div class="cadre">

	<h4>Ajout d'une salle</h4>

	<form method="post" action="SQL/ajoutSalle.php">
	  	
	  	<div class="form-group row">
			<label for="nom" class="col-sm-2 col-form-label">Nom de la salle :</label>
	    	<div class="col-sm-10">
	    		<input type="texte" class="form-control" id="nom" name="nom" required>
	    	</div>	
		</div>

		<div class="form-group row">
			<label for="capacite" class="col-sm-2 col-form-label">Capacité :</label>
	    	<div class="col-sm-10">
	    		<input type="texte" class="form-control" id="capacite" name="capacite" required>
	    	</div>	
		</div>

		<div class="form-group row">
			<label for="equipement" class="col-sm-2 col-form-label">Equipement :</label>
	    	<div class="col-sm-10">
	    		<input type="texte" class="form-control" id="equipement" name="equipement" required>
	    	</div>	
		</div>

	  <button type="submit" class="btn btn-primary">Valider</button>
	</form>
</div></div></div>

<?php require_once('parts/footer.php'); ?>