<?php session_start() ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Dijon Sport</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Dijon Sport</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Acceuil</a></li>
				<li><a href="activites.php">Activités</a></li>
				<li><a href="formulaire.php">Inscription</a></li>
				
				<li><a href="administration.php">Administration</a></li>
			</ul>
			

			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['prenom'])): ?>

				<li><a>Bonjour <?php echo $_SESSION['prenom']; ?></a></li>
				<li><a href="connexion.php">Déconnexion</a></li> 
				
				<?php else: ?>
					
				<li><a><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Connexion</button></a></li>

				<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				      <p>Connexion</p>
				         
				      		<form class="form-horizontal" action="connexion.php?admin=" method="post">
				      		  <div class="form-group">
				      		    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				      		    <div class="col-sm-10">
				      		      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				      		    </div>
				      		  </div>
				      		  <div class="form-group">
				      		    <label for="inputPassword3" class="col-sm-2 control-label">Numéro</label>
				      		    <div class="col-sm-10">
				      		      <input type="password" class="form-control" id="inputPassword3" placeholder="numero">
				      		    </div>
				      		  </div>
				      		  <div class="form-group">
				      		    <div class="col-sm-offset-2 col-sm-10">
				      		      <button type="submit" class="btn btn-default" name="connec_adh">Connexion Adhérent</button>
				      		    </div>
				      		  </div>
				      		  <div class="form-group">
				      		    <div class="col-sm-offset-2 col-sm-10">
				      		      <button type="submit" class="btn btn-default" name="connec_coach">Connexion Coach</button>
				      		    </div>
				      		  </div>
				      		</form>
				        				    
				    </div>
				  </div>
				</div>

				<?php endif; ?>	
				
			</ul>	
		</div>
	</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/tests/vendor/bootstrap.min.js"></script>
	</body>
<html>