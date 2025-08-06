<?php

$dbHostname = "mysql:localhost";
$dbname = "php learning";
$dbUsername = "root";
$dbPassword = "";

try{
    $pdo = new PDO("" . $dbHostname . "dbname=" . $dbname, $dbUsername, $dbPassword);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die("Connection failed : " . $e->getMessage());
}