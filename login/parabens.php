<?php 
session_start();
if ( (isset($_SESSION['email']) && isset($_SESSION['senha'])) && isset($_SESSION['idUsuario'])  ){

	

}else {
	header("Location: ../login.php");
    
}
	?> 
	