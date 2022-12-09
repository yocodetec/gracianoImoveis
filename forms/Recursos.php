<script type="text/javascript" src="../js/javinha.js"> </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<html>
<h2>Cadastre um Recurso:</h2> 

<form action="../imoveis/php/Recursos.post.php" method="post">
<div class="form-group">
		Nome do Imovel:<br/>
		<input type="text" class="form-control"   name="nomedoimovel"><br/>
		Nome do Proprietário:<br/>
		<input type="text" class="form-control"   name="nomedoproprietario"><br/>
		Tipo:<br/>
		<input type="text" class="form-control"   name="tipo"><br/>
		Quantidade de Quartos:<br/>
		<input type="text" class="form-control"   name="qtQuartos"><br/>
		Quantidade de Suites:<br/>
		<input type="text"  class="form-control"  name="qtSuites"><br/>
		Quantidade de Banheiros:<br/>
		<input type="text" class="form-control"   name="qtBanheiros"><br/>
		Area da Construção:<br/>
		<input type="text" class="form-control"   name="areaConstru"><br/>
		Vagas:<br/>
		<input type="text"  class="form-control"  name="vagas"><br/>
		Descrição:<br/>
		<input type="text" class="form-control"   name="descr"><br/>
		Id do Proprietário:<br/>
		<input type="text" class="form-control"   name="idCliente"><br/>

		
		<input type="submit"   class="btn btn-primary" value="enviar" onclick="recarrega2()">
</div>
</form>
</html>
</br>
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal">
		 Deletar Recurso
		 </button> </br>
		
		<div id="JanelaModal" class="modal fade">
			<div class="modal-dialog modal-dialog-scrollable">
		  		<div class="modal-content">
		   				<div class="modal-header">
		   				<h5 class="modal-title"> Deletar Recurso </h5>
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
                echo "Descrição: ".$linhaRecursos['descr']."<br/>";
                echo "Id do Proprietário: ".$linhaRecursos['idCliente']."<br/>______<br/>";
            }
        ?>
     					<form action="../imoveis/php/deletarre.post.php" method="post"> 
     	  					Escreva o Id do Recurso para excluí-lo:</br>
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
		<br/>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal10">
		 Ver Propietários Cadastrados
		 </button> </br>
		
		<div id="JanelaModal10" class="modal fade">
			<div class="modal-dialog modal-dialog-scrollable">
		  		<div class="modal-content">
		   				<div class="modal-header">
		   				<h5 class="modal-title"> Propietários Cadastrados</h5>
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
  
		   		  </div>
		   		
		   		<div class="modal-footer">
		   			<a href="#" target="_blank"></a>
		   			<button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Fechar </button>
		   		</div>
		   </div>
		  </div>
		</div>