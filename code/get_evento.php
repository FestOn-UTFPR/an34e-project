<?php
	require_once('db.class.php');

    $estado = $_POST['estado'];
    $cidade = $_POST['cidade']; 
    $evento = $_POST['evento'];
    $organizador = $_POST['organizador'];    

    $objDB = new db();
    $link = $objDB->conecta_mysql();
    
    $sql = "SELECT * FROM cadastro_evento AS c WHERE id_estado = '$estado'
                                                OR id_cidade = '$cidade'
                                                OR nome_evento = '$evento'
                                                OR organizador_evento = '$organizador'";

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

                echo '<h4 class="list-group-item-heading">'.$registro['nome_evento'].'<small> - '.$registro['id_pais'].'</small></h4>';
                echo '<p class="list-group-item-text">'.$registro['atracoes_evento'].'</p>';
            /*
            $nome_evento = $_POST['nome_evento'];
    $atracoes_evento = $_POST['atracoes_evento'];
    $data_evento = $_POST['data_evento'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_termino = $_POST['hora_termino'];
    $pais_evento = $_POST['pais_evento'];
    $estado_evento = $_POST['estado_evento'];
    $cidade_evento = $_POST['cidade_evento'];
    $endereco_evento = $_POST['endereco_evento'];
    $quantidade_ingressos = $_POST['quantidade_ingressos'];
    $preco_ingressos = $_POST['preco_ingressos'];*/

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
        </head>
        <body>
            <nav class="navbar navbar-inverse bg-inverse nav-feston">
               <div id="header"></div>
            </nav>
            
            <div class="container container-corpo">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h4 class="list-group-item-heading">'.$registro['nome_evento'].'<small> - '.$registro['id_pais'].'</small></h4>
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
        echo 'Erro na consulta de tweets no banco de dados!';
    }


    if(mysqli_query($link, $sql)){
        echo 'Evento registrado com sucesso!';
    } else{
        echo 'Erro ao registrar evento';
    }
?>