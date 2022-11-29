<?php
session_start();

function createPassword($pwLength)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $n = 1;
    $password = '';
    if (isset($_GET['pw-length'])) {
        $pwLength = $_GET['pw-length'];
        do {
            $randomChar = $characters[rand(0, strlen($characters) - 1)];
            $n++;
            $password .= $randomChar;
        } while ($n <= $pwLength);
    }
    $_SESSION['newPassword'] = $password;
    header('Location: ./result.php');
}