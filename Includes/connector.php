<?php

$dbHostname = "mysql:localhost";
$dbname = "php learning";
$dbUsername = "root";
$dbPassword = "";

try{
    $pdo = new PDO("" . $dbHostname . "dbname=" . $dbname, $dbUsername, $dbPassword);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->query("SELECT 1");

    echo "Your database is already connected";
}catch(PDOException $e){
    die("Connection failed : " . $e->getMessage());
}