<?php 
session_start(); 
 
if (!isset($_SESSION['numero'])) { 
  $_SESSION['numero'] = '06553'; 
 
  echo $_SESSION['numero']; 
 
 
 
} else { 
  unset($_SESSION['numero']); 
} 
 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "salle_sport"; 
 
// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}  
 
$sql = "SELECT id, prenom, nom FROM adherent"; 
$result = $conn->query($sql); 
 
if ($result->num_rows > 0) { 
    // output data of each row 
    while($row = $result->fetch_assoc()) { 
        echo "<br> id: ". $row["id"]. " - Name: ". $row["prenom"]. " " . $row["nom"] . "<br>"; 
    } 
} else { 
    echo "0 results"; 
} 
 
$conn->close(); 
  
 
?>