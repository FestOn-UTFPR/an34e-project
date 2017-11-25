<?php
	require_once('db.class.php');

    $estado = $_POST['estado'];
    $cidade = $_POST['cidade']; 
    $evento = $_POST['evento'];
    $organizador = $_POST['organizador'];    

    $objDB = new db();
    $link = $objDB->conecta_mysql();
    
    $sql = "SELECT ID_EVENTO,NOME_EVENTO, ATRACOES_EVENTO, date_format(DATA_EVENTO, '%d %b %Y') as data_evento_formatada, HORARIO_INICIO_EVENTO, HORARIO_TERMINO_EVENTO, ID_PAIS, ID_ESTADO, ID_CIDADE, ENDERECO_EVENTO, QUANTIDADE_INGRESSOS, PRECO_INGRESSOS, ORGANIZADOR_EVENTO, CLASSIFICACAO_EVENTO FROM cadastro_evento WHERE ID_ESTADO = '$estado'
            OR ID_CIDADE = '$cidade'
            OR NOME_EVENTO = '$evento'
            OR ORGANIZADOR_EVENTO = '$organizador'";

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
         echo'
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
                <script src="api/pagseguro/pagseguro.js"></script>
                <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
                <link rel="stylesheet" type="text/css" href="_css/css.css">
                <style>
                    .linha{
                        background-color: gray;
                        width: auto;
                        height: 3px;
                        margin-top: 25px;
                        margin-bottom: 25px;
                    }
                </style>
            </head>
            <body>';
                include('_subtamplates/header.php');
                echo'
                <div class="container container-corpo">
                    <div class="col-md-3"></div>
                    ';
                    while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                    echo'

                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="panel panel-success">
                                <div class="panel-heading" style="background-color: #262626; color: white;">'.$registro['NOME_EVENTO'].'<h6>'.$registro['ID_PAIS'].' - '.$registro['ID_ESTADO'].'</h6></div>
                                <div class="panel-body">
                                    <div class="row">         
                                        <h5><span class="glyphicon glyphicon-star at"></span> '.$registro['ATRACOES_EVENTO'].'</h5>
                                        <img src="../assets/_imagens/ny.jpg" class="img-responsive" alt="" style="height: 260px; width: 600px; float: left;">
                                    </div>
                                    <div id="texto">
                                        <span class="glyphicon">&#xe109;</span>'.$registro['data_evento_formatada'].'<br> 
                                        <span class="glyphicon glyphicon-time"></span>'.$registro['HORARIO_INICIO_EVENTO'].' - '.$registro['HORARIO_TERMINO_EVENTO'].'<br>
                                        Cidade: '.$registro['ID_CIDADE'].'<br>
                                        <span class="glyphicon">&#xe062;</span>'.$registro['ENDERECO_EVENTO'].'<br>
                                        Quantidade de ingressos: '.$registro['QUANTIDADE_INGRESSOS'].'<br>
                                        <span class="glyphicon glyphicon-usd"></span> Preço do ingresso: R$ '.$registro['PRECO_INGRESSOS'].'<br>
                                        Classificação indicativa: '.$registro['CLASSIFICACAO_EVENTO'].'<br>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn" onClick="enviaPagseguro('.$registro['ID_EVENTO'].','.$registro['PRECO_INGRESSOS'].',\''.$registro['NOME_EVENTO'].'\')">Comprar ingresso <span class="glyphicon">&#xe116;</span></button>
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form id="comprar" action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                        <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                        <input type="hidden" id="code" name="code" value="" />
                                        <input type="hidden" name="iot" value="button" />
                                        </form>
                                        <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <form>
                                    <div class="linha"></div>
                                </form>
                            </div>
                        </div>
                    </div> ';
        }
        echo '             
                    <div class="col-md-3"></div>                   
                </div>
                <footer id="rodape">
                    <div id="footer"></div>
                </footer>                
            </body>
        </html>
        ';
    }else{
        header('Location: get_evento_erro.php');
    }

    //header('Location: get_evento_erro.php');
?>