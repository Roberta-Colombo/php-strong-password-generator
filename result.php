<?php
include __DIR__ . '/partials/head.php';

session_start();
?>


<div class="wrapper pt-5">

    <div class="container margin-top text-center">
        <h3>Ecco la tua nuova password:</h3>

        <div class="text">
            <?php
            echo $_SESSION['newPassword'];
            ?>
        </div>
    </div>

</div>
</body>

</html>