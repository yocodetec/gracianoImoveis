<?php


session_start();
$_SESSION['logoff']  = "";
unset($_SESSION['email']);
unset($_SESSION['idNivelUsuario']);
header("Location: ../login.php");
exit();
?>