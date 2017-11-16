<?php 
if(isset($_POST['prenom']))  
{	
	$prenom=$_POST['prenom'];
	echo $prenom;
}
else $prenom="";

if(isset($_POST['nom']))    
{	
	$nom=$_POST['nom'];
	echo $nom;
}
else $nom="";

if(isset($_POST['email'])) 
{	
	$email=$_POST['email'];
	echo $email;
}
else $email="";

if(isset($_POST['num'])) 
{    
	$num=$_POST['num'];
	echo $num;
}
else $num="";

$connecteur = new PDO('mysql:host=localhost;dbname=salle_sport','salledesport','hopeforce3');
$req = $connecteur->prepare('INSERT INTO adherent(prenom,nom,email,numero,dateInscription) VALUES(:prenom,:nom,:email,:num,NOW())');
$req -> execute(array(
'prenom' => $prenom,
'nom' => $nom,
'email' => $email,
'num' => $num
));
	?>
	
