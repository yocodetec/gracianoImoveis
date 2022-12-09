<?php 

    require_once __DIR__.'/../classes/AgendaEmpresa.class.php';
    $AgendaEmpresa = new AgendaEmpresa("", "", "", "");
    $rSetAgendaEmpresa = $AgendaEmpresa->list("");
    $deletarAgendaEmpresa = $AgendaEmpresa->delete("");


?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="../js/javinha.js"> </script>
<form action="../imoveis/php/AgendaEmpresa.post.php" method="post">
<div class="form-group">
		<h2>Adicionar Informações ao Calendário:</h2> 
		Data de Funcionamento:<br/>
		<input type="date" class="form-control"    name="dtFuncionamento"><br/>
		hora Inicial:<br/>
		<input type="time" class="form-control"   name="horaIni"> <br/>
		hora Final:<br/>
		<input type="time" class="form-control"   name="horaFim"><br/>
		<input type="submit"  class="btn btn-primary" value="enviar" onclick="recarrega2()">

</div>	
</form>
<!-- Ação Modal Ver Calendário --> 
		</br>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JanelaModal">
		Calendário
		</button> </br>
		
		<div id="JanelaModal" class="modal fade">
		
		   <div class="modal-dialog modal-dialog-scrollable">
		   
		   		<div class="modal-content">
		   				
		   			<div class="modal-header">
		   				<h5 class="modal-title">Calendário</h5>
		   				<button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
		   			</div>
		   			
		   			<div class="modal-body">
		   			<?php 
		        while ($linhaAgendaEmpresa = mysqli_fetch_assoc($rSetAgendaEmpresa)) {
                echo "Id:".$linhaAgendaEmpresa['idAgendaEmpresa']."<br/>";
                echo "Dia de funcionamento: ".$linhaAgendaEmpresa['dtFuncionamento']."<br/>";
                echo "Hora de Abertura: ".$linhaAgendaEmpresa['horaIni']."<br/>";
                echo "Fim de expediente: ".$linhaAgendaEmpresa['horaFim']."</br>_____ </br>";
                 }
                ?>
     	<form action="../imoveis/php/deleteagen.post.php" method="post"> 
     	  Escreva o Id da informação para excluí-la:</br>
     	  <input type="text"   name="id"><br/>
     	  <input type="submit" class="btn btn-primary"onclick="excluir()"  value="enviar">
     	</form>
		   		  </div>
		   		
		   		<div class="modal-footer">
		   			<a href="#" target="_blank"></a>
		   			<button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Fechar </button>
		   		</div>
		   </div>
		  
		   
		   </div>
		</div>