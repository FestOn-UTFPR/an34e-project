<?php
	require_once('db.class.php');

    $estado = $_POST['estado'];
    $cidade = $_POST['cidade']; 
    $evento = $_POST['evento'];
    $organizador = $_POST['organizador'];    

    $objDB = new db();
    $link = $objDB->conecta_mysql();
    
    $sql = "SELECT nome_evento, atracoes_evento, date_format(data_evento, '%d %b %Y') as data_evento_formatada, horario_inicio_evento, horario_termino_evento, id_pais, id_estado, id_cidade, endereco_evento, quantidade_ingressos, preco_ingressos, classificacao_evento FROM cadastro_evento AS c WHERE id_estado = '$estado'
                                                OR id_cidade = '$cidade'
                                                OR nome_evento = '$evento'
                                                OR organizador_evento = '$organizador'";


    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
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
            <body>
                <nav class="navbar navbar-inverse bg-inverse nav-feston">
                   <div id="header"></div>
                </nav>
                
                <div class="container container-corpo">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
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
                                            <span class="glyphicon">&#xe062;</span>'.$registro['endereco_evento'].'<br>
                                            Cidade: '.$registro['id_cidade'].'<br>
                                            Quantidade de ingressos: '.$registro['quantidade_ingressos'].'<br>
                                            <span class="glyphicon glyphicon-usd"></span> Preço do ingresso: R$ '.$registro['preco_ingressos'].'<br>
                                            Classificação indicativa: '.$registro['classificacao_evento'].'<br>
                                        </div>
                                    <div >
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
                    </div>               
                    <div class="col-md-3"></div>                   
                </div>
                <footer id="rodape">
                    <div id="footer"></div>
                </footer>
                <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
            </body>
        </html>
        ';
        }
    }else{
        header('Location: get_evento_erro.php');
    }

    header('Location: get_evento_erro.php');
?>