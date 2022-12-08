<?php

    require "DBQuery.class.php";
	class DispRecurso {

		private $idDispRecurso;
		private $dtDispRecurso;
		private $horaIni;
		private $horaFim;
		private $idRecurso;
		
		private $dbquery;

		function __construct( $idDispRecurso, $dtDispRecurso, $horaIni, $horaFim, $idRecurso){
		    $tableName  = "agendamentos.disprecurso"; //Nome do banco.tabela
		    $fieldsName = "idDispRecurso,dtDispRecurso,horaIni,horaFim,idRecurso"; //Nome dos Campos
		    $fieldKey   = "idDispRecurso"; //Nome do chaveprimária
		    $this->dbquery = new DBQuery($tableName, $fieldsName, $fieldKey);
		    
			 $this->setIdDispRecurso( $idDispRecurso );
			 $this->setDtDispRecurso( $dtDispRecurso );
			 $this->setHoraIni( $horaIni );
			 $this->setHoraFim( $horaFim );
			 $this->setIdRecurso( $idRecurso );
		}

		public function toArray(){
			 return array(
				 $this->getIdDispRecurso(),
				 $this->getDtDispRecurso(),
				 $this->getHoraIni(),
				 $this->getHoraFim(),
				 $this->getIdRecurso()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function save() {
		    if($this->getIdDispRecurso() == 0){
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
		    if($this->getIdDispRecurso() != 0){
		        return( $this->dbquery->delete($this->toArray()));
		    }
		}
		
		public function setIdDispRecurso( $idDispRecurso ){
			 $this->idDispRecurso = $idDispRecurso;
		}

		public function getIdDispRecurso(){
			  return( $this->idDispRecurso );
		}

		public function setDtDispRecurso( $dtDispRecurso ){
			 $this->dtDispRecurso = $dtDispRecurso;
		}

		public function getDtDispRecurso(){
			  return( $this->dtDispRecurso );
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

		public function setIdRecurso( $idRecurso ){
			 $this->idRecurso = $idRecurso;
		}

		public function getIdRecurso(){
			  return( $this->idRecurso );
		}

	}


?>