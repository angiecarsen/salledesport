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