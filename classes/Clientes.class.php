<?php
    require "DBQuery.class.php";
    
	class Clientes {

		private $idCliente;
		private $nome;
		private $sobrenome;
		private $email;
		private $dtNasc;
		private $CPF;
		private $Endereco;
		
		private $dbquery;

		function __construct( $idCliente, $nome, $sobrenome,$email, $dtNasc, $CPF, $Endereco){
		    
		    $tableName  = "agendamentos.clientes"; //Nome do banco.tabela
		    $fieldsName = "idCliente,nome,sobrenome,email,dtNasc,CPF,Endereco"; //Nome dos Campos
		    $fieldKey   = "idCliente"; 

		    $this->dbquery = new DBQuery($tableName, $fieldsName, $fieldKey);
		    
		    
			 $this->setIdCliente( $idCliente );
			 $this->setNome( $nome );
			 $this->setSobrenome( $sobrenome );
			 $this->setEmail( $email );
			 $this->setDtNasc( $dtNasc );
			 $this->setCPF( $CPF );
			 $this->setEndereco( $Endereco );
			 
		}

		public function toArray(){
			 return array(
				 $this->getIdCliente(),
				 $this->getNome(),
				 $this->getSobrenome(),
				 $this->getDtNasc(),
			     $this->getEmail(),
				 $this->getCPF(),
				 $this->getEndereco()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function save() {
		    if($this->getIdCliente() == 0){
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
		    if($this->getIdCliente() != 0){
		        return( $this->dbquery->delete($this->toArray()));
		    }
		}
		
		public function setIdCliente( $idCliente ){
			 $this->idCliente = $idCliente;
		}

		public function getIdCliente(){
			  return( $this->idCliente );
		}

		public function setNome( $nome ){
			 $this->nome = $nome;
		}

		public function getNome(){
			  return( $this->nome );
		}

		public function setSobrenome( $sobrenome ){
			 $this->sobrenome = $sobrenome;
		}

		public function getSobrenome(){
			  return( $this->sobrenome );
		}
		
		public function setEmail( $email ){
		    $this->email = $email;
		}
		
		public function getEmail(){
		    return( $this->email );
		}
		
		public function setDtNasc( $dtNasc ){
			 $this->dtNasc = $dtNasc;
		}

		public function getDtNasc(){
			  return( $this->dtNasc );
		}

		public function setCPF( $CPF ){
			 $this->CPF = $CPF;
		}

		public function getCPF(){
			  return( $this->CPF );
		}

		public function setEndereco( $Endereco ){
			 $this->Endereco = $Endereco;
		}

		public function getEndereco(){
			  return( $this->Endereco );
		}

	}


?>