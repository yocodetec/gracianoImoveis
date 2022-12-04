<!DOCTYPE html>
<html>
	<head>
    		<meta charset="UTF-8">
			
      <!-- CSS -->
			<link href="css/teste.css" type="text/css" rel="stylesheet">
			<link href="css/header.css" type="text/css" rel="stylesheet">
			<link href="css/footer.css" type="text/css" rel="stylesheet">
      <!-- JQUERY -->
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	  <!-- BOOTSTRAP -->
	  		      <!-- CONFIGURAÇÃO DE MEDIA QUERY -->
			<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	  <!-- ICONS -->
			<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	
	</head>	
	
    <!-- CONTEÚDO -->
	<body>
	
		<header>
		        <!-- MENU -->
		        <div class="container-fluid">
        			<div class="row">
        				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        					<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
                				<div class="container-fluid">
                					<a href="#banner" class="navbar-brand">
                						<img src="img/logo.png" height="65px" alt="">  Graciano Imóveis
                					</a>
                					<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                						<span class="navbar-toggler-icon"></span>
                					</button>
                					<div class="collapse navbar-collapse" id="navbarCollapse">
                						<div class="navbar-nav">
                							<a href="frontQuemSomos.php" class="nav-item nav-link">Buscar imóveis</a>
                							<a href="#sobre-texto" class="nav-item nav-link">Sobre nós</a>                							
                							<a href="#footer" class="nav-item nav-link">Contato</a>
											<a href="login.php" class="nav-item nav-link">Login</a>
                						</div>
                					</div>
                				</div> 
                			 </nav>
                		</div> 
            		 </div>
            	</div>	 
            	
                    	<script type="text/javascript">
                          function mudapag(){
                            window.location.href = "login.php"}
                     	</script>
                                    
        </header>    
      			<!-- BANNER -->
        		<div class="container-fluid">
        			<div class="row">
            		 	<div class="div2 col-md-12 col-sm-12 col-xs-12 col-lg-12 parallax darkened-image" id="banner">
            		 		<div id="titulo-banner" class="typing-animation col-md-12 col-sm-12 col-xs-12 col-lg-12">
								<h3>Pronto para fazer as malas?</h3> 
							</div>
            		 	</div> 
            		</div> 	
            	</div>
            	<!-- DIV COM CARDS -->	 	
            	<div class="container">
        			<div class="row">
            			<div class="div-cards col-md-12 col-sm-12 col-xs-12 col-lg-12">
                			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" id="titulo-card">
                				<h3 class="sub-titulo"> Uma maneira fácil e rápida de encontrar aquilo que você procura!</h3>
                				<!-- CARDS -->	 
                			</div>
                			<div class="row">
                				<div class="div3 col-md-4 col-sm-12 col-xs-12 col-lg-4">
                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 card" id="card-top">
                                        <div class="icon">
                                            <img src="img/icon-cx1.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h3>Nossa Missão</h3>
                                            <p>Buscar excelência no ramo imobiliário superando as expectativas dos clientes, oferecendo 
                                            sempre um ótimo relacionamento, trabalhando com transparência, tendo como base a credibilidade,
                                             domínio e reconhecimento no mercado imobiliário.</p>
                                    	</div>
                                    </div>
                                 </div>
                                 <div class="div3 col-md-4 col-sm-12 col-xs-12 col-lg-4">
                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 card" id="card-top">
                                        <div class="icon">
                                            <img src="img/icon-cx2.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h3>Nossa visão</h3>
                                            <p>Ser referência de qualidade na prestação de serviços imobiliários, sempre atentos às mudanças do mercado, 
                                            tornando-se uma empresa reconhecida e conceituada na cidade de Guarulhos e região, expandindo nosso volume 
                                            de vendas e locações por meio da boa gestão, qualidade no atendimento e profissionalismo.</p>
                                    	</div>
                                    </div>
                                 </div>
                                 <div class="div3 col-md-4 col-sm-12 col-xs-12 col-lg-4">
                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 card" id="card-top">
                                        <div class="icon">
                                            <img src="img/icon-cx3.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h3>Nossos valores</h3>
                                            <p>Trabalhar com ética e transparência, sempre comprometidos com trabalho em excelência,
                                             promovendo relações e parcerias duradouras com nossos clientes e colaboradores.</p>
                                    	</div>
                               	 	</div>
                				</div>
          	              	</div>
          	              	
            			</div>	
            		</div>
            	</div>
            	
            	<!-- SOBRE NÓS -->
            	
            	<div class="container">
        			<div class="row">
            			<div class="div4 col-md-5 col-sm-5 col-xs-12 col-lg-5" id="sobre-img"></div>
            			<div class="div5 sobretexto col-md-6 col-sm-7 col-xs-12 col-lg-7" id="sobre-texto">
                			<h3 class="sub-titulo">Conheça um pouco mais sobre a nossa empresa</h3>
                                      	
                			<p>Oferecemos serviços de agenciamento imobiliário com qualidade e segurança em Guarulhos e região. 
                			Com sede própria, atuamos nos setores de vendas, locação e administração tanto para imóveis residenciais 
                			quanto para imóveis comerciais, oferecendo uma variedade de serviços, desde estimativas de aluguéis, vendas
                			e avaliações de imóveis.</p>
                			
            			</div>
             		</div>  
  				</div>
				
                  <div class="container">
            		<div class="row">
                		<div class="espaco col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  		<!--  ESPAÇO  -->
                  			<hr></hr>
                  		</div>
                  	</div>
                 </div>				
				 		 
				<!-- DIV COM CARROSEL -->
				<div class="container">
        			<div class="row">
            			<div id="div_cards" class="div7 col-md-12 col-sm-12 col-xs-12 col-lg-12">
            				<h3 class="sub-titulo"> Imóveis para à venda</h3>
  		  				</div>
  				
                               <div id="cards" class="div8 col-md-3 col-sm-3 col-xs-3 col-lg-3">
							   <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
							   		<div class="imgs">
							   		<a href="frontQuemSomos.php">
                  						<img src="img/g1.png" width="" height="" alt="">
                  					</a>
                  					</div>
                  					<div class="texto">
                  						<h5>Apartamentos</h5>
                  						<p>Jardim Dourado – Guarulhos – SP <br/>
                                            2 quartos | 1 banheiro <br/>
                                           Locação:
                                           R$ 1.000,00</p>
                                     </div>
                  					<button>Ver detalhes</button>
                  				</div>
                  				</div>
                  				<div id="cards" class="div8 col-md-3 col-sm-3 col-xs-3 col-lg-3">
                  				<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
                  					<div class="imgs">
                  					<a href="frontQuemSomos.php">
                  						<img src="img/g2.png" width="" height="" alt="">
                  					</a>
                  					</div>
                  					<div class="texto">
                  						<h5>Apartamentos</h5>
                  						<p>Jardim Dourado – Guarulhos – SP <br/>
                                            2 quartos | 1 banheiro <br/>
                                           Locação:
                                           R$ 1.000,00</p>
                                     </div>
                  					<button>Ver detalhes</button>
                  				</div>
                  				</div>
                 				<div id="cards" class="div8 col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
                  				<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
                      				<div class="imgs">
                      				<a href="frontQuemSomos.php">
                      						<img src="img/g3.png" width="" height="" alt="">
                      				</a>
                      					</div>
                      					<div class="texto">
                      						<h5>Apartamentos</h5>
                      						<p>Jardim Dourado – Guarulhos – SP <br/>
                                                2 quartos | 1 banheiro <br/>
                                               Locação:
                                               R$ 1.000,00</p>
                                     	</div>
                      					<button>Ver detalhes</button>
                      				</div>
                      				</div>
								<div id="cards" class="div8 col-md-3 col-sm-3 col-xs-3 col-lg-3">
        						<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
                      				<div class="imgs">
                      				<a href="frontQuemSomos.php">
                      					<img src="img/img_div10.jpg" width="" height="" alt="">
                      				</a>
                      				</div>
                      				<div class="texto">
                  						<h5>Apartamentos</h5>
                  						<p>Jardim Dourado – Guarulhos – SP <br/>
                                            2 quartos | 1 banheiro <br/>
                                           Locação:
                                           R$ 1.000,00</p>
                                     </div>
                      				<button>Ver detalhes</button>
                      			</div>
                    		</div>
                    			<div class="link-card">
                                   <a href="frontQuemSomos.php">Veja todos os imóveis à venda</a>
                                </div>
    					</div>	  
    				</div>	 
				<!-- RODAPÉ -->
		<footer>		
				<div class="container-fluid">
        			<div class="row">
            			<div class="div9 col-md-12 col-sm-12 col-xs-12 col-lg-12" id="footer">
            				<div class="row-footer">
                    			<div class="div10 col-footer col-md-6 col-sm-6 col-xs-12 col-lg-6" id="">
                    				<h4>Endereço</h4>
                           		 	<ul>
                                		<li><p>Rua Ferraz De Vasconcelos, 3 - Jd Santa Cecília / 07123-240</p></li>
                                	</ul>
                    			</div>
                    			<div class="div11 col-footer col-md-3 col-sm-3 col-xs-12 col-lg-3" id="">
                    			 	<h4>Redes sociais</h4>
                                    <ul>
                                        <li><a href="https://api.whatsapp.com/send?phone=5511947248784&text=Ol%C3%A1%2C+gostaria+de+mais+informa%C3%A7%C3%B5es+sobre+o+im%C3%B3vel+REF+828">Whatsapp</a></li>
                                        <li><a href="https://www.facebook.com/people/Graciano-Im%C3%B3veis/100083183897342/">Facebook</a></li>
                                        <li><a href="https://www.instagram.com/https://instagram.com/gracianoimoveis_gru?r=nametag">Instagram</a></li>
                                    </ul>
                    			</div>
                    			<div class="div11 col-footer col-md-3 col-sm-3 col-xs-12 col-lg-3" id="">
                        			<h4>Contatos</h4>
                                    <ul>
                                    	<li><p>Telefone: (11) 9 3905-7735</p></li>
        								<li><p>Telefone: (11) 9 3905-7735</p></li>
                                        <li><a href="#">Email</a></li>
                                    </ul>
                    			</div>
            				</div>
            			</div>
             		</div> 
             		<div class="row">  
             			<div class="div12 col-md-12 col-sm-12 col-xs-12 col-lg-12" id="">
             				<p>©2022 Copyright - <a href="#">YO.CODE</a></p>
             			</div>
             		</div> 
				</div>
		</footer>

	</body>
</html>