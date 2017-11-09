<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Fest.On</title>
		<link rel="icon" type="image/gif/png" href="_imagens/favicon-feston.png">
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

            .texto_quem_somos{
            	text-align: justify;
            }

            #rodape{
                text-align: center;
            }
	    </style>    
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
	                <img src="_imagens/logo_feston_menu.png" alt="logo" width="140" height="110">   
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
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p class="texto_quem_somos">
                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae risus vel tellus pharetra tempus. Praesent tempus tellus a tempus mollis. Ut facilisis finibus ullamcorper. Nulla nisl ipsum, ornare quis gravida eget, semper sed magna. Morbi id tempus justo. In hac habitasse platea dictumst. Maecenas sollicitudin auctor iaculis.	
                </p>	
            </div>
            <div class="col-md-3"></div>                   
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