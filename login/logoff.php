<?php
if ( (isset($_SESSION['email']) && isset($_SESSION['senha']))){

session_start();
$_SESSION['logoff']  = "";
unset($_SESSION['email']);
unset($_SESSION['idNivelUsuario']);
session_destroy();
header("Location: ../login.php");
exit();
}
?>