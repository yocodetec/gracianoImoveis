

<script type="text/javascript" src="../js/javinha.js"> </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<h2>	Agendar Visita:		</h2>
<form action="../imoveis/php/Agendamentos.post.php" method="post">
<div class="form-group">
		Data do Agendamento:<input type="date" class="form-control"   name="dtAgendamento">
		Hora Inicial:<input type="time"  class="form-control"  name="horaIni">
		hora Final:<input type="time"  class="form-control"  name="horaFim">
		Nome do Cliente: <input type="text"  class="form-control"  name="nomedocliente">
        Id do Colaborador:<input type="text"  class="form-control"  name="idColaborador"> 
        </br>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal">
		 Ver lista de Colaboradores
		</button> </br>
		
		<div id="JanelaModal" class="modal fade">
			<div class="modal-dialog modal-dialog-scrollable">
		  		<div class="modal-content">
		   				<div class="modal-header">
		   				<h5 class="modal-title"> Lista de Colaboradores </h5>
		   				<button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
		   		</div>
		   			<div class="modal-body">
     							<?php 
			                      require_once __DIR__.'/../classes/Colaboradores.class.php';
			                      $colaboradores = new Colaboradores("", "", "", "", "");
			                      $rSetColaboradores = $colaboradores->list("");
	
			                     while ($linhaColaboradores = mysqli_fetch_assoc($rSetColaboradores)) {
			                     echo "Id: ".$linhaColaboradores['idColaborador']."<br/>";
			                     echo "Nome: ".$linhaColaboradores['nome']."<br/>";
			                     echo "CPF: ".$linhaColaboradores['cpf']."<br/>";
			                     echo "E-MAIL: ".$linhaColaboradores['email']."<br/>";
			                     echo "Telefone: ".$linhaColaboradores['telefone']."<br/>________";
    			                     }
    			             ?>
							
		   		  </div>
		   			<div class="modal-footer">
		   			<a href="#" target="_blank"></a>
		   			<button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Fechar </button>
		   			</div>
		   		</div>
		  	</div>
		</div>
        
        </br> 
        Id da Especialidade do Colaborador :<input type="text"  class="form-control"   name="idespColaboradores"> 
         </br>
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal1">
		 Ver Especialidades
		 </button> </br>
		
		<div id="JanelaModal1" class="modal fade">
			<div class="modal-dialog modal-dialog-scrollable">
		  		<div class="modal-content">
		   				<div class="modal-header">
		   				<h5 class="modal-title"> Especialidades </h5>
		   				<button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
		   		</div>
		   		<div class="modal-body">
     					
     					<?php 
     					require_once __DIR__.'/../classes/EspColaboradores.class.php';
     					$EspColaboradores = new EspColaboradores("", "", "", "");
     					$rSetEspColaboradores = $EspColaboradores->list("");
     			
     					    while ($linhaEspColaboradores = mysqli_fetch_assoc($rSetEspColaboradores)) {
     					    echo "Id de Cadastro: ".$linhaEspColaboradores['idespColaboradores']."<br/>";
     					    echo "Id do Colaborador: ".$linhaEspColaboradores['idColaborador']."<br/>";
     					    echo "Responsável por Vendas?: ".$linhaEspColaboradores['vendas']."<br/>";
     					    echo "Responsável por Alugar?: ".$linhaEspColaboradores['aluguel']."<br/>______<br/>";
     					}
     					?>
			       
		   		  </div>
		   			<div class="modal-footer">
		   			<a href="#" target="_blank"></a>
		   			<button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Fechar </button>
		   			</div>
		   		</div>
		  	</div>
		</div>

        </br> 
        Id do Recurso:<input type="text"  class="form-control"   name="idRecurso">
        </br> 
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal2">
		 Ver Recursos Cadastrados
		</button> </br>
		
		<div id="JanelaModal2" class="modal fade">
			<div class="modal-dialog modal-dialog-scrollable">
		  		<div class="modal-content">
		   				<div class="modal-header">
		   				<h5 class="modal-title"> Recursos Cadastrados </h5>
		   				<button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
		   		</div>
		   		<div class="modal-body">
     					<?php 
			              require_once __DIR__.'/../classes/Recursos.class.php';
			              $recursos = new Recursos("", "", "", "", "", "", "", "", "", "");
			              $rSetRecursos = $recursos->list("");
			
			             while ($linhaRecursos = mysqli_fetch_assoc($rSetRecursos)) {
			             echo "Id: ".$linhaRecursos['idRecurso']."<br/>";
			             echo "Nome do Imóvel: ".$linhaRecursos['nomedoimovel']."<br/>";
			             echo "Tipo do Imóvel: ".$linhaRecursos['tipo']."<br/>";
			             echo "Quartos: ".$linhaRecursos['qtQuartos']."<br/>";
			             echo "Suítes: ".$linhaRecursos['qtSuites']."<br/>";
			             echo "Banheiros: ".$linhaRecursos['qtBanheiros']."<br/>";
			             echo "Área Construída: ".$linhaRecursos['areaConstru']."<br/>";
			             echo "Vagas: ".$linhaRecursos['vagas']."<br/>";
			             echo "Vagas: ".$linhaRecursos['descr']."<br/>";
			             echo "Descrição: ".$linhaRecursos['idCliente']."<br/>______<br/>";
			             }
		
			
			         ?>
			       
		   		  </div>
		   			<div class="modal-footer">
		   			<a href="#" target="_blank"></a>
		   			<button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Fechar </button>
		   			</div>
		   		</div>
		  	</div>
		</div>

		</br>
		<input type="submit"   value="enviar"  class="btn btn-primary" onclick="recarrega2()"><br>
		
        
</div>
</form>
</br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal8">
		 Ver Agendamentos
		</button> </br>
		
		<div id="JanelaModal8" class="modal fade">
			<div class="modal-dialog modal-dialog-scrollable">
		  		<div class="modal-content">
		   				<div class="modal-header">
		   				<h5 class="modal-title">Agendamentos </h5>
		   				<button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
		   		</div>
		   		<div class="modal-body">
     					<?php 
			              require_once __DIR__.'/../classes/Agendamentos.class.php';
			              $Agendamentos = new Agendamentos("", "", "", "", "", "", "", "");
			              $rSetAgendamentos = $Agendamentos->list("");
			
			              while ($linhaAgendamentos = mysqli_fetch_assoc($rSetAgendamentos)) {
			                  echo "Id: ".$linhaAgendamentos['idAgendamento']."<br/>";
			                  echo "Data: ".$linhaAgendamentos['dtAgendamento']."<br/>";
			                  echo "Hora Inicial: ".$linhaAgendamentos['horaIni']."<br/>";
			                  echo "Hora Final: ".$linhaAgendamentos['horaFim']."<br/>";
			                  echo "Nome do Cliente: ".$linhaAgendamentos['nomedocliente']."<br/>";
			                  echo "id do Colaborador: ".$linhaAgendamentos['idColaborador']."<br/>";
			                  echo "id da Especialidade do Colaborador: ".$linhaAgendamentos['idespColaboradores']."<br/>";
			                  echo "id do Recurso: ".$linhaAgendamentos['idRecurso']."<br/>______<br/>";
			             }
		
			
			         ?>
			         <form action="../imoveis/php/deletaragendamento.post.php" method="post"> 
     	  					Escreva o Id do Agendamento para excluí-lo:</br>
     	  						<input type="text"   name="id">
     	  						<br/>
     	  						<input type="submit" class="btn btn-primary" onclick="excluir()" value="enviar">
     				</form>
		   		  </div>
		   			<div class="modal-footer">
		   			<a href="#" target="_blank"></a>
		   			<button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Fechar </button>
		   			</div>
		   		</div>
		  	</div>
		</div>
