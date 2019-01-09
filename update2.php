<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 09:56
 */

$servername = "localhost";
$username = "id7331131_florence";
$password = "";
$dbname = "id7331131_test";

$conn = new mysqli($servername, $username, $password);

if($conn -> connect_error){
    die("Connection failed: " . $conn->connect_error);
}
else
{
    $conn -> select_db($dbname);
}

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$age = $_POST['age'];
$id = $_POST['id'];

echo "<h1>Modifier un élève</h1>";

$sql = "UPDATE eleves set prenom = '$prenom', nom = '$nom', age = '$age'  WHERE id = '$id'";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="index.php">Retour à l'index</a>
</body>
</html>
