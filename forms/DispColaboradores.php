<?php 

    require_once __DIR__.'/../classes/Colaboradores.class.php';
    $colaboradores = new Colaboradores("", "", "", "", "", "", "");
    $rSetColaboradores = $colaboradores->list("");
    
    
?>
<script type="text/javascript" src="../js/javinha.js"> </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<form action="../imoveis/php/DispColaboradores.post.php" method="post">
<div class="form-group">
		<h2>Cadastre a Disponibilidade do Colaborador:</h2> 
		Data Disponível:<br/>
		<input type="date"  class="form-control"  name="dtDisp"><br/>
		hora Inicial:<br/>
		<input type="time"  class="form-control"  name="horaIni"><br/>
		hora Final:<br/>
		<input type="time"  class="form-control"   name="horaFim"><br/>

		Id do Colaborador:<br/>
		<input type="text"   class="form-control"  name="idColaborador"><br/>
		
		<!-- Ação Modal Pesquisar Colaborador --> 
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal">
		Ver Registros de Colaboradores
		</button> </br>
		
		<div id="JanelaModal" class="modal fade">
		
		   <div class="modal-dialog modal-dialog-scrollable">
		   
		   		<div class="modal-content">
		   				
		   			<div class="modal-header">
		   				<h5 class="modal-title">Registros de Colaboradores</h5>
		   				<button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
		   			</div>
		   			
		   			<div class="modal-body">
		   			<?php 
                while ($linhaColaboradores = mysqli_fetch_assoc($rSetColaboradores)) {
                echo "Id: ".$linhaColaboradores['idColaborador']."<br/>";
                echo "Nome: ".$linhaColaboradores['nome']."<br/>";
                echo "CPF: ".$linhaColaboradores['cpf']."<br/>";
                echo "E-MAIL: ".$linhaColaboradores['email']."<br/>";
                echo "Telefone: ".$linhaColaboradores['telefone']."<br/>________<br/>";    
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

		<br/>
		<input type="submit" class="btn btn-primary" value="enviar" onclick="recarrega2()">
</div>		
</form>
</html>