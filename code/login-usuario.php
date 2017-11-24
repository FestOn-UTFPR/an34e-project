<?php
    session_start();

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

		<script type="text/javascript">
			// código javascript
				$(document).ready(function(){
					//verificar se os campos de usuario e senha foram devidamente preencidos
					$('#btn_login').click(function(){
						var campo_vazio = false;

						if($('#campo_usuario').val() == ''){
							$('#campo_usuario').css({'border-color': '#A94442'});
							campo_vazio = true;
						} else{
							$('#campo_usuario').css({'border-color': '#CCC'});
						}

						if($('#campo_senha').val() == ''){
							$('#campo_senha').css({'border-color': '#A94442'});
							campo_vazio = true;
						} else{
							$('#campo_usuario').css({'border-color': '#CCC'});
						}

						if(campo_vazio){
							return false;
						}
					});	
				});
		</script>
		
		<link rel="stylesheet" type="text/css" href="_css/css.css">
	</head>
	<body>
		<?php include('_subtamplates/header.php') ?>
					
		<div class="container container-corpo">
			<div class="col-md-3"></div>
		   	<div class="col-md-6 <?= $erro == 1 ? 'open' : ''?>">
		        <form method="post" action="validar_acesso.php" id="formLogin">	
		            <div class="col-md-12">
		               	<div class="form-group">
				    		<label class="col-sm-2">Username:</label>
				    		<div class="col-sm-10">
				      			<input type="text" class="form-control" id="campo_usuario" name="username" placeholder="Digite seu username">
				      			<br>
				    		</div>
		  				</div>
		  			</div>
		  			
		  			<div class="col-md-12">
		  				<div class="form-group">
						    <label class="col-sm-2">Senha:</label>
						    <div class="col-sm-10">
						    	<input type="password" class="form-control" id="campo_senha" name="senha" placeholder="Digite sua senha"><br>
						    </div>
		  				</div>
		  			</div>
		  			
		  			<div class="col-md-12">
					 	<div class="form-group">						    	
				      		<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>
						</div>
					 </div>
				</form>

				<div class="col-md-12">
					<div class="form-group">
						<?php
							if($erro == 1){
								echo '<font color="#FF0000"><span class="glyphicon glyphicon-remove"></span>Usuário e/ou senha incorreto(s)</font>';
							}
						?>
					</div>
				</div>		

				<div class="col-md-12 linha"></div>

				<div class="col-md-12">
					<div class="form-group">
	                   	<br>Não tem uma conta?<br><br>
	                   	<button type="submit" class="btn btn-default"><a href="cadastro-usuario.php">Cadastre-se</a></button>  
	                </div>
	            </div> 
			</div>
			<div class="col-md-3"></div>
		</div>

		<footer id="rodape">
			<div id="footer"></div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	</body>
</html>