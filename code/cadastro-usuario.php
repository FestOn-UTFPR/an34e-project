<?php
    $erro_username = isset($_GET['erro_username']) ? $_GET['erro_username'] : 0;
    $erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;
    /*
    $erro_pais = isset($_GET['erro_pais']) ? $_GET['erro_pais'] : 0;
    $erro_estado = isset($_GET['erro_estado']) ? $_GET['erro_estado'] : 0;
    $erro_cidade = isset($_GET['erro_cidade']) ? $_GET['erro_cidade'] : 0;
    */
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
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="post" action="registra_usuario.php" id="formCadastroUsuario">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nome de usuário<a class="a">*</a></label>
                            <input type="text" class="form-control" id="" name="username" placeholder="Digite seu username" required="requiored">
                            <?php
                                if($erro_username){
                                    echo '<font color="#FF0000">Usuário já existe</font>';
                                }
                            ?>
                        </div>
                    </div> 

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nome completo<a class="a">*</a></label>
                            <input type="text" class="form-control" id="" name="nome" placeholder="Digite seu nome" required="requiored">
                        </div>
                    </div>  

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Data de nascimento<a class="a">*</a></label>
                            <input type="date" class="form-control" id="valor" name="data_nascimento" required="requiored">
                        </div>
                    </div>
                            
                    <div class="col-md-12">
                        <label>Digite um e-mail válido<a class="a">*</a></label>
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="e-mail" class="form-control" name="email_name" placeholder="Digite seu email" required="requiored">
                        </div>
                        <?php
                            if($erro_email){
                                echo '<font color="#FF0000">E-mail já existe</font>';
                            }
                        ?>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Digite uma senha<a class="a">*</a></label>
                            <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Digite sua senha" required="requiored">
                        </div>  
                    </div> 

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Digite seu país<a class="a">*</a></label>
                            <input type="text" id="combo-estado" class="form-control" name="pais" required="requiored">
                            <!--<?php
                                /*if($erro_pais){
                                    echo '<font color="#FF0000">O país digitado não existe ou foi digitado incorretamente</font>';
                                }*/
                            ?>-->
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Digite seu estado<a class="a">*</a></label>
                            <input type="text" class="form-control" name="estado" required="requiored">
                            <!--<?php
                                /*if($erro_estado){
                                    echo '<font color="#FF0000">O estado digitado não existe ou foi digitado incorretamente</font>';
                                }*/
                            ?>-->
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Digite sua cidade<a class="a">*</a></label>
                            <input type="text" class="form-control" name="cidade" required="requiored">
                            <!--<?php
                                /*if($erro_cidade){
                                    echo '<font color="#FF0000">A cidade digitado não existe ou foi digitado incorretamente</font>';
                                }*/
                            ?>-->
                        </div>
                    </div>

                    <div class="col-md-12">    
                        <div class="form-group">
                            <label for="exampleInputFile">Insira uma foto de perfil:</label>
                            <input type="file" id="">
                            <p class="help-block">Arquivos .PNG, .JPEG, .JPG de no máximo 2Mb.</p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="checkbox">
                            <label>
                            <input type="checkbox">Aceito os termos de de uso e privacidade
                            </label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Quero receber e-mails com novidades sobre o Fest.On
                            </label>
                        </div>
                    </div>     

                    <button type="submit" class="btn btn-info">Cadastrar usuário</button> 
                </form>
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