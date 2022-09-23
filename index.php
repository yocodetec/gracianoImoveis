<!DOCTYPE html>
<html>
	<head>
    		<meta charset="UTF-8">
			
      <!-- CSS -->
			<link href="css/style1.css" type="text/css" rel="stylesheet">
      <!-- JQUERY -->
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	  <!-- BOOTSTRAP -->
	  		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
			<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
	</head>	
	
      <!-- CONTEÚDO -->
	<body>
	  <!-- MENU -->
        	<div class="col-lg-">
              <div class="row">
              <!-- CABEÇALHO -->
    			<div id="header">
                    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
                      <div class="container-fluid">
                        <a class="navbar-brand" href="frontHome.php">
                        <!-- LOGO DA EMPRESA -->
                         <img src="img/logo_graciano.png" alt="" width="170" height="70" class="d-inline-block align-text-top">
                          </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- BOTÕES DO CABEÇALHO -->
                        <div class="collapse navbar-collapse container-fluid" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Buscar Imóveis
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Imóveis para alugar</a></li>
                                <li><a class="dropdown-item" href="#">Imóveis para comprar</a></li>
                                <li><a class="dropdown-item" href="#">Como comprar</a></li>
                              </ul>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="frontQuemSomos.php">Sobre nós</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços 
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Encontramos para você</a></li>
                                <li><a class="dropdown-item" href="#">Simuladores</a></li>
                                <li><a class="dropdown-item" href="#">Como vender</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </nav>    				
    			</div>
    		</div>
    			
        	<!-- PRIMEIRA DIV -->
            <div class="col-sm- div2">
                <img src="img/capa.png"  alt="" width="100%" height="30%">
                 <div class="col-sm- div3">
                  <p><strong> <h3> ALUGUE FÁCIL </h3></strong></p>
                  <form>
  				    <div class="form-control form-control-sm">
    			<label for="exampleFormControlSelect1"> Bairro</label>
    			<select class="form-control" id="exampleFormControlSelect1">
      				<option>clique aqui</option>
      				<option>Cocaia</option>
      				<option>Bonsucesso</option>
      				<option>Pimentas</option>
     				<option>Continental 1</option>
    				</select>
    				
    				<label for="exampleFormControlSelect1"> Aluguel Até </label>
    			<select class="form-control" id="exampleFormControlSelect2" >
      				<option>clique aqui</option>
      				<option>900</option>
      				<option>1.200</option>
      				<option>1.500</option>
      				<option>2.000</option>
    				</select>
    				
    				<label for="exampleFormControlSelect1"> Número de Quartos </label>
    			<select class="form-control" id="exampleFormControlSelect3"  placeholder="clique aqui">
      				<option>clique aqui</option>
      				<option>1</option>
      				<option>2</option>
      				<option>3</option>
      				<option>4</option>
    				</select>
    				
 				 </div>
 				
 				 <button type="submit" class="btn btn-primary">Pesquisar</button>
 				 
 				 
                 </form>
                   
                     <!-- COLOCAR POR EX.: UM FORMULÁRIO -->
                                    	
                 </div>
            </div>
            
  			<div class="col-sm- div4">
  			<!--  ESPAÇO  -->
  			</div>
  			
  			<div class="col-sm- div5">
  			
  		
  			<div class="col-sm- texto1">
  			<div class="titulos">
  			Você tem o sonho da casa própria?<br/>
			Ou prefere a Mudança e liberdade que o aluguel traz? 
  			 </div>
  			 <div class="textos">
  			 Aqui, nós ajudamos a alcançar o seus objetivos com atenção, cuidado confiança e segurança!
  			 </div>
  			
  			</div>
  			
  			
  					<div class="col-sm- caixaamarela">
  					<br/><br/><br/><br/><br/><br/>
              		 <div class="botoes">
              		 <div class="d-grid gap-2 col-10 mx-auto">
                          <button class="btn btn-light" type="button">Imóveis para Alugar</button>
                          <button class="btn btn-secondary" type="button">Imóveis para a Compra</button>
                    </div>
                    </div>
  					
  					</div>
               
            </div>
			
			<div class="col-sm- div8">
				<!--  ESPAÇO  -->
            </div>
            <div class="col-sm- div9">
            
            	<div class="col-sm- div10">
           <div class="titulos2">
  			Anuncie seu imóvel com a gente!
  			 </div>
          <div class="textos2">
  			 A importância de ter uma imobiliária é a segurança de ter todos </br>
  			 os documentos corretos na hora da compra e venda de imóveis, </br>
			além da confecção de contratos para a </br>
			fiscalização de regras na locação do seu imóvel!
  			 </div>
            	
            	</div>
  			 </div>
            <div class="col-sm- div11">
  			   <!--  ESPAÇO  -->
  			</div>
  			   <!--  RODAPÉ  -->
 		 <div id="footer">
    		<div class="textoarea">
    		  
    		</div>
    	</div>
    	
  		
  </div>  			
	</body>
</html>     
