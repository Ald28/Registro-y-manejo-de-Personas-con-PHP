<?php

$host = 'localhost';
$dbname = 'personas';
$user = 'root';
$password = '1234';

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){
    echo "Conexcion fallida: ". $e->getMessage();
}

?>