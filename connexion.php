<?php 
session_start(); 

// Créer la connection
$connecteur = new PDO('mysql:host=localhost;dbname=salle_sport','salledesport','hopeforce3');



if (!isset($_SESSION['role'])) { //On vérifie que l'on se soit pas connecté 

	$email = $_POST['email']; //'joce@lyn.at';
	$numero = $_POST['numero']; //'000011112222BBBB';

	

	if (isset($_POST['connec_coach'])) {   //On regarde si l'utilisateur veut s'identifier en admin	

	$info = $connecteur->query('SELECT * FROM coach')->fetchAll(PDO::FETCH_ASSOC);

		foreach ($info as $ia) {
			if ($ia['email'] == $email) {
				
				if ($ia['numeroLicence'] == $numero) {
					
					$_SESSION['role'] = 'admin';
					$_SESSION['prenom'] = $ia['nomComplet'];

					header('Location: index.php');
				} else {
					echo "Erreur dans le numero";
				}
			} 
		}

	} else if (isset($_POST['connec_adh'])) { //ou en adherent

	$info = $connecteur->query('SELECT * FROM adherent')->fetchAll(PDO::FETCH_ASSOC);	
		
		// Pour chaque utilisateur, on vérifie si l'email entré correspond à un utilisateur puis si le numero entré correspond bien au numéro de l'utilisateur correspondant
		foreach ($info as $iu) {
			if ($iu['email'] == $email) {
				
				if ($iu['numero'] == $numero) {
					
					$_SESSION['role'] = 'user';
					$_SESSION['prenom'] = $iu['prenom'];
					$_SESSION['id'] = $iu['id'];
							
					header('Location: index.php');
				} else {
					echo "Erreur dans le numero";
				}
			} 
		}
	}

} else {  //Sinon on déconnecte
  unset($_SESSION['prenom']);
  unset($_SESSION['role']);
  header('Location: index.php'); 
} 

 

	
	 
  
?>