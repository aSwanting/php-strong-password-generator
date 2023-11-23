<?php



function generateSecurePassword($password_length)
{
    // $password_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
    $password = "";

    for ($i = 0; $i < $password_length; $i++) {
        // $n = rand(0, (strlen($password_chars) - 1));
        // $password .=  $password_chars[$n];
        $n = rand(33, 126);
        if ($n !== 60)  $password .=  chr($n);
    }

    return $password;
}

$pass_chars = array();
for ($i = 33; $i < 127; $i++) {

    if ($i)

        array_push($pass_chars, chr($i));
}
echo implode($pass_chars);
