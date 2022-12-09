<?php

    print_r($_REQUEST);


    include_once '../classes/Agendamentos.class.php';
    
    $idAgendamento =  (($_REQUEST['idAgendamento']!="") ? $_REQUEST['idAgendamento'] : 0 );
    $dtAgendamento = $_REQUEST['dtAgendamento'];
    $horaIni = $_REQUEST['horaIni'];
    $horaFim = $_REQUEST['horaFim'];
    $nomedocliente = $_REQUEST['nomedocliente'];
    $idColaborador = $_REQUEST['idColaborador'];
    $idespColaboradores = $_REQUEST['idespColaboradores'];
    $idRecurso = $_REQUEST['idRecurso'];

    $AgendaEmpresa = new Agendamentos($idAgendamento, $dtAgendamento, $horaIni, $horaFim, $nomedocliente, $idColaborador, $idespColaboradores, $idRecurso);
    $AgendaEmpresa->save();
    
    header('Location:../Admin.php');
?>