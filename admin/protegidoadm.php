
<?php
    session_start();
    if ( (isset($_SESSION['email']) && isset($_SESSION['senha'])) && isset($_SESSION['idUsuario'])){
        
        header("Location: ./admin.php");
}else{
        header("Location: ../loginadm.php");
}
?>
