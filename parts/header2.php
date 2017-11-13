<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title><?php echo $titre; ?>Salle Dijon Sport</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header class="text-center">
			<?php if (isset($_SESSION['prenom'])): ?>
			<span class="compte">Bonjour, <?php echo $_SESSION['prenom']; ?></span>
			<?php endif; ?>
			<h1>Salle de sport</h1>
			<nav>
				<ul class="nav nav-pills center-pills">
					<li <?php if ($page == "index") echo 'class="active"'; ?>><a href="index.php">Accueil</a></li>
					<li <?php if ($page == "calendrier") echo 'class="active"'; ?>><a href="calendrier.php">Calendrier/Activité</a></li>
					<li <?php if ($page == "inscription") echo 'class="active"'; ?>><a href="inscription.php">Inscription</a></li>
					<li><a href="connexion.php"><?php if (isset($_SESSION['prenom'])) echo 'Déconnexion'; else echo 'Connexion'; ?></a></li>
				</ul>
			</nav>
		</header>
		<main class="container-fluid">
			<div class="col-md-9">

				<article>
					<section id="Présentation">
							<h2>
								<i class="fa fa-star-o" aria-hidden="true"></i>

								Présentation de la plus grande salle de Dijon
							</h2>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum dapibus ante, eu aliquam ante euismod eleifend. Ut malesuada augue ut luctus pellentesque. Aenean id varius ipsum. Nunc malesuada ex ut ipsum interdum vestibulum. Integer facilisis finibus orci, sit amet pretium diam placerat vitae. Nunc auctor tincidunt mollis. Nullam quis turpis sed lorem elementum semper eget semper risus. In nec mauris aliquam, congue metus euismod, cursus leo. Vivamus laoreet commodo leo, ut cursus justo blandit in. Aenean pretium mi a auctor pulvinar. Mauris sodales sollicitudin sodales. Sed mollis sed lectus id facilisis. Quisque pharetra a purus eget porttitor. Proin rhoncus risus non mauris iaculis sodales. Pellentesque euismod dui erat, non sodales ipsum sollicitudin sed.</p>

							<p>		
   							Donec nisi eros, luctus id pretium eget, consequat elementum risus. Fusce eleifend lacinia orci eu iaculis. Vestibulum vestibulum justo quis commodo congue. Aliquam purus leo, dictum in nisl at, pellentesque bibendum mi. Nulla convallis mi eget nisl convallis dictum. Vestibulum a massa lacus. Aenean quis enim diam.
							</p>
					</section>
					<section id="photosalle">
							<h2>
								<i class="fa fa-star-o" aria-hidden="true"></i>

								Nos différentes salles :

							</h2>
							<div>
								<figure>
									<img src="/img/salle1.jpg">
									<figcaption>Salle1</figcaption>
								</figure><figure>
									<img src="/img/salle2.jpg">
									<figcaption>Salle2</figcaption>
								</figure><figure>
									<img src="/img/salle3.jpg">
									<figcaption>Salle3</figcaption>
								</figure><figure>
									<img src="/img/salle4.jpg">
									<figcaption>Salle4</figcaption>
								</figure>
							</div>
					</section>	