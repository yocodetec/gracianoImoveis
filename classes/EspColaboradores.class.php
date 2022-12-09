<?php
    require_once 'DBQuery.class.php';
    
	class EspColaboradores {

		private $idespColaboradores;
		private $idColaborador;
		private $vendas;
		private $aluguel;

		function __construct($idespColaboradores, $idColaborador, $vendas, $aluguel){
		    $tableName  = "agendamentos.espcolaboradores"; //Nome do banco.tabela
		    $fieldsName = "idespColaboradores,idColaborador,vendas,aluguel"; //Nome dos Campos
		    $fieldKey   = "idespColaboradores"; //Nome do chaveprimária
		    $this->dbquery = new DBQuery($tableName, $fieldsName, $fieldKey);
		    
		    $this->setIdespColaboradores($idespColaboradores);
		    $this->setIdColaborador($idColaborador);
		    $this->setVendas($vendas);
		    $this->setAluguel($aluguel);
		}
		
		
		public function toArray(){
		    return array(
		        $this->getIdespColaboradores(),
		        $this->getIdColaborador(),
		        $this->getVendas(),
		        $this->getAluguel(),
		    );
		}
		
		public function toString(){
		    return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}
		
		public function save() {
		    if($this->getIdespColaboradores() == 0){
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
		    if($this->getIdespColaboradores() != 0){
		        return( $this->dbquery->delete($this->toArray()));
		    }
		}
	
		public function setIdespColaboradores( $idespColaboradores ){
		    $this->idespColaboradores = $idespColaboradores;
		}
		
		public function getIdespColaboradores(){
		    return( $this->idespColaboradores);
		}
		
		
		public function setIdColaborador( $idColaborador){
		    $this->idColaborador = $idColaborador;
		}
		
		public function getIdColaborador(){
		    return( $this->idColaborador);
		}
		
		
		public function setVendas($vendas){
		    $this->vendas= $vendas;
		}
		
		public function getVendas(){
		    return( $this->vendas);
		}
		
		public function setAluguel($aluguel){
		    $this->aluguel= $aluguel;
		}
		
		public function getAluguel(){
		    return( $this->aluguel);
		}
		
		
		
	}

?>