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

		<style>
			div#texto{
                text-align: justify;
                padding: 10px;
                font-size: 13pt;
            }
            .panel-heading{
                font-size: 13pt;
            }
            /*ul{
                text-align: center;
                padding: 0px 280px 0px 280px;
            }*/

            header#cabecalho{
                padding: 0px 280px 0px 280px;
            }
            img {
                max-width: 100%;
                height: auto;
                display: block;
                margin: auto;
            }

            .texto_carrosel{
            	text-align: justify;
            	font-size: 20px;
            }

            #rodape{
            	text-align: center;
            }
		</style>
		<script src="_javascript/funcoes.js"></script>
	</head>
	<body>	
		<nav class="navbar navbar-inverse bg-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao" >
                        <span class="sr-only">Alternar Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="../assets/_imagens/logo_feston_menu.png" alt="logo" width="140" height="110">   
                </div>
                <div class="collapse navbar-collapse" id="barra-navegacao">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="quem-somos.php">Quem somos</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="cadastrar-eventos.php">Cadastrar Evento</a></li>
                                <li><a href="#">Buscar Evento</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Minha Conta <span class="glyphicon">&#xe008;</span><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="login-usuario.php">Login</a></li>
                                <li><a href="cadastro-usuario.php">Cadastre-se</a></li>
                                <li><a href="sair.php">Log-out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>     
            </div>
        </nav>

        <div class="container">
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
				          		O Fest.On é um aplicativo de cadastro de eventos e venda de ingressos, (com ele é possível comprar ingressos eventos e sua carga de ingressos, local, data, horário, entre outras diversas informações.(retificar))
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
			<br>
			<p>
				Copyright &copy; 2017 - by Fest.On Company
				<br>
				<a href="https://www.facebook.com/" target="_blank">Facebook</a> | <a href="https://www.instagram.com/" target="_blank">Instagram</a> | <a href="https://www.youtube.com/" target="_blank">Youtube</a> | <a href="https://twitter.com/" target="_blank">Twitter</a>
			</p>
		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	</body>
</html>