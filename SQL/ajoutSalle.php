 <?php 
session_start();

$conn = new PDO('mysql:host=localhost;dbname=salle_sport','salledesport','hopeforce3');

$nom = $_POST['nom'];
$capacite = $_POST['capacite']; 
$equipement = $_POST['equipement'];

$insertion = $conn->query("INSERT INTO salle (nom, capacite, equipement) VALUES ('$nom','$capacite','$equipement')");
 
if($insertion) {
	echo "La salle ".$nom." a été ajoutée avec succès !";

} else {
	echo "Une erreur est survenue. Vérifiez vos champs et reessayez.";
}


echo "<br><a href='../administration.php'>Retour à l'administration(Automatique dans 5s)</a>";
echo "<script>setTimeout(\"location.href = '../administration.php';\",5000);</script>";
; 
?>