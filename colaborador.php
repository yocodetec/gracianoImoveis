<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="css/modal.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/javinha.js"> </script>
<link href="css/admin.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/js_1.9/jquery-1.8.2.js"></script>
<script type="text/javascript" src="js/js_1.9/jquery-ui-1.9.1.custom.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- BOOTSTRAP -->
<!-- CONFIGURAÇÃO DE MEDIA QUERY -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-ligth bg-light">
<div class="container-fluid">
<a href="index.php" class="navbar-brand">
<img src="img/logo_graciano (2).png" height="52px" alt="#"> Graciano Imóveis
</a>
<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
<div class="navbar-nav">
<a href="#" class="nav-item nav-link active">Home</a>
<a href="#" class="nav-item nav-link">Quem somos</a>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Buscar imóveis
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Imóveis para alugar</a></li>
<li><a class="dropdown-item" href="#">Imóveis para comprar</a></li>
</ul>
</li>
</div>
</div>
</div>
</nav>

<div class="container">
<div class="row name"></div>
<div class="row">
<div class="col-sm-6" id="div2">
<h1 class="display-4">Bem-Vindo 

</h1>
<p class="lead">
Para ter um negócio de sucesso, alguém, algum dia,
<br/>teve que tomar uma atitude de coragem.
<br/> - Peter Drucker
</p>

<script>
function carregar(pagina){
    $("#div2").load(pagina);
}
</script>
</div>
<div class="col-sm-6">
<div id="menu">
<ul>
<li><a onclick="carregar('forms/Clientes.php')" id="link" href="#">ADICIONAR UM PROPRIETÁRIO</a></li>
<li><a onclick="carregar('forms/Colaboradores.php')"  href="#">ADICIONAR COLABORADOR</a></li>
<li><a onclick="carregar('forms/DispColaboradores.php')"  href="#">DISPONIBILIDADE DO COLABORADOR</a></li>
<li><a onclick="carregar('forms/EspColaboradores.php')"  href="#">ESPECIALIDADE DO COLABORADOR</a></li>
<li><a onclick="carregar('forms/Recursos.php')"  href="#">ADICONAR RECURSO</a></li>
<li><a onclick="carregar('forms/DispRecurso.php')"  href="#">DISPONIBILIDADE DO RECURSO</a></li>
<li><a onclick="carregar('forms/Agendamentos.php')"  href="#">AGENDAMENTOS</a></li>
<li><a onclick="carregar('forms/AgendaEmpresa.php')"  href="#">AGENDA DA EMPRESA</a></li>
</ul>
</div>
</div>
</div>

</div>
</body>

</html>