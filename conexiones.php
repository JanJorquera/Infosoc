<?php
$server= "localhost";
$username= "root";
$password= "";
$database= "Huertos";

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die('Conection Failed: ' . $e->getMessage());
}


?>
fdfsdfdsf
