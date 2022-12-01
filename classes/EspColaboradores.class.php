<?php
    require "DBQuery.class.php";
    
	class EspColaboradores {

		private $idColaborador;
		private $idEspecialidade;

		function __construct( $idColaborador, $idEspecialidade){
		    $tableName  = "agendamentos.agendaEmpresa"; //Nome do banco.tabela
		    $fieldsName = "idAgendaEmpresa,dtFuncionamento,horaIni,horaFim"; //Nome dos Campos
		    $fieldKey   = "idAgendaEmpresa"; //Nome do chaveprimária
		    $this->dbquery = new DBQuery($tableName, $fieldsName, $fieldKey);
		    
			 $this->setIdColaborador( $idColaborador );
			 $this->setIdEspecialidade( $idEspecialidade );
		}

		public function toArray(){
			 return array(
				 $this->getIdColaborador(),
				 $this->getIdEspecialidade()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}
		
		public function save() {
		    if($this->getIdUsuario() == 0){
		        return( $this->dbquery->insert($this->toArray()));
		    }else{
		        return( $this->dbquery->update($this->toArray()));
		    }
		}
		
		public function list($where) {
		    $rSet = $this->dbquery->select($where);
		    return( $rSet );
		}
		
		public function delete() {
		    if($this->getIdUsuario() != 0){
		        return( $this->dbquery->delete($this->toArray()));
		    }
		}
		

		public function setIdColaborador( $idColaborador ){
			 $this->idColaborador = $idColaborador;
		}

		public function getIdColaborador(){
			  return( $this->idColaborador );
		}

		public function setIdEspecialidade( $idEspecialidade ){
			 $this->idEspecialidade = $idEspecialidade;
		}

		public function getIdEspecialidade(){
			  return( $this->idEspecialidade );
		}

	}


?>