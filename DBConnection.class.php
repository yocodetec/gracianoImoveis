<?php

class DBConnection {
    
    private $host = "";
    private $user = "";
    private $pass = "";
    private $conn = null;
    
    function __construct() {
        
        if($_SERVER["SERVER_NAME"] == 'localhost'){
            if (DIRECTORY_SEPARATOR == '/'){
                $this->setHost( "localhost" );
                $this->setUser( "graciano" );
                $this->setPass( "yocodetec" );
            }else{
                $this->setHost( "localhost" );
                $this->setUser( "graciano" );
                $this->setPass( "yocodetec" );
            }
        }else{
            $this->setHost( "51.79.72.47" );
            $this->setUser( "hostdeprojetos_yocode" );
            $this->setPass( "batatacommantega" );
        }

        
        $this->setConn( mysqli_connect($this->host, $this->user, $this->pass) );
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
    
    public function query($SqlCommand){
        $resultSet = $this->conn->query($SqlCommand);
        return( $resultSet );
    }

    public function getHost(){
        return $this->host;
    }

    public function setHost($host){
        $this->host = $host;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user = $user;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setPass($pass){
        $this->pass = $pass;
    }

    public function getConn(){
        return $this->conn;
    }

    public function setConn($conn){
        $this->conn = $conn;
    }

}

?>
