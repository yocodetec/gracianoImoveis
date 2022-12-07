<?php

include_once "DBConnection.class.php";
$DBConnection = new DBConnection();
class Adm {
    
    private $email;
    private $senha;
    private $idUsuario;
    
    public function __construct($email = null, $senha = null) {
        $this->setEmail($email);
        $this->setSenha($senha);
        
    
    }
    public function __setID($idUsuario = null) {
        $this->setIdUsuario($idUsuario);
    }
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
        return $this;
    }



    public function __setLogin($email = null, $senha = null) {
        $this->setEmail($email);
        $this->setSenha($senha);
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
        

        $sqlCommand = "INSERT INTO adm (email, senha) values ('$emailDB', '$senhaDB');";
        return $sqlCommand;
    }
    public function selectUsuarios() {
        $sqlCommand = "SELECT *FROM adm;";
        return $sqlCommand;
    }
    
    public function checkUsuariosLogin() {
        $email_bd = $this->getEmail();
        $senha_bd = $this->getSenha();

        $sqlCommand = "SELECT *FROM adm WHERE email = '$email_bd' && senha = '$senha_bd';";
        return $sqlCommand;
    }
   
    }

    ?>