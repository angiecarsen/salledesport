<?php 
session_start(); 

// Créer la connection
$connecteur = new PDO('mysql:host=localhost;dbname=salle_sport','salledesport','hopeforce3');



if (!isset($_SESSION['role'])) { //On vérifie que l'on se soit pas connecté 

	$email = /*$_POST['email']*/ 'joce@lyn.at';
	$numero = /*$_POST['numero']*/ '000011112222BBBB';

	$info = $connecteur->query('SELECT * FROM coach')->fetchAll(PDO::FETCH_ASSOC);

	if (isset($_GET['admin'])) {   //On regarde si l'utilisateur veut s'identifier en admin	

		foreach ($info as $ia) {
			if ($ia['email'] == $email) {
				
				if ($ia['numeroLicence'] == $numero) {
					
					$_SESSION['role'] = 'admin';
					$_SESSION['prenom'] = $ia['nomComplet'];		

				} else {
					echo "Erreur dans le numero";
				}
			} 
		}

	} else if (isset($_GET['user'])) { //ou en adherent

		// Pour chaque utilisateur, on vérifie si l'email entré correspond à un utilisateur puis si le numero entré correspond bien au numéro de l'utilisateur correspondant
		foreach ($info as $iu) {
			if ($iu['email'] == $email) {
				
				if ($iu['numero'] == $numero) {
					
					$_SESSION['role'] = 'user';
					$_SESSION['prenom'] = $iu['prenom'];		

				} else {
					echo "Erreur dans le numero";
				}
			} 
		}
	}
   
echo "Bonjour ".$_SESSION['prenom'];

} else {  //Sinon on déconnecte
  unset($_SESSION['prenom']);
  unset($_SESSION['role']); 
} 

 

	
	 
  
?>