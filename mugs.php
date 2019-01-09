<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 11:08
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

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mugs</title>
</head>
<body>
<br><br>
<h3>Ajout d'un mug</h3>
<form action="ajoutmugs.php" method="post">
    <label for="description">Description du mug</label>
    <textarea name="description" id="description"></textarea>
    <input type="submit" value="Ajouter">
</form>
<br><br>
<h3>Modifier un mug</h3>
<form action="modifmugs.php" method="post">
    <label for="description1">Description du mug que vous voulez modifier</label>
    <textarea name="description1" id="description1"></textarea>
    <label for="description2">Nouvelle description du mug</label>
    <textarea name="description2" id="description2"></textarea>
    <input type="submit" value="Modifier">
</form>
<br><br>
<h3>Supprimer un mug</h3>
<form action="suppmugs.php" method="post">
    <label for="description1">Description du mug que vous voulez modifier</label>
    <textarea name="description" id="description"></textarea>
    <input type="submit" value="Supprimer">
</form>
<br><br>
<h3>Associer un mug à un élève</h3>
<form action="associer.php" method="post">
    <label for="mug">ID du Mug</label>
    <input name="mug" id="mug" type="text">
    <label for="eleve">ID de l'élève</label>
    <input name="eleve" id="eleve" type="text">
    <input type="submit" value="Associer">
</form>
<br>
<a href="listeElMug.php">Liste des élèves avec leur mug</a>
<br>
<a href="liste.php">Liste des élèves</a> <a href="efface.php">Supprimer un élève</a> <a href="update.php">Mettre à jour
    un élève</a>
</body>
</html>
