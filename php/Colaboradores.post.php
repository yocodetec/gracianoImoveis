<?php
include_once '../classes/Colaboradores.class.php';

$idColaborador = (($_REQUEST['idColaborador']!="") ? $_REQUEST['idColaborador'] : 0 );
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];


$Colaboradores= new Colaboradores($idColaborador, $nome, $cpf, $email, $telefone);
$Colaboradores->save();
header('Location:../Admin.php');
?>