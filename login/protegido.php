
<?php
    session_start();
    if ((isset($_SESSION['email']) && isset($_SESSION['senha']))){
     

    if (isset($_SESSION['idUsuario']) == 7){
        header("Location: ./protegidoADM.php");
    }else{ 
    
        header("Location: ./parabens.php");}
    
    
    
    
    }else {
	header("Location: ../login.php");
}

    
?>



