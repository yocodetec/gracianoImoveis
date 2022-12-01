<?php
    require "DBQuery.class.php";
	class Colaboradores {

		private $idColaborador;
		private $nome;
		private $cpf;
		private $email;
		private $telefone;
		
		private $dbquery;

		function __construct($idColaborador, $nome, $cpf, $email, $telefone){
		    
		    $tableName  = "agendamentos.colaboradores"; //Nome do banco.tabela
		    $fieldsName = "idColaborador,nome,cpf,email,telefone"; //Nome dos Campos
		    $fieldKey   = "idColaborador"; //Nome do chaveprimária
		    $this->dbquery = new DBQuery($tableName, $fieldsName, $fieldKey);
		    
			 $this->setIdColaborador( $idColaborador );
			 $this->setNome( $nome );
			 $this->setCpf( $cpf );
			 $this->setEmail( $email );
			 $this->setTelefone( $telefone );
		}

		public function toArray(){
			 return array(
				 $this->getIdColaborador(),
				 $this->getNome(),
				 $this->getCpf(),
				 $this->getEmail(),
				 $this->getTelefone()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function save() {
		    if($this->getIdColaborador() == 0){
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
		    if($this->getIdColaborador() != 0){
		        return( $this->dbquery->delete($this->toArray()));
		    }
		}
		
		public function setIdColaborador( $idColaborador ){
			 $this->idColaborador = $idColaborador;
		}

		public function getIdColaborador(){
			  return( $this->idColaborador );
		}

		public function setNome( $nome ){
			 $this->nome = $nome;
		}

		public function getNome(){
			  return( $this->nome );
		}

		public function setCpf( $cpf ){
			 $this->cpf = $cpf;
		}

		public function getCpf(){
			  return( $this->cpf );
		}

		public function setEmail( $email ){
			 $this->email = $email;
		}

		public function getEmail(){
			  return( $this->email );
		}

		public function setTelefone( $telefone ){
			 $this->telefone = $telefone;
		}

		public function getTelefone(){
			  return( $this->telefone );
		}

	}


?>