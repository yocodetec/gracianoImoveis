<?php
    require "DBQuery.class.php";
    
	class Agendamentos {

		private $idAgendamento;
		private $dtAgendamento;
		private $horaIni;
		private $horaFim;
		private $idCliente;
		private $idColaborador;
		private $idEspecialidade;
		private $idRecurso;
		
		private $dbquery;
		
		function __construct( $idAgendamento, $dtAgendamento, $horaIni, $horaFim, $idCliente, $idColaborador, $idEspecialidade, $idRecurso){
		    
		    $tableName  = "agendamentos.agendamentos"; //Nome do banco.tabela
		    $fieldsName = "idAgendamento,dtAgendamento,horaIni,horaFim,idCliente,idColaborador,idEspecialidade,idRecurso"; //Nome dos Campos
		    $fieldKey   = "idAgendamento"; //Nome do chaveprimária
		    $this->dbquery = new DBQuery($tableName, $fieldsName, $fieldKey);
		    
		    
			 $this->setIdAgendamento( $idAgendamento );
			 $this->setDtAgendamento( $dtAgendamento );
			 $this->setHoraIni( $horaIni );
			 $this->setHoraFim( $horaFim );
			 $this->setIdCliente( $idCliente );
			 $this->setIdColaborador( $idColaborador );
			 $this->setIdEspecialidade( $idEspecialidade );
			 $this->setIdRecurso( $idRecurso );
		}

		public function toArray(){
			 return array(
				 $this->getIdAgendamento(),
				 $this->getDtAgendamento(),
				 $this->getHoraIni(),
				 $this->getHoraFim(),
				 $this->getIdCliente(),
				 $this->getIdColaborador(),
				 $this->getIdEspecialidade(),
				 $this->getIdRecurso()
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
		
		
		
		public function setIdAgendamento( $idAgendamento ){
			 $this->idAgendamento = $idAgendamento;
		}

		public function getIdAgendamento(){
			  return( $this->idAgendamento );
		}

		public function setDtAgendamento( $dtAgendamento ){
			 $this->dtAgendamento = $dtAgendamento;
		}

		public function getDtAgendamento(){
			  return( $this->dtAgendamento );
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

		public function setIdCliente( $idCliente ){
			 $this->idCliente = $idCliente;
		}

		public function getIdCliente(){
			  return( $this->idCliente );
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

		public function setIdRecurso( $idRecurso ){
			 $this->idRecurso = $idRecurso;
		}

		public function getIdRecurso(){
			  return( $this->idRecurso );
		}

	}


?>