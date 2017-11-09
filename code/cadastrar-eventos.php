<?php
    $erro_pais = isset($_GET['erro_pais']) ? $_GET['erro_pais'] : 0;
    $erro_estado = isset($_GET['erro_estado']) ? $_GET['erro_estado'] : 0;
    $erro_cidade = isset($_GET['erro_cidade']) ? $_GET['erro_cidade'] : 0;
?>
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

        <style type="text/css">
            
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
            #rodape{
                text-align: center;
            }
            .a{
                color: red;
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
                <form method="post" action="registra_evento.php" id="formCadastroEvento">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nome do evento<a class="a">*</a></label>
                            <input type="text" class="form-control" id="" name="nome_evento" placeholder="Digite o nome do seu evento" required="requiored">
                        </div>
                    </div> 

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Atrações do eventos<a class="a">*</a></label>
                            <textarea class="form-control" rows="5" id="comment" name="atracoes_evento" placeholder="Comente as atrações do evento ex: ColdPlay e Mc Livinho"></textarea>
                        </div>
                    </div>  

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Data do evento<a class="a">*</a></label>
                            <input type="date" class="form-control" id="valor" name="data_evento" required="requiored">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Horário de início<a class="a">*</a></label>
                            <input type="time" class="form-control" id="valor" name="hora_inicio" required="requiored">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Horário de término</label>
                            <input type="time" class="form-control" id="valor" name="hora_termino" required="requiored">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Digite seu país<a class="a">*</a></label>
                            <input type="text" id="combo-estado" class="form-control" name="pais_evento" required="requiored">
                            <?php
                                if($erro_pais){
                                    echo '<font color="#FF0000">O país digitado não existe ou foi digitado incorretamente</font>';
                                }
                            ?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Digite seu estado<a class="a">*</a></label>
                            <input type="text" class="form-control" name="estado_evento" required="requiored">
                            <?php
                                if($erro_estado){
                                    echo '<font color="#FF0000">O estado digitado não existe ou foi digitado incorretamente</font>';
                                }
                            ?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Digite sua cidade<a class="a">*</a></label>
                            <input type="text" class="form-control" name="cidade_evento" required="requiored">
                            <?php
                                if($erro_cidade){
                                    echo '<font color="#FF0000">A cidade digitado não existe ou foi digitado incorretamente</font>';
                                }
                            ?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Endereço<a class="a">*</a></label>
                            <input type="text" class="form-control" id="" name="endereco_evento" placeholder="Digite o endereço do seu evento" required="requiored">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Quantidade de ingressos<a class="a">*</a></label>
                            <input type="number" class="form-control" id="" name="quantidade_ingressos" placeholder="Digite a quantidade de ingressos do seu evento" required="requiored">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Preço ingressos<a class="a">*</a></label>
                            <input type="number" class="form-control" id="" name="preco_ingressos" placeholder="Digite o valor dos ingressos do seu evento" required="requiored">
                        </div>
                    </div>
                            
                    <div class="col-md-12">    
                        <div class="form-group">
                            <label for="exampleInputFile">Insira uma foto de capa para o evento</label>
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