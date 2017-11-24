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
        <script src="_javascript/init-config.js"></script>
        
		<link rel="stylesheet" type="text/css" href="_css/css.css"> 

        <style type="text/css">
            .texto_quem_somos{
                text-align: justify;
            }
        </style>  
	</head>
	<body>
		<?php include('_subtamplates/header.php') ?>

        <div class="container container-corpo">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p class="texto_quem_somos">
                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae risus vel tellus pharetra tempus. Praesent tempus tellus a tempus mollis. Ut facilisis finibus ullamcorper. Nulla nisl ipsum, ornare quis gravida eget, semper sed magna. Morbi id tempus justo. In hac habitasse platea dictumst. Maecenas sollicitudin auctor iaculis.	
                </p>	
            </div>
            <div class="col-md-3"></div>                   
        </div>

		<footer id="rodape">
			<div id="footer"></div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	</body>
</html>