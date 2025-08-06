<?php

declare(strict_types=1);

function is_input_empty(string $username, string $password, string $email){
    if(empty($username) || empty($email) || empty ($password)){
        return true;
    }else{
        return false;
    }
}

function is_email_invalid (string $email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

// function is_username_taken (string $username, object $pdo){
//     if(){
//         return true;
//     }else{
//         return false;
//     }
// }