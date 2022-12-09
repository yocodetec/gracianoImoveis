<html>
<script type="text/javascript" src="../js/javinha.js"> </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


<h2>Adicionar Colaborador:</h2> 
<form action="../imoveis/php/Colaboradores.post.php" method="post">
<div class="form-group">
		Nome: <br/>
		<input type="text" class="form-control"   name="nome"> <br/>
		CPF: <br/>
		<input type="text" class="form-control"  placeholder="000.000.000-00" name="cpf"> <br/>
		E-mail: <br/>
		<input type="text" class="form-control"   name="email"> <br/>
		Telefone:<br/>
		<input type="tel" class="form-control"  name="telefone" required placeholder="(xx) xxxxx-xxxx"> <br/>
		<input type="submit"  class="btn btn-primary" value="enviar" onclick="recarrega1()">
</div>
</form>
<br/>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal">
		 Deletar Colaborador
		 </button> </br>
		
		<div id="JanelaModal" class="modal fade">
			<div class="modal-dialog modal-dialog-scrollable">
		  		<div class="modal-content">
		   				<div class="modal-header">
		   				<h5 class="modal-title"> Deletar Colaborador</h5>
		   				<button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
		   		</div>
		   			<div class="modal-body">
     					<form action="../imoveis/php/deletarco.post.php" method="post"> 
     					<?php 
			     require_once __DIR__.'/../classes/Colaboradores.class.php';
			     $colaboradores = new Colaboradores("", "", "", "", "");
			     $rSetColaboradores = $colaboradores->list("");
			
	
			     while ($linhaColaboradores = mysqli_fetch_assoc($rSetColaboradores)) {
			    echo "Id:".$linhaColaboradores['idColaborador']."<br/>";
			    echo "Nome:".$linhaColaboradores['nome']."<br/>";
			    echo "CPF:".$linhaColaboradores['cpf']."<br/>";
			    echo "E-MAIL:".$linhaColaboradores['email']."<br/>";
			    echo "Telefone:".$linhaColaboradores['telefone']."<br/>________<br/>";
			     }
		
			
			     ?>
     	  					Escreva o Id do Colaborador para excluí-lo:</br>
     	  						<input type="text"   name="id">
     	  						<br/>
     	  						<input type="submit" class="btn btn-primary"  value="enviar" onclick="excluir()">
     					</form>
		   		  </div>
		   		
		   		<div class="modal-footer">
		   			<a href="#" target="_blank"></a>
		   			<button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Fechar </button>
		   		</div>
		   </div>
		  </div>
		</div>
</html>
