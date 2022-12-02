
<?php
    session_start();
    if (! (isset($_SESSION['email']) && isset($_SESSION['senha']))){
        header("Location: ../login.php");

    }else {
        if (isset($_SESSION['idUsuario']) == 7){
            header("Location: ./protegidoADM.php");
        }else{ 
        
            header("Location: ./parabens.php");}


    }
?>



