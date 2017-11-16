<?php 
session_start();

$conn = new PDO('mysql:host=localhost;dbname=salle_sport','salledesport','hopeforce3');

$debut = $_POST['debut'];
$fin = $_POST['fin'];
$intitule = $_POST['intitule'];
$coach_nom = $_POST['coach'];
$salle_nom = $_POST['salle'];

$coach_id = $conn->query("SELECT id FROM coach WHERE nomComplet = '$coach_nom'")->fetch(PDO::FETCH_ASSOC);
$coach_id = $coach_id['id'];

$salle_id = $conn->query("SELECT id FROM salle WHERE nom = '$salle_nom'")->fetch(PDO::FETCH_ASSOC);
$salle_id = $salle_id['id'];


$insertion = $conn->query("INSERT INTO seance (heureDebut, heureFin, intitule, idCoach, idSalle) VALUES ('$debut','$fin','$intitule','$coach_id','$salle_id')");
 
if($insertion) {
echo "La séance ".$intitule." a été ajouté avec succès !";
} else {
echo "Une erreur est survenue. Vérifiez vos champs et reessayez.";
}

echo "<br><a href='../administration.php'>Retour à l'administration(Automatique dans 5s)</a>";
echo "<script>setTimeout(\"location.href = '../administration.php';\",5000);</script>";
?>
