<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 07/01/2019
 * Time: 15:57
 */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un élève</title>
</head>
<body>
<h1>Supprimer un élève</h1>
<form action="efface2.php" method="post">
    <label for="nom">Nom</label>
    <input name="nom" id="nom" type="text">
    <input type="submit" value="Delete">
</form>
<br>
<a href="liste.php">Liste des élèves</a> <a href="efface.php">Supprimer un élève</a> <a href="update.php">Mettre à jour
    un élève</a> <a href="index.php">Retour à l'index</a>
</body>
</html>
