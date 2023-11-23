<?php

$password_length = $_GET["password_length"] ?? null;
function generateSecurePassword($password_length)
{
    $password_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-=_+[]{}|;:\'",.<>?/';
    $password = "";

    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, (strlen($password_chars) - 1));
        $password .=  $password_chars[$n];
    }

    return $password;
}
