<?php 
session_start();
if ( (isset($_SESSION['email']) && isset($_SESSION['senha']))){
echo "";

}else {
	header("Location: ./login.php");

}
	?> 
	<html>
	<form action="logoff.php" method="post">
					 
			
					 <button type="submit" class="btn btn-primary">Sair</button>
	 </form>
	</html>