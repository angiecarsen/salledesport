<?php 
session_start(); 

// Créer la connection
$connecteur = new PDO('mysql:host=localhost;dbname=salle_sport','salledesport','hopeforce3');



if (!isset($_SESSION['role'])) { //On vérifie que l'on se soit pas connecté 
	if (isset($_GET['admin'])) {   //On regarde si l'utilisateur veut s'identifier en admin
	


	} else if (isset($_GET['user'])) { //ou en adherent
		$email = /*$_POST['email']*/ 'jean@pruliere.fr';
		 
		$mailbdd = $connecteur->query('SELECT email FROM adherent')->fetchAll(PDO::FETCH_ASSOC);
		var_dump($mailbdd);

		foreach ($mailbdd as $m) {
			if ($m['email'] == $email) {
				echo $email;
			}
		}

		$_SESSION['prenom'] = '06553'; 
 
  		echo $_SESSION['prenom'];


	}
   

} else {  //Sinon on déconnecte
  unset($_SESSION['prenom']);
  unset($_SESSION['role']); 
} 
 

	
	 
  
?>