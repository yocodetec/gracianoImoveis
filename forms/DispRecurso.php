<?php 

    require_once __DIR__.'/../classes/Recursos.class.php';
    $recursos = new Recursos("", "", "", "", "", "", "", "", "", "");
    $rSetRecursos = $recursos->list("");
    
    
?>
<html>
<head>
<script type="text/javascript" src="../js/javinha.js"> </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="../js/javinha.js"> </script>
</head>
<form action="../imoveis/php/DispRecurso.post.php" method="post">
<div class="form-group">
		
		<h2>Cadastre a Disponibilidade do Recurso para visitas:</h2> 
		Data da Disponibilidade do Recurso:<br/>
		<input type="date" class="form-control"  name="dtDispRecurso"><br/>
		Hora Inicial:<br/>
		<input type="time" class="form-control"  name="horaIni"><br/>
		Hora Fim:<br/>
		<input type="time" class="form-control"   name="horaFim"><br/>
		Comentário caso haja estabilidade de momento para visitas:<br/>
		<input type="comentario" class="form-control"   name="comentario"><br/>
		Id do Recurso:<br/>
		<input type="text" class="form-control" name="idRecurso"><br/>
		
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal">
		 Ver Recursos Cadastrados
		 </button> </br>
		
		<div id="JanelaModal" class="modal fade">
			<div class="modal-dialog modal-dialog-scrollable">
		  		<div class="modal-content">
		   				<div class="modal-header">
		   				<h5 class="modal-title"> Recursos Cadastrados </h5>
		   				<button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
		   		</div>
		   			<div class="modal-body">
     					<form action="../imoveis/php/deletarcli.post.php" method="post"> 
     	  					<?php 
                while ($linhaRecursos = mysqli_fetch_assoc($rSetRecursos)) {
                echo "Id: ".$linhaRecursos['idRecurso']."<br/>";
                echo "Nome do Imóvel: ".$linhaRecursos['nomedoimovel']."<br/>";
                echo "Nome do Proprietário: ".$linhaRecursos['nomedoproprietario']."<br/>";
                echo "Tipo do Imóvel: ".$linhaRecursos['tipo']."<br/>";
                echo "Quartos: ".$linhaRecursos['qtQuartos']."<br/>";
                echo "Suítes: ".$linhaRecursos['qtSuites']."<br/>";
                echo "Banheiros: ".$linhaRecursos['qtBanheiros']."<br/>";
                echo "Área Construída: ".$linhaRecursos['areaConstru']."<br/>";
                echo "Vagas: ".$linhaRecursos['vagas']."<br/>";
                echo "Descrição: ".$linhaRecursos['descr']."<br/>______<br/>";
            }
        ?>
     	  					
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
		<input type="submit" class="btn btn-primary"   value="enviar" onclick="recarrega2()">
</div>
</form>
</html>