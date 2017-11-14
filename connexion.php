<?php 
session_start(); 

// Créer la connection
$connecteur = new PDO('mysql:host=localhost;dbname=salle_sport','salledesport','hopeforce3');



if (!isset($_SESSION['role'])) { //On vérifie que l'on se soit pas connecté 
	if (isset($_GET['admin'])) {   //On regarde si l'utilisateur veut s'identifier en admin
		$email = /*$_POST['email']*/ 'joce@lyn.at';
		$numero = /*$_POST['numero']*/ '000011112222BBBB';

		$info_admin = $connecteur->query('SELECT * FROM coach')->fetchAll(PDO::FETCH_ASSOC);

		foreach ($info_admin as $ia) {
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
		$email = /*$_POST['email']*/ 'bobama@us.gov.com';
		$numero = /*$_POST['numero']*/ '00148789';
		

		//On charge tous les utilisateurs et toutes leurs infos dans info_user
		$info_user = $connecteur->query('SELECT * FROM adherent')->fetchAll(PDO::FETCH_ASSOC);


		// Pour chaque utilisateur, on vérifie si l'email entré correspond à un utilisateur puis si le numero entré correspond bien au numéro de l'utilisateur correspondant
		foreach ($info_user as $iu) {
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