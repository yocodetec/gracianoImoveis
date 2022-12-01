
<?php
    session_start();
    if ( ! (isset($_SESSION['idUsuario']) && isset($_SESSION['email']))){
        header("Location: ./login.php");
    }else {
        header("Location: ./admin.html");
    }
?>

Conteúdo ADM