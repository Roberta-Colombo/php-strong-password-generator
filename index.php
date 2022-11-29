<?php
// $alphabet = 'abcdefghijklmnopqrstuvwxyz';
// $alphabetUpperCase = strtoupper($alphabet);
// $numbers = '0123456789';
// $symbols = '!$%&/()=?*+-#';

$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
$password = '';
$n = 1;

if (isset($_GET['pw-length'])) {
    $pwLength = $_GET['pw-length'];
    do {
        $randomChar = $characters[rand(0, strlen($characters) - 1)];
        echo $randomChar;
        $n++;
    } while ($n <= $pwLength);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>
    <div class="wrapper text-center">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>

        <div class="container">
            <form action="index.php" method="GET" name="password-generator">
                <label for="pw-length" class="form-label">Lunghezza password:</label>
                <input type="number" id="pw-length" name="pw-length" class="form-control">
                <button type="submit">Invia</button>
                <button type="reset">Annulla</button>
            </form>
        </div>
    </div>
</body>

</html>