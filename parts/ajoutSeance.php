 <?php 
session_start();

$conn = new PDO('mysql:host=localhost;dbname=salle_sport','salledesport','hopeforce3');

$prenom = $_POST['prenom'];
$email = $_POST['email']; 
$debut = $_POST['debut'];
$fin = $_POST['fin'];
$licence = $_POST['licence'];

$insertion = $conn->query("INSERT INTO coach (nomComplet, email, heureDebut, heureFin, numeroLicence) VALUES ('$prenom','$email','$debut','$fin','$licence')");
 
if($insertion) {
echo "Le coach ".$prenom."a été ajouté avec succès !";
} else {
echo "Une erreur est survenue. Vérifiez vos champs et reessayez.";
}

echo "<br><a href='../administration.php'>Retour à l'administration</a>"; 
?>