<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title><?php echo $titre; ?> - Association de Défense du Pingouin du Bengale</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header class="text-center">
			<?php if (isset($_SESSION['prenom'])): ?>
			<span class="compte">Bonjour, <?php echo $_SESSION['prenom']; ?></span>
			<?php endif; ?>
			<h1>Association de Défense du Pingouin du Bengale</h1>
			<nav>
				<ul class="nav nav-pills center-pills">
					<li <?php if ($page == "index") echo 'class="active"'; ?>><a href="index.php">Accueil</a></li>
					<li <?php if ($page == "presentation") echo 'class="active"'; ?>><a href="presentation.php">Qui sommes-nous ?</a></li>
					<li <?php if ($page == "rejoindre") echo 'class="active"'; ?>><a href="rejoindre.php">Nous rejoindre</a></li>
					<li <?php if ($page == "contact") echo 'class="active"'; ?>><a href="contact.php">Signaler un pingouin errant</a></li>
					<li <?php if (isset($_SESSION['prenom'])):?><?php if ($page == "adopter") echo 'class="active"'; ?>><a href="adopter.php">Adoptez un de nos pingouins</a><?php endif;?></li>
					<li><a href="connexion.php"><?php if (isset($_SESSION['prenom'])) echo 'Déconnexion'; else echo 'Connexion'; ?></a></li>
				</ul>
			</nav>
		</header>
		<main class="container-fluid">
			<div class="col-md-9">