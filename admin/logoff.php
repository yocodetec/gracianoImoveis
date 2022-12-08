<?php
// O logoff está funcionando aparentemente do jeito que está.
session_start();
unset($_SESSION['loggedInADM']);
unset($_SESSION['email']);
unset($_SESSION['idNivelUsuario']);
session_destroy();
header("Location: ../login.php");
exit();
?>