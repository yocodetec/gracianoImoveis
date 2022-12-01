<?php
    require "DBQuery.class.php";
  
	class AgendaEmpresa {

		private $idAgendaEmpresa;
		private $dtFuncionamento;
		private $horaIni;
		private $horaFim;
		
		private $dbquery;

		function __construct( $idAgendaEmpresa, $dtFuncionamento, $horaIni, $horaFim){
		    
		    $tableName  = "agendamentos.agendaEmpresa"; //Nome do banco.tabela
		    $fieldsName = "idAgendaEmpresa,dtFuncionamento,horaIni,horaFim"; //Nome dos Campos
		    $fieldKey   = "idAgendaEmpresa"; //Nome do chaveprimária
		    $this->dbquery = new DBQuery($tableName, $fieldsName, $fieldKey);
		    
		    
			 $this->setIdAgendaEmpresa( $idAgendaEmpresa );
			 $this->setDtFuncionamento( $dtFuncionamento );
			 $this->setHoraIni( $horaIni );
			 $this->setHoraFim( $horaFim );
		}

		public function toArray(){
			 return array(
				 $this->getIdAgendaEmpresa(),
				 $this->getDtFuncionamento(),
				 $this->getHoraIni(),
				 $this->getHoraFim()
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
		
		
		
		
		
		public function setIdAgendaEmpresa( $idAgendaEmpresa ){
			 $this->idAgendaEmpresa = $idAgendaEmpresa;
		}

		public function getIdAgendaEmpresa(){
			  return( $this->idAgendaEmpresa );
		}

		public function setDtFuncionamento( $dtFuncionamento ){
			 $this->dtFuncionamento = $dtFuncionamento;
		}

		public function getDtFuncionamento(){
			  return( $this->dtFuncionamento );
		}

		public function setHoraIni( $horaIni ){
			 $this->horaIni = $horaIni;
		}

		public function getHoraIni(){
			  return( $this->horaIni );
		}

		public function setHoraFim( $horaFim ){
			 $this->horaFim = $horaFim;
		}

		public function getHoraFim(){
			  return( $this->horaFim );
		}

	
}


?>