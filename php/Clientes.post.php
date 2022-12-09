<?php

include_once __DIR__.'/../classes/Clientes.class.php';

$idCliente = (($_REQUEST['idCliente']!="") ? $_REQUEST['idCliente'] : 0 );
$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$dtNasc = $_REQUEST['dtNasc'];
$CPF = $_REQUEST['CPF'];
$Endereco = $_REQUEST['Endereco'];




$Clientes = new Clientes($idCliente, $nome, $sobrenome, $email, $telefone, $dtNasc, $CPF, $Endereco);
$Clientes -> save();
header('Location:../Admin.php');

?>