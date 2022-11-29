<?php
function createPassword()
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $n = 1;
    $password = '';
    if (isset($_GET['pw-length'])) {
        $pwLength = $_GET['pw-length'];
        do {
            $randomChar = $characters[rand(0, strlen($characters) - 1)];
            echo $randomChar;
            $n++;
        } while ($n <= $pwLength);
    }
    return $password;
}