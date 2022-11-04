<!DOCTYPE html>
<html>
	<head>
    		<meta charset="UTF-8">
			
      <!-- CSS -->
			<link href="css/style1.css" type="text/css" rel="stylesheet">
			<link href="css/header.css" type="text/css" rel="stylesheet">
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
    		 
        		 <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white border-bottom">
                      <div class="container-fluid">
                        <a class="navbar-brand" href="frontHome.php">
                        	 <!-- LOGO DA EMPRESA -->
                             <img src="" alt="" width="" height="" class="d-inline-block align-text-top">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- BOTÕES DO MENU -->
                        <ul class="navbar-nav">
 						   <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Buscar imóveis
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Imóveis para alugar</a></li>
                                <li><a class="dropdown-item" href="#">Imóveis para comprar</a></li>
                                <li><a class="dropdown-item" href="#">Como comprar</a></li>
                              </ul>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Sobre nós</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Encontramos para você</a></li>
                                <li><a class="dropdown-item" href="#">Simuladores</a></li>
                                <li><a class="dropdown-item" href="#">Como vender</a></li>
                              </ul>
                           </li>
					  </ul>
                          <form class="d-flex">
                            <button class="btn btn-outline-secondary" type="button" onclick="assinar()">Login</button>
                           
                            <script type="text/javascript">
                                function assinar(){
                                	  window.location.href = "frontTeste.php"}
                            </script>
                            
                          </form>
                        
                      </div>
                 </nav>
   
             </header>
		 	 </div>
		 	 
		     <div class="row">
		     <!-- BANNER -->
    		 <div id="banner" class="parallax darkened-image">
    		 	<div id="titulo-banner" class="typing-animation">
					<h2>Pronto para fazer as malas?</h2> 
				</div>
			</div>	
			</div>
			
    			<div class="row">
    			<div class="espaco">
      			<!--  ESPAÇO  -->
      			</div>
      			</div>
			
			<div class="row">
			<!-- SEGUNDA DIV -->
			<div id="div2" class="">
    			<h3 class="sub-titulo"> Uma maneira fácil e rápida de encontrar aquilo que você procura!</h3>
    			
    			<div id="card-group" class="cards">
                    <div class="card comprador">
                        <div class="icon">
                            <img src="img/icon-cx1.png" alt="Contact us.">
                        </div>
                        <h3>Comprador</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <button>Compre um imóvel</button>
                    </div>
                    <div class="card inquilinos">
                        <div class="icon">
                            <img src="img/icon-cx2.png" alt="Shop here.">
                        </div>
                        <h3>Inquilinos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <button>Alugue um imóvel</button>
                    </div>
                    <div class="card proprietarios">
                        <div class="icon">
                            <img src="img/icon-cx3.png" alt="About us.">
                        </div>
                        <h3>Proprietários</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <button>Anuncie um imóvel</button>
                    </div>
                </div>
                 
			</div>
			</div>

    			<div class="row">
        			<div class="espaco">
          			<!--  ESPAÇO  -->
          			</div>
          		</div>

			<div class="row">
    		<div id="div3" class="">
  				<img class="personagem-div3" src="img/img_div9.png">
            	<!-- BOTÕES -->
                <div class="botoes-div3">
                    <button class="btn btn-dark" type="button">Faça uma simulação</button>
                </div>
         	</div>
            
            <div id="img-div3" class="">
                <!-- IMAGEM ESQUERDA -->
              	<div class="texto-div3"> 
              		 <p class="fs-2 fw-bold"> Encontre a melhor maneira de financiar o seu imóvel</p>
                      	<br/>
                      	A importância de ter uma imobiliária é a segurança 
                        de ter todos os documentos corretos na hora da
                      	compra e venda de imóveis. além da confecção de
                      	contratos para a fiscalização de regras na locação
                      	do seu imóvel.
                </div>
			</div>	
			</div>

    			<div class="row">
        			<div class="espaco">
          			<!--  ESPAÇO  -->
          			</div>
          		</div>
			        
			    <hr></hr>

			<div class="row">			
			<!-- IMAGEM ESQUERDA -->
    		<div id="div4" class="">
    			<h3 class="sub-titulo"> Imóveis para a venda</h3>
  				
               <div id="carrosel" class="cards">
               
                  <div class="col">
                    <div class="card-imovel1 card-body-carrosel">
                      	
                      	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="img/g1.png" class="d-block" width="100%" height="100%" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="img/g2.png" class="d-block" width="100%" height="100%" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="img/g3.png" class="d-block"  width="100%" height="100%" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                      	
                      <div class="card-body-text">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card-imovel2 card-body-carrosel">
                    	
                      	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="img/g1.png" class="d-block" width="100%" height="100%" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="img/g2.png" class="d-block" width="100%" height="100%" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="img/g3.png" class="d-block"  width="100%" height="100%" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>

                      <div class="card-body-text">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card-imovel card-body-carrosel">
                      	
                      	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="img/g1.png" class="d-block" width="100%" height="100%" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="img/g2.png" class="d-block" width="100%" height="100%" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="img/g3.png" class="d-block"  width="100%" height="100%" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>

                      <div class="card-body-text">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card-imovel4 card-body-carrosel">

					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                      <div class="carousel-indicators">
                       	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="img/g1.png" class="d-block" width="100%" height="100%" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="img/g2.png" class="d-block" width="100%" height="100%" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="img/g3.png" class="d-block"  width="100%" height="100%" alt="...">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>

                      <div class="card-body-text">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                    </div>
                  </div>
                </div>
               
               <div class="botao-div4">
                     <button class="btn btn-dark" type="button">Veja mais</button>
               </div>
               
			</div>	
			</div>
			
    			<div class="row">
        			<div class="espaco">
          			<!--  ESPAÇO  -->
          			</div>
          		</div>

			<div class="row">
    		 <!-- RODAPÉ -->
			<footer id="footer">
			
				Nosso Endereço
				Rua Ferraz De Vasconcelos, 3 - Jd Santa Cecília / 07123-240<br/>
				
				(11) 9 3905-7735 WhatsApp
				(11) 9 4724-8784 WhatsApp
			
			</footer>
			</div>

		</div>
	</body>
</html>  
