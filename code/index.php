<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Fest.On</title>
		<link rel="icon" type="image/gif/png" href="../assets/_imagens/favicon-feston.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="_css/css.css">
		<link rel="stylesheet" type="text/css" href="_css/css_media.css">
		<script src="_javascript/funcoes.js"></script>
		<script src="_javascript/init-config.js"></script>


		<style type="text/css">
			.texto_carrosel{
				text-align: justify;
			}
		</style>
	</head>
	<body>	<!--
		<nav class="navbar navbar-inverse bg-inverse nav-feston">
			<div id="header"></div>
        </nav>-->

        <?php include('_subtamplates/header.php') ?>

        <div class="container container-corpo">
		 	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    	<!-- Indicators -->
			    <ol class="carousel-indicators">
			      	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      	<li data-target="#myCarousel" data-slide-to="1"></li>
			      	<li data-target="#myCarousel" data-slide-to="2"></li>
			      	<li data-target="#myCarousel" data-slide-to="3"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">
			      	<div class="item active">
				        <img src="../assets/_imagens/la.jpg" alt="Los Angeles" style="width:100%;">
				        <div class="carousel-caption">
				          	<h1>O que é</h1>
				          	<p class="texto_carrosel">
				          		O Fest.On é um aplicativo de cadastro de eventos e venda de ingressos, (com ele é possível comprar ingressos eventos e sua carga de ingressos, local, data, horário, entre outras diversas informações.
				          	</p>
				        </div>
			      	</div>

				    <div class="item">
				        <img src="../assets/_imagens/chicago.jpg" alt="Chicago" style="width:100%;">
				        <div class="carousel-caption">
				          	<h1>Como comprar ingressos</h1>
				          	<p class="texto_carrosel">
				          		Para <a href="buscar-eventos.html">comprar ingressos</a> para um evento, é necessário realizar um <a href="cadastro-usuario.html">cadastro de usuário</a> que também poderá ser efetuado por meio de login pelo Facebook, feito isso é só escolher o evento, a quantidade de ingressos e informar a forma de pagamento, que irá ser efetuado pela plataforma de pagamentos <a href="https://pagseguro.uol.com.br/" target="_blank">"PagSeguro"</a>. É importante saber que só será possível realizar a compra de ingressos, se a idade do comprador for maior ou igual a classificação do evento. Para compras que incluem mais de um ingresso, será necessário informar o perfil das pessoas para quem os ingressos serão comprados, isso ocorre para que seja aplicada a regra de classificação de idade do evento, e também para o evento ficar no histórico de eventos das outras pessoas.
				          	</p>
				        </div>
				    </div>
			    
			      	<div class="item">
				        <img src="../assets/_imagens/ny.jpg" alt="New York" style="width:100%;">
				        <div class="carousel-caption">
				          	<h1>Como cadastrar eventos</h1>
				          	<p class="texto_carrosel">
				          		Para <a href="cadastrar-eventos.html">cadastrar um evento</a>, é necessário realizar um <a href="cadastro-usuario.html">cadastro de conta</a> que também poderá ser efetuado por meio de login pelo Facebook, feito isso, as informações do evento deverão ser preenchidas, tais como o nome do evento, a carga de ingressos, os preços dos ingressos, o local do evento, data, horário, destalhes, entre outras informações...
				          	</p>
				        </div>
			      	</div>

			      	<div class="item">
				        <img src="../assets/_imagens/ny.jpg" alt="New York" style="width:100%;">
				        <div class="carousel-caption">
				          	<h1>Comprei o ingresso, e agora?</h1>
				          	<p class="texto_carrosel">
				          		Realizado o pagamento do(s) ingresso(s), um email será enviado ao comprador com o ingresso, o ingresso irá conter um código QR <span class="glyphicon glyphicon-qrcode"></span>, que será necessário para poder entrar no evento, sendo responsabilidade do comprador imprimir o(s) ingresso(s), esse código também estará disponível no smartphone do comprador, caso o mesmo não queira imprimir o ingresso. É importante dizer que nem todos os eventos possuem o leitor de código QR <span class="glyphicon glyphicon-qrcode"></span>, e isso é uma responsabilidade do organizador, sendo assim verifique no perfil do evento se o mesmo possue o leitor ou será necessário imprimir o(s) ingresso(s).
				          	</p>
				        </div>
			      	</div>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      	<span class="glyphicon glyphicon-chevron-left"></span>
			      	<span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      	<span class="glyphicon glyphicon-chevron-right"></span>
			      	<span class="sr-only">Next</span>
			    </a>
		  	</div>
		</div>

		<footer id="rodape">
			<div id="footer"></div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	</body>
</html>