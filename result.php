<?php
session_start();

echo "<h3>Ecco la tua nuova password:</h3> {$_SESSION['newPassword']}";

?>