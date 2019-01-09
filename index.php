<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne
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


function f(){
    global $conn;
    $sql = "INSERT INTO eleves VALUES ('', 'Florence', 'Soudain', '33')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


function s(){
    global $conn;
    $sql = "SELECT id, prenom, nom, age FROM eleves";
    $result = $conn -> query($sql);
    while ($row = $result -> fetch_assoc()){
        echo " id = ".$row['id']." prenom : ".$row['prenom']." nom : ".$row['nom']." age : ".$row['age'];
    }
}

s();

function e(){
    global $conn;
    $sql = "UPDATE eleves set prenom = 'Maxime', nom = 'Ducamp', age = 30 WHERE id = 9";
    $conn -> query($sql);
}
e();

function d(){
    global $conn;
    $sql = "DELETE FROM eleves WHERE id= 10";
    $conn -> query($sql);
}

d();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<h1>Ajouter un élève</h1>
<form action="ajout.php" method="post">
    <label for="prenom">Prénom</label>
    <input name="prenom" id="prenom" type="text">
    <label for="nom">Nom</label>
    <input name="nom" id="nom" type="text">
    <label for="age">Age</label>
    <input name="age" id="age" type="number">
    <input type="submit" value="Ajouter">
</form>
<a href="liste.php">Liste des élèves</a>   <a href="efface.php">Supprimer un élève</a>   <a href="update.php">Mettre à jour un élève</a>
<a href="mugs.php">Page des mugs</a>
</body>
</html>
