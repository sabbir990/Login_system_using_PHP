<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    try {
        include_once("connector.php");
        include_once("../Models/sign_up.model.php");
        include_once("../Views/sign_up.view.php");
        include_once("../Controller/sign_up.controller.php");

        if(is_input_empty($username, $password, $email)){

        }

        if(is_email_invalid ($email)){
            
        }

        echo "Things are working pretty fine till now.";

    } catch (Exception $e) {
        echo "Query Failed : " . $e->getMessage();
    }


} else {
    header("Location: ../index.php");
}