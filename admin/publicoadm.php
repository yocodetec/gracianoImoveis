
<?php


if (isset($_REQUEST["email"]) && isset($_REQUEST["senha"])){

    $email =  str_replace(" ' ", " ` ",($_REQUEST["email"]));
    $senha =  str_replace(" ' ", " ` ",($_REQUEST["senha"]));
    
    
    // Consulta ao banco de dados
    include_once '../classes/LoginAdm.class.php';
    $usuario = new Adm();
    $usuario->__setLogin("$email", "$senha");
    
    $resultSet  = $DBConnection->query($usuario->checkUsuariosLogin());
    $checkUser = mysqli_num_rows($resultSet);

    if ($checkUser == 0) {
    echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Este usuário não existe, tente novamente.</div></center>
    ";
    header("Location: ../loginadm.php");
    
    }
    else {
    echo "<center><br><br><div class='alert alert-success' style='width: 50%;' role='alert'>Usuário encontrado com sucesso!</div></center>";    
    session_start();
    unset( $_SESSION['email']);
    unset( $_SESSION['senha']);
    
    
    while ($linha = mysqli_fetch_assoc($resultSet)) {
        $_SESSION['email']  = $linha['email'];
        $_SESSION['senha']  = $linha['senha'];
        $_SESSION['idUsuario']  = $linha['idUsuario'];
        header("Location: ./protegidoadm.php");
    } };
    //
}
else {
    echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Nenhuma requisição foi feita!</div><center>";
};         

/*
session_start();


if (isset($_REQUEST["email"]) && isset($_REQUEST["senha"])){
    $email =  str_replace(" ' ", " ` ",($_REQUEST["email"]));
    $senha =  str_replace(" ' ", " ` ",($_REQUEST["senha"]));

    include_once 'classes/LoginAdm.class.php';
    $loginadm = new Loginadm();
$loginadm->__construct("$email", "$senha");


$resultSet  = $DBConnection->query($loginadm->checkLoginad());
$checkUser = mysqli_num_rows($resultSet);


};
/*$email =  str_replace(" ' ", " ` ",($_REQUEST["email"]));
$senha =  str_replace(" ' ", " ` ",($_REQUEST["senha"]));

// Consulta ao banco de dados
include_once 'classes/LoginAdm.class.php';
$loginadm = new Loginadm();
$loginadm->__construct("$email", "$senha");

$resultSet  = $DBConnection->query($loginadm->checkLoginad());
$checkUser = mysqli_num_rows($resultSet);

if ($checkUser == 0) {
echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Este usuário não existe, tente novamente.</div></center>
";
echo "é aqui"; 
//header("Location: ../loginadm.php");

}
else {
echo "<center><br><br><div class='alert alert-success' style='width: 50%;' role='alert'>Usuário encontrado com sucesso!</div></center>";    
session_start();
unset( $_SESSION['email']);
unset( $_SESSION['senha']);


while ($linha = mysqli_fetch_assoc($resultSet)) {
    $_SESSION['email']  = $linha['email'];
    $_SESSION['senha']  = $linha['senha'];
    
    header("Location: ./protegidoadm.php");
} };

}
else {
echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Nenhuma requisição foi feita!</div><center>";
};         

**/
?>