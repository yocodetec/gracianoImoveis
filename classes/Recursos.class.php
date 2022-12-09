<?php
    require_once 'DBQuery.class.php';

	class Recursos {

		private $idRecurso;
		private $nomedoimovel;
		private $tipo;
		private $qtQuartos;
		private $qtSuites;
		private $qtBanheiros;
		private $areaConstru;
		private $vagas;
		private $descr;
		private $idCliente;
		
		private $dbquery;
		
		function __construct($idRecurso, $nomedoimovel, $tipo, $qtQuartos, $qtSuites, $qtBanheiros, $areaConstru, $vagas, $descr, $idCliente){
		    
		    $tableName  = "agendamentos.recursos"; //Nome do banco.tabela
		    $fieldsName = "idRecurso,nomedoimovel,tipo,qtQuartos,qtSuites,qtBanheiros,areaConstru,vagas,descr,idCliente"; //Nome dos Campos
		    $fieldKey   = "idRecurso"; //Nome do chaveprimária
		    $this->dbquery = new DBQuery($tableName, $fieldsName, $fieldKey);
		    
			 $this->setIdRecurso( $idRecurso );
			 $this->setNomedoimovel( $nomedoimovel );
			 $this->setTipo( $tipo );
			 $this->setQtQuartos( $qtQuartos );
			 $this->setQtSuites( $qtSuites );
			 $this->setQtBanheiros( $qtBanheiros );
			 $this->setAreaConstru( $areaConstru );
			 $this->setVagas( $vagas );
			 $this->setDescr( $descr );
			 $this->setIdCliente( $idCliente );
		}

		public function toArray(){
			 return array(
				 $this->getIdRecurso(),
				 $this->getTipo(),
			     $this->getNomedoimovel(),
				 $this->getQtQuartos(),
				 $this->getQtSuites(),
				 $this->getQtBanheiros(),
				 $this->getAreaConstru(),
				 $this->getVagas(),
				 $this->getDescr(),
			     $this->getIdCliente()
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
		
		public function setNomedoimovel( $nomedoimovel ){
		    $this->nomedoimovel = $nomedoimovel;
		}
		
		public function getNomedoimovel(){
		    return( $this->nomedoimovel );
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

		public function setIdCliente( $idCliente ){
		    $this-> idCliente = $idCliente;
		}
		
		public function getIdCliente(){
		    return( $this->idCliente );
		}
	}


?>