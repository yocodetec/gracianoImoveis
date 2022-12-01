<?php 
session_start();
if ( ! (isset($_SESSION['email']) && isset($_SESSION['senha']))){
echo "";

}else {
	header("Location: ../login.php");

}
	?> 
	