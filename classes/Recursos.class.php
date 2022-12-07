<?php
    require "DBQuery.class.php";
	class Recursos {

		private $idRecurso;
		private $tipo;
		private $qtQuartos;
		private $qtSuites;
		private $qtBanheiros;
		private $areaConstru;
		private $vagas;
		private $descr;

		
		private $dbquery;
		
		function __construct($idRecurso, $tipo, $qtQuartos, $qtSuites, $qtBanheiros, $areaConstru, $vagas, $descr){
		    
		    $tableName  = "agendamentos.recursos"; //Nome do banco.tabela
		    $fieldsName = "idRecurso,tipo,qtQuartos,qtSuites,qtBanheiros,areaConstru,vagas,descr"; //Nome dos Campos
		    $fieldKey   = "idRecurso"; //Nome do chaveprimária
		    $this->dbquery = new DBQuery($tableName, $fieldsName, $fieldKey);
		    
			 $this->setIdRecurso( $idRecurso );
			 $this->setTipo( $tipo );
			 $this->setQtQuartos( $qtQuartos );
			 $this->setQtSuites( $qtSuites );
			 $this->setQtBanheiros( $qtBanheiros );
			 $this->setAreaConstru( $areaConstru );
			 $this->setVagas( $vagas );
			 $this->setDescr( $descr );
		}

		public function toArray(){
			 return array(
				 $this->getIdRecurso(),
				 $this->getTipo(),
				 $this->getQtQuartos(),
				 $this->getQtSuites(),
				 $this->getQtBanheiros(),
				 $this->getAreaConstru(),
				 $this->getVagas(),
				 $this->getDescr()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		
		public function save() {
		    if($this->getIdRecurso() == 0){
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
		    if($this->getIdRecurso() != 0){
		        return( $this->dbquery->delete($this->toArray()));
		    }
		}
		
		public function setIdRecurso( $idRecurso ){
			 $this->idRecurso = $idRecurso;
		}

		public function getIdRecurso(){
			  return( $this->idRecurso );
		}

		public function setTipo( $tipo ){
			 $this->tipo = $tipo;
		}

		public function getTipo(){
			  return( $this->tipo );
		}

		public function setQtQuartos( $qtQuartos ){
			 $this->qtQuartos = $qtQuartos;
		}

		public function getQtQuartos(){
			  return( $this->qtQuartos );
		}

		public function setQtSuites( $qtSuites ){
			 $this->qtSuites = $qtSuites;
		}

		public function getQtSuites(){
			  return( $this->qtSuites );
		}

		public function setQtBanheiros( $qtBanheiros ){
			 $this->qtBanheiros = $qtBanheiros;
		}

		public function getQtBanheiros(){
			  return( $this->qtBanheiros );
		}

		public function setAreaConstru( $areaConstru ){
			 $this->areaConstru = $areaConstru;
		}

		public function getAreaConstru(){
			  return( $this->areaConstru );
		}

		public function setVagas( $vagas ){
			 $this->vagas = $vagas;
		}

		public function getVagas(){
			  return( $this->vagas );
		}

		public function setDescr( $descr ){
			 $this->descr = $descr;
		}

		public function getDescr(){
			  return( $this->descr );
		}

	}


?>