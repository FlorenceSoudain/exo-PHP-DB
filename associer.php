<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 11:43
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

$mug = $_POST['mug'];
$eleve = $_POST['eleve'];

$sql = "INSERT INTO eleves_mugs VALUES ('', '$eleve', '$mug')";
if ($conn -> query($sql) === TRUE){
    echo "Ajout réussi";
}
else {
    echo "Error : " .$sql."<br>".$conn -> error;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Associer un mug à un élève</title>
</head>
<body>
<a href="index.php">Retour à l'index</a>
</body>
</html>
