<script type="text/javascript" src="../js/javinha.js"> </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

 <h2>Adicionar Cliente:</h2> 
<form action="php/Clientes.post.php" method="post">
	<div class="form-group">
		Nome: <br/>
		<input type="text" class="form-control"  name="nome"><br/>
		Sobrenome: <br/>
		<input type="text" class="form-control"  name="sobrenome"><br/>
		E-mail: <br/>
		<input type="text"  class="form-control"  name="email"><br/>
		telefone:<br/>
		<input type="tel" class="form-control"  name="telefone" required placeholder="(xx) xxxxx-xxxx"> <br/>
		Data de Nascimento: <br/>
		<input type="date" class="form-control"  name="dtNasc"><br/>
		CPF: <br/>
		<input type="text" class="form-control"  placeholder="000.000.000-00" name="CPF"><br/>
		Endereço: <br/>
		<input type="text" class="form-control   name="Endereco"><br/>
		<input type="submit" class="btn btn-primary"  value="enviar" onclick="recarrega()"><br>
	</div>		
</form>
</br>
		 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal">
		 Deletar Cliente
		 </button> </br>
		
		<div id="JanelaModal" class="modal fade">
			<div class="modal-dialog modal-dialog-scrollable">
		  		<div class="modal-content">
		   				<div class="modal-header">
		   				<h5 class="modal-title"> Deletar Cliente</h5>
		   				<button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
		   		</div>
		   			<div class="modal-body">
		   			<?php 

                    require_once __DIR__.'/../classes/Clientes.class.php';
                    $clientes = new Clientes("", "", "", "", "", "", "","");
                    $rSetClientes = $clientes->list("");
                        
                    while ($linhaClientes = mysqli_fetch_assoc($rSetClientes)) {
                        echo "Id: ".$linhaClientes['idCliente']."<br/>";
                        echo "Nome: ".$linhaClientes['nome']."<br/>";
                        echo "Sobrenome: ".$linhaClientes['sobrenome']."<br/>";
                        echo "E-mail: ".$linhaClientes['email']."<br/>";
                        echo "Telefone: ".$linhaClientes['telefone']."<br/>";
                        echo "Data de Nascimento: ".$linhaClientes['dtNasc']."<br/>";
                        echo "CPF: ".$linhaClientes['CPF']."<br/>";
                        echo "Endereço: ".$linhaClientes['Endereco']."<br>____<br>";
                    }
                    ?>
     					<form action="../imoveis/php/deletarcli.post.php" method="post"> 
     	  					Escreva o Id do Cliente para excluí-lo:</br>
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