<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 09:47
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

//données filtrées
$prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
$nom = filter_var($_POST['nom'],FILTER_SANITIZE_STRING);
$age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);

/*$sql = "INSERT INTO eleves VALUES ('', '$prenom', '$nom', '$age')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

 //requête préparée
$stmt = $conn -> prepare("INSERT INTO eleves VALUES (?,?,?,?)");
$stmt ->bind_param("isss", $id, $prenom, $nom, $age);
$stmt -> execute();
$stmt -> close();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un élève</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php">Retour à l'index</a>
</body>
</html>
