<div class="container">
  <form class="form-horizontal" method="post" action="">
    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="prenom">Prénom:</label>
      <div class="col-sm-10">
        <input type="texte" class="form-control col-sm-2" id="prenom" name="prenom" required>
      </div>
    </div> 
    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="nom">Nom:</label>
      <div class="col-sm-10">
        <input type="texte" class="form-control col-sm-2" id="nom" name="nom" required>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control col-sm-2" id="email" name="email" required>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="num">Numéro de téléphone:</label>
      <div class="col-sm-10">
        <input type="texte" class="form-control col-sm-2" id="num" name="num" required>
      </div>
    </div>
    <div class="form-group row">
      <button type="submit" class="btn btn-primary" formaction="SQL/inscri.php">Valider</button>
    </div>
  </form>
</div>
