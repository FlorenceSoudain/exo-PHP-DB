<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 11:19
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

$description = $_POST['description'];

$sql = "DELETE FROM mugs WHERE description= '$description'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
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

