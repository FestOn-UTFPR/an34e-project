<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: login-usuario.php?erro=1');
    }

    require_once('db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql(); 

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM cadastro_evento AS ce LEFT JOIN cadastro_usuario AS cu ON (ce.organizador_evento = $username) ";               
    $resultado_id = mysqli_query($link, $sql); 
 
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
        <script src="_javascript/init-config.js"></script>
        
        <link rel="stylesheet" type="text/css" href="_css/css.css">
        <link rel="stylesheet" type="text/css" href="_css/css_perfil.css">
    </head>
    <body>
        <?php include('_subtamplates/header.php') ?>

        <div class="container container-corpo">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <?php
                            echo "<img src='./uploads/".$username->sql."'/>"
                        ?>
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
            <?php   
            if($resultado_id){
                while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ 
                echo '
                        <div class="col-md-12">
                            <div class="panel panel-success">
                                <div class="panel-heading" style="background-color: #262626; color: white;">'.$registro['nome_evento'].'<h6>'.$registro['id_pais'].' - '.$registro['id_estado'].'</h6></div>
                                <div class="panel-body">
                                    <div class="row">         
                                        <h5><span class="glyphicon glyphicon-star at"></span> '.$registro['atracoes_evento'].'</h5>
                                        <img src="../assets/_imagens/ny.jpg" class="img-responsive" alt="" style="height: 260px; width: 600px; float: left;">
                                    </div>
                                    <div id="texto">
                                        <span class="glyphicon">&#xe109;</span>'.$registro['data_evento_formatada'].'<br> 
                                        <span class="glyphicon glyphicon-time"></span>'.$registro['horario_inicio_evento'].' - '.$registro['horario_termino_evento'].'<br>
                                        Cidade: '.$registro['id_cidade'].'<br>
                                        <span class="glyphicon">&#xe062;</span>'.$registro['endereco_evento'].'<br>
                                        Classificação indicativa: '.$registro['classificacao_evento'].'<br>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn">Comprar ingresso <span class="glyphicon">&#xe116;</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <form>
                                    <div class="linha"></div>
                                </form>
                            </div>
                        </div>
                    </div>';}}?>   
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