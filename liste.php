<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 07/01/2019
 * Time: 16:04
 */

$servername = "localhost";
$username = "id7331131_florence";
$password = "";
$dbname = "id7331131_test";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $conn->select_db($dbname);
}
function s()
{
    global $conn;
    $sql = "SELECT prenom, nom, age FROM eleves ORDER BY prenom";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div>Prenom : " . $row['prenom'] . "<br> Nom : " . $row['nom'] . "<br> Age : " . $row['age'] . "</div><br><br>";
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des élèves</title>
</head>
<body>
<div><?php s(); ?></div>
<div><a href="index.php">Retour à l'index</a></div>
<br><br>
</body>
</html>

