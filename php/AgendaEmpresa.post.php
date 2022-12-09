<?php

include_once '../classes/AgendaEmpresa.class.php';

$idAgendaEmpresa = (($_REQUEST['idAgendaEmpresa']!="") ? $_REQUEST['idAgendaEmpresa '] : 0 );
$dtFuncionamento = $_REQUEST['dtFuncionamento'];
$horaIni = $_REQUEST['horaIni'];
$horaFim = $_REQUEST['horaFim'];


$AgendaEmpresa = new AgendaEmpresa($idAgendaEmpresa, $dtFuncionamento, $horaIni, $horaFim);
$AgendaEmpresa -> save();

$id = $_REQUEST['horaFim'];
$excluir = new AgendaEmpresa($idAgendaEmpresa, "", "", "");
$excluir -> delete();


header('Location:../Admin.php');
?>