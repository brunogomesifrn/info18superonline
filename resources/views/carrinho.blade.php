@extends('layout.base')

@section('conteudo')
<html>
<head>
	<title>Carrinho</title>


<!-- Última versão compilada e otimizada do CSS -->
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Biblioteca do jQuery -->
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Última versão complicada do JavaScript -->
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="main.css">


</head>

<body>
	<div class="container">
		<!--<div class="navbar navbar-default">

			<nav class="navbar navbar-inverse">
  				<div class="container-fluid">
	    			<div class="navbar-header">
	      				<a class="navbar-brand" href="#">Super.Online</a>
	    			</div>
	    			<ul class="nav navbar-nav">
	      				<li><a href="index.html">Home</a></li>
	      				<li><a href="busca.html">Buscar</a></li>
	      				<li><a href="contato.html">Contato</a></li>
	      				<li><a href="usuario.html">Usuário</a></li>
	    			</ul>
	    			<ul class="nav navbar-nav navbar-right">
	      				<li><a href="cadastrar.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	      				<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    			</ul>
  				</div>
			</nav>

			

		</div> -->
		<div class="row">
				<div class="col-md-12">
					<h1>Carrinho de Compras</h1><br>
						<p class="lead bg-danger text-danger">Nenhum produto foi adicionado ao carrinho!</p> <button name="button" body style="background-color:#FFFFFF" style="margin-top:150px">Comprar</button> 
						<hr>
						<p class="lead text-success">R$000,00</p>
				</div>
			</div>
	

	</div>
	<footer class="container text-center">
  			<p>Copyright © 2018 | Alunos de INFO4</p>
	</footer>


</body>

</html>
@endsection