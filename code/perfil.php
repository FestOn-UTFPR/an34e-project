<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: cadastro-usuario.php?erro=1');
    }

    require_once('db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Fest.On</title>
        <link rel="icon" type="image/gif/png" href="../assets/_imagens/favicon-feston.png">
        <!--<link rel="stylesheet" href="_css/estilo.css"/>-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="_css/css.css">
        <link rel="stylesheet" type="text/css" href="_css/css_perfil.css">
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
                    <!--<a href="_imagens/logo-fest-on.png" class="navbar-brand">LOGO</a>-->
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $_SESSION['username']?> <span class="glyphicon">&#xe008;</span><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="sair.php">Log-out <i class="glyphicon glyphicon-log-out"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>     
            </div>
        </nav>

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="https://pbs.twimg.com/profile_images/927318978116161536/B58Dq-Gz_400x400.jpg" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <?= $_SESSION['username']?>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="#">
                                <i class="glyphicon glyphicon-folder-open"></i>
                                Histórico de eventos </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="glyphicon glyphicon-cog"></i>
                                Configurações da conta </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-info-sign"></i>
                                Informações da conta </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-content">
                   Some user related content goes here...
                </div>
            </div>
            <div class="col-md-3">
                <div class="profile-content">
                   Some user related content goes here...
                </div>
            </div>
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