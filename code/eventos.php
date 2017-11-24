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
        <script src="_javascript/init-config.js"></script>
        
        <link rel="stylesheet" type="text/css" href="_css/css.css">
        <link rel="stylesheet" type="text/css" href="_css/css_perfil.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse bg-inverse nav-feston">
            <div id="header"></div>
        </nav>

        <div class="container container-corpo">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="../assets/_imagens/img_avatar.png" class="img-responsive" alt="">
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
                            <li>
                                <a href="foto.php">
                                <i class="glyphicon glyphicon-cog"></i>
                                Alterar foto de perfil </a>
                            </li>
                            <li>
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
                <div class="list-group">
                    
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
          <div id="footer"></div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    </body>
</html>