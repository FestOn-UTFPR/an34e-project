<?php
	session_start();

	unset ($_SESSION['usuario']);
	unset ($_SESSION['email']);

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

        <link rel="stylesheet" type="text/css" href="_css/css.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse bg-inverse">
            <div class="container">
                <div class="navbar-header">
                    <img src="../assets/_imagens/logo_feston_menu.png" alt="logo" width="140" height="110">   
                </div>     
            </div>
        </nav>
    	
        <div class="container">
	      	<div class="jumbotron">
	        	<h1>Esperamos que você volte :)</h1>
                <br>
	        	<p class="sucesso">
                    <a href="index.php">Clique aqui</a> para ir para a página inicial do Fest.On
                </p>
	      	</div>
	       <div class="clearfix"></div>
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