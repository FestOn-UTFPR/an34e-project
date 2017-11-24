<?php
    $erro = isset($_GET['erro']) ? $_GET['erro']: 0;
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
        <script src="_javascript/init-config.js"></script>
        
        <link rel="stylesheet" type="text/css" href="_css/css.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse bg-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a href="../code/index.php"><img src="../assets/_imagens/logo_feston_menu.png" alt="logo" width="140" height="110"></a>   
                </div>     
            </div>
        </nav>
    	
        <div class="container container-corpo">
	      	<div class="jumbotron">
	        	<h1>Você deve possuir uma conta para poder cadastrar eventos :(</h1>
                <br>
	        	<p class="sucesso">
                    <a href="cadastro-usuario.php">Clique aqui</a> para ir para a página cadastro, ou <a href="login-usuario.php">aqui</a> se você já possui uma conta no Fest.On
                </p>
	      	</div>
	       <div class="clearfix"></div>
		</div>

    	<footer id="rodape">
           <div id="footer"></div>
    	</footer>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    </body>
</html>