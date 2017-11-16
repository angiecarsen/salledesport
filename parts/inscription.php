 <form method="post" action="">
  <div class="form-group">
	<label for="prenom">Prénom:</label>
    <input type="texte" class="form-control" id="prenom" name="prenom" required>
	
	<label for="nom">Nom:</label>
    <input type="texte" class="form-control" id="nom" name="nom" required>
	
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  
	<label for="num">Numéro de téléphone:</label>
    <input type="texte" class="form-control" id="num" name="num" required>
    
	</div>
  <button type="submit" formaction="SQL/inscri.php" class="btn btn-default">Submit</button>
  
</form>