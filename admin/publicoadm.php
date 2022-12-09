
<?php
if (isset($_REQUEST["email"]) && isset($_REQUEST["senha"])){

    $email =  str_replace(" ' ", " ` ",($_REQUEST["email"]));
    $senha =  str_replace(" ' ", " ` ",($_REQUEST["senha"]));
    $idAdm =  "7";
    
    // Consulta ao banco de dados
    include_once '../classes/LoginAdm.class.php';
    $usuario = new Adm("$email", "$senha");
    
    $resultSet  = $conexao->query($usuario->checkUsuariosLogin()); 
    $checkUser = mysqli_num_rows($resultSet);

    if ($checkUser == 0) {
    echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Este usuário não existe, tente novamente.</div></center>
    ";
    // ADM não pode logar
    header("Location: ../loginadm.php");
    exit();
    //
    }
    else {
    echo "<center><br><br><div class='alert alert-success' style='width: 50%;' role='alert'>Usuário encontrado com sucesso!</div></center>";    
    // ADM pode logar
    session_start();
    $_SESSION['loggedInADM'] = '1';
    header('Location: ../admin.php');
    }
    //
}
else {
    echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Nenhuma requisição foi feita!</div><center>";
};         


?>