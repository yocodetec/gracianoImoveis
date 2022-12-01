<!DOCTYPE html>
<html>
	<head>
    		<meta charset="UTF-8">
			
      <!-- CSS -->
			<link href="css/style3.css" type="text/css" rel="stylesheet">
			<link href="css/footer.css" type="text/css" rel="stylesheet">
      <!-- JQUERY -->
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	  <!-- BOOTSTRAP -->
	  		      <!-- CONFIGURAÇÃO DE MEDIA QUERY -->
	  		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	  <!-- ICONS -->
			<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	</head>	
	
      <!-- CONTEÚDO -->
	<body>
		<div class="container-fluid">
			<div class="row">
    		 <!-- MENU -->
    		 <header id="header">
    		     
             </header>
		 	 </div>
    			
    			<div class="row">
                <div id="area-login">
                    <img alt="" src="img/fundo-login.jpg" width="100%" height="100%" class="img-fundo darkened-image"/>
                        <div class="card-login">
                        <div id="titulo">
                        	<h2>Login</h2>
                        </div>
                        <form action="login/publico.php" method="post">
							<div class="textfield">
								<label for="usuario">Usuário</label>
							 <input type="email"  name="email"  aria-describedby="emailHelp" placeholder=" ex: yocodetec@gmail.com"><br>
							</div>


							<div class="textfield"> 
								<label for="usuario">Senha</label>
							 <input type="password"  name="senha"  placeholder="123">
							

							</div>
							<button class="btn-login">Entrar</button>
						   <br>
						   
		   </form>
                        
                        
						</div>
                        </div>
                        
        		</div>
    			</div>
    	
  		</div>
	</body>
</html>  