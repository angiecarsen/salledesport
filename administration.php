<?php 
	$titre = 'accueil nom salle de sport';
	$page = 'accueil';
	require_once('parts/nav.php');
?>
<h3>Panel administration</h3>


<!--Ajout d'un coach -->
<form>
  <div class="form-group">
	<label for="prenom">nom complet :</label>
    <input type="texte" class="form-control" id="prenom" required>
	
    <label for="email">Email :</label>
    <input type="email" class="form-control" id="email" required>
  
    <label for="debut">Heure de début :</label>
    <input type="texte" class="form-control" id="debut" required>
	
	<label for="fin">Heure de fin:</label>
    <input type="texte" class="form-control" id="fin" required>
	
	<label for="licence">Licence :</label>
    <input type="texte" class="form-control" id="licence" required>
	
	</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<!--Ajout d'une séance -->
<form>
  <div class="form-group">
  
	<label for="debut">Heure de début :</label>
    <input type="texte" class="form-control" id="debut" required>
	
	<div class="input-append date" id="datetimepicker" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
		<input class="span2" size="16" type="text" value="12-02-2012">
		<span class="add-on"><i class="icon-remove"></i></span>
		<span class="add-on"><i class="icon-th"></i></span>
    </div>            
	
	<label for="fin">Heure de fin:</label>
    <input type="texte" class="form-control" id="fin" required>
	
	<label for="intitule">Intitulé :</label>
    <input type="texte" class="form-control" id="intitule" required>
	
    <label for="coach">Coach :</label>
    <input type="texte" class="form-control" id="coach" required>
	
	<label for="salle">Salle :</label>
    <input type="texte" class="form-control" id="salle" required>
  
	</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<!--Ajout d'une salle -->
<form>
  <div class="form-group">
  
	<label for="nom">Nom de la salle :</label>
    <input type="texte" class="form-control" id="nom" required>
	
	<label for="capacite">Capacité :</label>
    <input type="texte" class="form-control" id="capacite" required>
	
	<label for="equipement">Equipement :</label>
    <input type="texte" class="form-control" id="equipement" required>
	
	</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php require_once('parts/footer.php'); ?>