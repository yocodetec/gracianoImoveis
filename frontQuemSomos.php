<!DOCTYPE html>
<html>
	<head>
    		<meta charset="UTF-8">
			
	  <!-- JS -->
			<script src="js/script4.js"></script>		
      <!-- CSS -->
			<link href="css/style2.css" type="text/css" rel="stylesheet">
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
	
	<body>			
     	<header>		
        	<!-- MENU -->
		        <div class="container-fluid">
        			<div class="row">
        				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        					<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
                				<div class="container-fluid">
                					<a href="frontTeste.php" class="navbar-brand">
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
            	
                    	<script type="text/javascript">
                          function mudapag(){
                            window.location.href = "login.php"}
                     	</script>
                                  
       </header>   	
       
    	<div class="container">
    		<div class="row">
    			<div id="div1" class="div1 col-md-3 col-sm-12 col-xs-12 col-lg-3">
    				<div class="negociacao">
    					<button class="btn-colum col-md-5 col-sm-5 col-xs-5 col-lg-5" type="button" name="bt" id="bt_locação">Locação</button>
        				<button class="btn-colum col-md-5 col-sm-5 col-xs-5 col-lg-5" type="button" name="bt" id="bt_venda">Venda</button>
					</div>
					<br/>
    				<h4><label for="tipo_imovel">Tipo de imóvel:</label></h4>
                	<select id="tipo_imovel" class="col-md-12 col-sm-12 col-xs-12 col-lg-12"name="tipo_imovel">
                		<option value="SP">Todos</option>
                		<option value="RJ">Apartamentos</option>
                		<option value="PB">Casa</option>
                	</select>
					
					<div>
					
					<div id="bairros">
    					<h4>Bairro</h4>
                    	<input type="checkbox" id="">
                    	<label for="tipo_bairro">Aldeia de Mairiporã</label><br/> 
    			    	<input type="checkbox" id="">
                    	<label for="tipo_bairro"> Bom Clima</label><br/>
                    	<input type="checkbox" id="">
                    	<label for="tipo_bairro">Bonsucesso</label><br/>
                    	<input type="checkbox" id="">
                    	<label for="tipo_bairro">Centro</label><br/>
                    	<input type="checkbox" id="">
                    	<label for="tipo_bairro">Cocaia</label><br/>
                	</div>
                	
    				</div>
    			</div>
    			
    			
    			<div id="div2" class="div2 col-md-9 col-sm-12 col-xs-12 col-lg-9">
    				<div class="row">
    					<div id="div3" class="div3 col-md-12 col-sm-12 col-xs-12 col-lg-12">
    						<h3> Imóveis em Guarulhos - SP</h3>
    						<hr></hr>
    						botoes
    					</div>
    				</div>
    					<div class="row">
    						<div id="div5" class="div5 col-md-6 col-sm-12 col-xs-12 col-lg-6">
    							<div id="cards" class="div8 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  				<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
                  					<div class="imgs">
                  					<a href="frontModelo.php">
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
    						</div>
    						<div id="div5" class="div5 col-md-6 col-sm-12 col-xs-12 col-lg-6">
    							<div id="cards" class="div8 col-md-12 col-sm-12 col-xs-12 col-lg-12">
							   <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
							   		<div class="imgs">
							   		<a href="frontHome.php">
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
    						</div>
    					</div>
    					<div class="row">
    						<div id="div6" class="div6 col-md-6 col-sm-12 col-xs-12 col-lg-6">
    							<div id="cards" class="div8 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  				<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
                  					<div class="imgs">
                  					<a href="frontHome.php">
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
    						</div>
    						<div id="div6" class="div6 col-md-6 col-sm-12 col-xs-12 col-lg-6">
								<div id="cards" class="div8 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  				<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 card-body">
                      				<div class="imgs">
                      				<a href="frontHome.php">
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
    						</div>
    					</div>
    			</div>
    		</div>
		</div>
		
						<div class="row">
        					<div id="div7" class="div7 col-md-12 col-sm-12 col-xs-12 col-lg-12">
								<!--ESPAÇO-->
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