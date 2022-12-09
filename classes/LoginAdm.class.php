<?php

include_once "conexao.class.php";
$conexao = new conexao();
class Adm {
    
    private $email;
    private $senha;

    
    public function __construct($email = null, $senha = null) {
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    public function __setID($idAdm = null) {
        $this->setIdAdm($idAdm);
    }
    public function setIdAdm($idAdm){
        $this->idAdm = $idAdm;
        return $this;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
        return $this;
    }


    public function insertUsuarios() {
        $emailDB = $this->getEmail();
        $senhaDB = $this->getSenha();
        

        $sqlCommand = "INSERT INTO loginadm (email, senha) values ('$emailDB', '$senhaDB');";
        return $sqlCommand;
    }
    public function selectUsuarios() {
        $sqlCommand = "SELECT *FROM loginadm;";
        return $sqlCommand;
    }
    
    public function checkUsuariosLogin() {
        $email_bd = $this->getEmail();
        $senha_bd = $this->getSenha();

        $sqlCommand = "SELECT *FROM loginadm WHERE email = '$email_bd' && senha = '$senha_bd';";
        return $sqlCommand;
    }
   
    }

    ?>