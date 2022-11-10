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
                        <a class="navbar-brand" href="index.php">
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
                              </ul>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#div3">Sobre nós</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Encontramos para você</a></li>
                                <li><a class="dropdown-item" href="#">Simuladores</a></li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#footer">Contato</a>
                            </li>
					  </ul>
                          <form class="d-flex">
                            <button class="btn btn-outline-secondary" type="button" onclick="assinar()">Login</button>
                           
                            <script type="text/javascript">
                                function assinar(){
                                	  window.location.href = "login.php"}
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
					<h3>Pronto para fazer as malas?</h3> 
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
                        <p>Colocar um texto aqui.</p>
                        <button>Compre um imóvel</button>
                    </div>
                    <div class="card inquilinos">
                        <div class="icon">
                            <img src="img/icon-cx2.png" alt="Shop here.">
                        </div>
                        <h3>Inquilinos</h3>
                        <p>Colocar um texto aqui.</p>
                        <button>Alugue um imóvel</button>
                    </div>
                    <div class="card proprietarios">
                        <div class="icon">
                            <img src="img/icon-cx3.png" alt="About us.">
                        </div>
                        <h3>Proprietários</h3>
                        <p>Colocar um texto aqui.</p>
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
                <div class="botao-div3">
                    <button id="ocultar-mostrar" class="btn btn-dark" type="button">Ver mais</button>
                </div>
         	</div>
            
            	<script>
					$(document).ready(function(){
						$("#ocultar-mostrar").click(function(){
							$("#div-hidden").toggle();
						});
					});
            	</script>
            	
            <div id="img-div3" class="">
                <!-- IMAGEM ESQUERDA -->
              	<div class="texto-div3"> 
              		 <p class="fs-2 fw-bold"> Conheça um pouco mais sobre a nossa empresa</p>
                      	
						Adriano Azevedo Corretor de Imoveis à 18 anos oferecendo serviços de agenciamento imobiliário 
						com qualidade e segurança em Guarulhos e região. Com sede própria, atuamos nos setores de vendas, 
						locação e administração tanto para imóveis residenciais quanto para imóveis comerciais, oferecendo
						uma variedade de serviços, desde estimativas<br/> de aluguéis, vendas e avaliações de imoveis
					
                </div>
			</div>	
			</div>
			
			<div id="div-hidden" class="">
				<div class="row">
            		<div id="div-missao" class="divs-hidden">
            			<p class="fs-2 fw-bold">Nossa Missão</p>
    					   
    					Buscar excelência no ramo imobiliário superando as expectativas dos clientes, oferecendo 
    					sempre um ótimo relacionamento, trabalhando com transparência, tendo como base a credibilidade, 
    					domínio e reconhecimento no mercado imobiliário.
            		</div>	

            		<div id="div-visao" class="divs-hidden">
            			<p class="fs-2 fw-bold">Nossa visão</p>
    					   
						Ser referência de qualidade na prestação de serviços imobiliários, sempre atentos ás mudanças do mercado, 
						tornando-se uma empresa e conhecida e conceituada na cidade de Guarulhos e região, expandindo nosso volume 
						de vendas e locações por meio da boa gestão, qualidade no atendimento e profissionalismo.
			  		 </div>
            		
            		<div id="div-valores" class="divs-hidden">
            			<p class="fs-2 fw-bold">Nossos valores</p>
    					   
    					   Trabalhar com ética e transparência, sempre comprometidos com trabalho em excelência, promovendo relações e
						   parcerias duradouras com nossos clientes e colaboradores.
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
                        <h5 class="card-title">Imóvel 1</h5>
                        <p class="card-text">Info dos imóveis.</p>
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
                        <h5 class="card-title">Imóvel 2</h5>
                        <p class="card-text">Info dos imóveis.</p>
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
                        <h5 class="card-title">Imóvel 3</h5>
                        <p class="card-text">Info dos imóveis.</p>
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
                        <h5 class="card-title">Imóvel 4</h5>
                        <p class="card-text">Info dos imóveis.</p>
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

    		<!-- RODAPÉ -->
    		<div class="row">
    		<footer>
                <div id="footer" class="container-footer">
                    <div class="row-footer">

                        <div class="footer-col-1">
                            <h4>Endereço</h4>
                            <ul>
                            	<li><p>Rua Ferraz De Vasconcelos, 3 - Jd Santa Cecília / 07123-240</p></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Redes sociais</h4>
                            <ul>
                                <li><a href="https://api.whatsapp.com/send?phone=5511947248784&text=Ol%C3%A1%2C+gostaria+de+mais+informa%C3%A7%C3%B5es+sobre+o+im%C3%B3vel+REF+828">Whatsapp</a></li>
                                <li><a href="https://www.facebook.com/people/Graciano-Im%C3%B3veis/100083183897342/">Facebook</a></li>
                                <li><a href="https://www.instagram.com/https://instagram.com/gracianoimoveis_gru?r=nametag">Instagram</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Contatos</h4>
                            <ul>
                            	<li><p>Telefone: (11) 9 3905-7735</p></li>
								<li><p>Telefone: (11) 9 3905-7735</p></li>
                                <li><a href="#">Email</a></li>
                            </ul>
                        </div>
                    	
                    	</div>
                	</div>

       			</footer>
       			</div>
       			    <div class="row">
                	<div class="copyright">
                        <p>©2022 Copyright - <a href="#">YO.CODE</a></p>
                    </div>
                    </div>
       	</div>
	</body>    background-image: url(../img/banner.jpg);
