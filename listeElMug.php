<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 11:54
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
echo "Mugs de Brian : ";
function p() {
    $sql = "SELECT mugs.description
    FROM eleves_mugs, mugs
    WHERE eleves_mugs.id_eleve = 1 
    AND eleves_mugs.id_mug = mugs.id";
    global $conn;
    $result = $conn -> query($sql);
    while ($row = $result -> fetch_assoc()){
        echo " ".$row['description'];
    }
}
p();

echo "<br><br>Mugs de André : ";

function a() {
    $sql = "SELECT mugs.description
    FROM eleves_mugs, mugs
    WHERE eleves_mugs.id_eleve = 2 
    AND eleves_mugs.id_mug = mugs.id";
    global $conn;
    $result = $conn -> query($sql);
    while ($row = $result -> fetch_assoc()){
        echo " ".$row['description'];
    }
}
a();

echo "<br><br>Mugs de Romain : ";

function b() {
    $sql = "SELECT mugs.description
    FROM eleves_mugs, mugs
    WHERE eleves_mugs.id_eleve = 3 
    AND eleves_mugs.id_mug = mugs.id";
    global $conn;
    $result = $conn -> query($sql);
    while ($row = $result -> fetch_assoc()){
        echo " ".$row['description'];
    }
}
b();