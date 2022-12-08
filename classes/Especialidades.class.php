<?php
    require "DBQuery.class.php";
	class Especialidades {

		private $idEspecialidade;
		private $vendas;
		private $alugueis;
		private $tipo;
		private $descr;

		
		private $dbquery;
		
		function __construct( $idEspecialidade, $vendas, $alugueis, $tipo, $descr){
		    $tableName  = "agendamentos.especialidades"; //Nome do banco.tabela
		    $fieldsName = "idEspecialidade,vendas,alugueis,tipo,descr"; //Nome dos Campos
		    $fieldKey   = "idEspecialidade"; //Nome do chaveprimária
		    $this->dbquery = new DBQuery($tableName, $fieldsName, $fieldKey);
		    
			 $this->setIdEspecialidade( $idEspecialidade );
			 $this->setVendas( $vendas );
			 $this->setAlugueis( $alugueis );
			 $this->setTipo( $tipo );
			 $this->setDescr( $descr );
		}

		public function toArray(){
			 return array(
				 $this->getIdEspecialidade(),
				 $this->getVendas(),
				 $this->getAlugueis(),
				 $this->getTipo(),
				 $this->getDescr()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function save() {
		    if($this->getIdEspecialidade() == 0){
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
		    if($this->getIdEspecialidade() != 0){
		        return( $this->dbquery->delete($this->toArray()));
		    }
		}
		
		public function setIdEspecialidade( $idEspecialidade ){
			 $this->idEspecialidade = $idEspecialidade;
		}

		public function getIdEspecialidade(){
			  return( $this->idEspecialidade );
		}

		public function setVendas( $vendas ){
			 $this->vendas = $vendas;
		}

		public function getVendas(){
			  return( $this->vendas );
		}

		public function setAlugueis( $alugueis ){
			 $this->alugueis = $alugueis;
		}

		public function getAlugueis(){
			  return( $this->alugueis );
		}

		public function setTipo( $tipo ){
			 $this->tipo = $tipo;
		}

		public function getTipo(){
			  return( $this->tipo );
		}

		public function setDescr( $descr ){
			 $this->descr = $descr;
		}

		public function getDescr(){
			  return( $this->descr );
		}

	}


?>