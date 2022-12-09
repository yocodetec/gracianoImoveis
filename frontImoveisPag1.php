<!DOCTYPE html>
<html>
	<head>
    		<meta charset="UTF-8">
			
	  <!-- JS -->
			<script src="js/script.js"></script>		
      <!-- CSS -->
			<link href="css/style2.css" type="text/css" rel="stylesheet">
			<link href="css/header.css" type="text/css" rel="stylesheet">
			<link href="css/footer.css" type="text/css" rel="stylesheet">
      <!-- JQUERY -->
         	<script type="text/javascript" src="js/js_1.9/jquery-1.8.2.js"></script>
        	<script type="text/javascript" src="js/js_1.9/jquery-ui-1.9.1.custom.min.js"></script>
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>	
      <!-- BOOTSTRAP -->
	  		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	  <!-- ICONS -->
			<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	</head>	
	
	<body>			
     	<header>		
        	<!-- MENU -->
		        <div class="container-fluid">
        			<div class="row">
        				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        					<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
                				<div class="container-fluid">
                					<a href="index.php" class="navbar-brand">
                						<img src="img/logo.png" height="65px" alt="">  Graciano Imóveis
                					</a>
                					<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                						<span class="navbar-toggler-icon"></span>
                					</button>
                					<div class="collapse navbar-collapse" id="navbarCollapse">
                						<div class="navbar-nav">
                							<a href="frontQuemSomos.php" class="nav-item nav-link">Buscar imóveis</a>
											<a href="login.php" class="nav-item nav-link">Login</a>
                						</div>
                					</div>
                				</div> 
                			 </nav>
                		</div> 
            		 </div>
            	</div>	 
   
       </header>   	
       
    	<div class="container">
    		<div class="row">
    					<div id="div3" class="div3 col-md-12 col-sm-12 col-xs-12 col-lg-12">
    						<h3> Imóveis em Guarulhos - SP</h3>
    						<hr></hr>
    					</div>
    				</div>
    				
    					<div class="row">
    						<div id="div4" class="divlinha1 col-md-6 col-sm-12 col-xs-12 col-lg-6">
    							<div id="cards" class="div8 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  				<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
                  					<div class="imgs">
                  					<a href="frontModeloDiv1.php">
                  						<img src="img/div1-1.png" width="" height="" alt="">
                  						</a>
                  					</div>
                  					<div class="texto">
                  						<h5>Apartamentos</h5>
                  						<p>Vila Barros – Guarulhos – SP <br/>
                                            2 quartos | 1 banheiro <br/>
                                           Locação:
                                           R$ 1.250,00</p>
                                     </div>
                  					<button type="button" name="btn_imovel1" id="btn_imovel1" onClick="btn_imovel1()">Ver detalhes</button>
                  				</div>
                  				</div>
    						</div>
    						<div id="div5" class="divlinha1 col-md-6 col-sm-12 col-xs-12 col-lg-6">
    							<div id="cards" class="div8 col-md-12 col-sm-12 col-xs-12 col-lg-12">
							   <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
							   		<div class="imgs">
							   		<a href="frontModeloDiv2.php">
                  						<img src="img/div2-1.png" width="" height="" alt="">
                  					</a>
                  					</div>
                  					<div class="texto">
                  						<h5>Casas</h5>
                  						<p>Jardim Célia – Guarulhos – SP <br/>
                                           2 quartos | 2 banheiros <br/>
                                           Locação:
                                           R$ 1.500,00</p>
                                     </div>
                  					<button type="button" name="btn_imovel2" id="btn_imovel2" onClick="btn_imovel2()">Ver detalhes</button>
                  				</div>
                  				</div>
    						</div>
    					</div>
    
    					<div class="row">
    						<div id="div6" class="divlinha2 col-md-6 col-sm-12 col-xs-12 col-lg-6">
    							<div id="cards" class="div8 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  				<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
                  					<div class="imgs">
                  					<a href="frontModeloDiv3.php">
                  						<img src="img/div3-1.png" width="" height="" alt="">
                  					</a>
                  					</div>
                  					<div class="texto">
                  						<h5>Apartamentos</h5>
                  						<p>Jardim Santa Clara – Guarulhos – SP <br/>
                                            1 quarto | 1 banheiro <br/>
                                           	Venda:
                                           R$ 170.000,00</p>
                                     </div>
                  					<button type="button" name="btn_imovel3" id="btn_imovel3" onClick="btn_imovel3()">Ver detalhes</button>
                  				</div>
                  				</div>
    						</div>
    						<div id="div7" class="divlinha2 col-md-6 col-sm-12 col-xs-12 col-lg-6">
								<div id="cards" class="div8 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  				<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
                      				<div class="imgs">
                      				<a href="frontModeloDiv4.php">
                      						<img src="img/div4-1.png" width="" height="" alt="">
                      				</a>
                      					</div>
                      					<div class="texto">
                      						<h5>Casas</h5>
                      						<p>Jardim Rosa de França – Guarulhos – SP <br/>
                                                2 quartos | 2 banheiros <br/>
                                               Locação:
                                               R$ 2.000,00</p>
                                     	</div>
                      					<button type="button" name="btn_imovel4" id="btn_imovel4" onClick="btn_imovel4()">Ver detalhes</button>
                      				</div>
                      			</div>
    						</div>
    					</div>
    					<nav aria-label="Page navigation example">
  								<ul class="pagination">
        							<li class="page-item"><a class="page-link" href="frontImoveisPag1.php">1</a></li>
        							<li class="page-item"><a class="page-link" href="#" onClick="mudaparaPag2()">2</a></li>
    							</ul>
    						</nav>
    							
    			</div>
    		</div>
		</div>
		
    					
		 <!-- RODAPÉ -->
				<footer class="footer">	
					<div class="container">
						<div class="row">	
                				<div class="footer-col col-md-4 col-sm-12 col-xs-12 col-lg-4">
                					<h5>Endereço:</h5>
                					<ul>
                						<li> Rua Dona Tecla, 230 - Jardim Flor da Montanha - SP</li>
                					</ul>
                				</div>
                				<div class="footer-col col-md-4 col-sm-12 col-xs-12 col-lg-4">
                					<h5>Contatos:</h5>
                					<ul>
                                       	<li><p>Telefone: (11) 9 3905-7735</p></li>
            							<li><p>Telefone: (11) 9 3905-7735</p></li>
                                        <li><a href="#">Email</a></li>
                                    </ul>            					
                				</div>
                				<div class="footer-col col-md-4 col-sm-12 col-xs-12 col-lg-4">
                					<h5>Redes sociais:</h5>
                					<ul>
                                      	<li><a href="https://www.facebook.com/people/Graciano-Im%C3%B3veis/100083183897342/">Facebook</a></li>
            							<li><a href="https://api.whatsapp.com/send?phone=5511947248784&text=Ol%C3%A1%2C+gostaria+de+mais+informa%C3%A7%C3%B5es">Whatsapp</a></li>
                                        <li><a href="https://www.instagram.com/https://instagram.com/gracianoimoveis_gru?r=nametag">Instagram</a></li>
                                    </ul>            					
                				</div>
                			</div>
                		</div>	
					</footer>
							<div class="container-fluid">
                				<div class="row">	
                					<div class="copy col-md-12 col-sm-12 col-xs-12 col-lg-12">
										<p> Feito por  <a href="#">YO.CODE</a> - Icons by <a href="https://fonts.google.com/icons">Google Fonts</a> & <a href="https://www.addtoany.com/"> AddToAny </a> | 
										Photo Banner by <a href="https://unsplash.com/">Unsplash </a> </p>                					
									</div>
                				</div>
                			</div>
	</body>
</html>  