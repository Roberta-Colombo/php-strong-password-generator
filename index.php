<?php
// $alphabet = 'abcdefghijklmnopqrstuvwxyz';
// $alphabetUpperCase = strtoupper($alphabet);
// $numbers = '0123456789';
// $symbols = '!$%&/()=?*+-#';

include __DIR__ . '/partials/head.php';
include __DIR__ . '/functions/functions.php';

$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
$password = '';
$n = 1;

if (isset($_GET['pw-length']) && !empty($_GET['pw-length'])) {
    $password = createPassword($_GET['pw-length']);
}
?>


<body>
    <div class="wrapper text-center">

        <?php if (isset($_GET['pw-length'])) {
            if (empty($_GET['pw-length'])) { ?>
        <div class="alert alert-danger">
            Nessun parametro valido inserito
        </div>
        <?php }
        }
        ?>

        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>

        <div class="container">
            <form action="index.php" method="GET" name="password-generator">
                <div class="row pt-5">
                    <div class="col-6">
                        <label for="pw-length" class="form-label">Lunghezza password:</label>
                    </div>
                    <div class="col-6">
                        <input type="number" id="pw-length" name="pw-length" class="form-control">
                    </div>
                </div>

                <div class="mt-5">
                    <button type="submit">Invia</button>
                    <button class="ms-3" type="reset">Annulla</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>