<?php
    require_once 'DBQuery.class.php';
    
	class Agendamentos {

		private $idAgendamento;
		private $dtAgendamento;
		private $horaIni;
		private $horaFim;
		private $nomedocliente;
		private $idColaborador;
		private $idespColaboradores;
		private $idRecurso;
		
		private $dbquery;
		
		function __construct( $idAgendamento, $dtAgendamento, $horaIni, $horaFim, $nomedocliente, $idColaborador,$idespColaboradores, $idRecurso){
		    
		    $tableName  = "agendamentos.agendamentos"; //Nome do banco.tabela
		    $fieldsName = "idAgendamento,dtAgendamento,horaIni,horaFim,nomedocliente,idColaborador,idespColaboradores,idRecurso"; //Nome dos Campos
		    $fieldKey   = "idAgendamento"; //Nome do chaveprimária
		    $this->dbquery = new DBQuery($tableName, $fieldsName, $fieldKey);
		    
		    
			 $this->setIdAgendamento( $idAgendamento );
			 $this->setDtAgendamento( $dtAgendamento );
			 $this->setHoraIni( $horaIni );
			 $this->setHoraFim( $horaFim );
			 $this->setNomedocliente( $nomedocliente);
			 $this->setIdColaborador( $idColaborador );
			 $this->setIdespColaboradores( $idespColaboradores);
			 $this->setIdRecurso( $idRecurso );
		}

		public function toArray(){
			 return array(
				 $this->getIdAgendamento(),
				 $this->getDtAgendamento(),
				 $this->getHoraIni(),
				 $this->getHoraFim(),
			     $this->getNomedocliente(),
				 $this->getIdColaborador(),
			     $this->getIdespColaboradores(),
				 $this->getIdRecurso()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		
		public function save() {
		    if($this->getIdAgendamento() == 0){
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
		    if($this->getIdAgendamento() != 0){
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

		public function setNomedocliente( $nomedocliente ){
		    $this->nomedocliente = $nomedocliente;
		}

		public function getNomedocliente(){
		    return( $this->nomedocliente );
		}

		public function setIdColaborador( $idColaborador ){
			 $this->idColaborador = $idColaborador;
		}

		public function getIdColaborador(){
			  return( $this->idColaborador );
		}

		public function setIdespColaboradores( $idespColaboradores ){
		    $this->idespColaboradores = $idespColaboradores;
		}
		
		public function getIdespColaboradores(){
		    return( $this->idespColaboradores);
		}
		
		
		public function setIdRecurso( $idRecurso ){
			 $this->idRecurso = $idRecurso;
		}

		public function getIdRecurso(){
			  return( $this->idRecurso );
		}

	}


?>