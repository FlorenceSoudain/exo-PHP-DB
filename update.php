<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 07/01/2019
 * Time: 16:03
 */


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un élève</title>
</head>
<body>
<h1>Modifier un élève</h1>
<form action="update2.php" method="post">
    <label for="id">ID de l'élève a modifier</label>
    <input name="id" id="id" type="number">
    <br><br>
    <label for="prenom">Prénom</label>
    <input name="prenom" id="prenom" type="text">
    <label for="nom">Nom</label>
    <input name="nom" id="nom" type="text">
    <label for="age">Age</label>
    <input name="age" id="age" type="number">

    <input type="submit" value="Update">
</form>
<br>
<a href="liste.php">Liste des élèves</a> <a href="efface.php">Supprimer un élève</a> <a href="update.php">Mettre à jour
    un élève</a> <a href="index.php">Retour à l'index</a>
</body>
</html>
