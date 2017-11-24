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
    </head>
    <body>
        <?php include('_subtamplates/header.php') ?>
        
        <div class="container container-corpo">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="post" action="get_evento.php" id="formGetEvento">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading" style="background-color: #262626; color: white;">Buscar eventos por estado</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Selecione o estado do evento</label>
                                            <select type="option" class="form-control" name="estado" required="requiored"> 
                                                <option>Selecione um estado</option>
                                                <option>Acre</option> 
                                                <option>Alagoas</option> 
                                                <option>Amapá</option> 
                                                <option>Amazonas</option> 
                                                <option>Bahia</option> 
                                                <option>Ceará</option> 
                                                <option>Distrito Federal</option> 
                                                <option>Espírito Santo</option> 
                                                <option>Goiás</option> 
                                                <option>Maranhão</option> 
                                                <option>Mato Grosso</option> 
                                                <option>Mato Grosso do Sul</option> 
                                                <option>Minas Gerais</option> 
                                                <option>Pará</option> 
                                                <option>Paraíba</option> 
                                                <option>Paraná</option> 
                                                <option>Pernambuco</option> 
                                                <option>Piauí</option> 
                                                <option>Rio de Janeiro</option> 
                                                <option>Rio Grande do Norte</option> 
                                                <option>Rio Grande do Sul</option> 
                                                <option>Rondônia</option> 
                                                <option>Roraima</option> 
                                                <option>Santa Catarina</option> 
                                                <option>São Paulo</option> 
                                                <option>Sergipe</option> 
                                                <option>Tocantins</option>
                                            </select>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading" style="background-color: #262626; color: white;">Buscar evento por cidade</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nome da cidade</label>
                                            <input type="text" class="form-control" name="cidade" id="valor" placeholder="Digite o nome da cidade">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading" style="background-color: #262626; color: white;">Buscar evento pelo nome</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nome do evento</label>
                                            <input type="text" class="form-control" name="evento" id="valor" placeholder="Digite o nome do evento">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading" style="background-color: #262626; color: white;">Buscar evento por organizador</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nome do organizador</label>
                                            <input type="text" class="form-control" name="organizador" id="valor" placeholder="Digite o nome do organizador">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button id="btn" type="submit" class="btn btn-default">Buscar evento <span class="glyphicon">&#xe003;</span></button> 
                    </div> 
                </form>
            </div>
            <div class="col-md-3 list-group"></div>                   
        </div>
        <footer id="rodape">
            <div id="footer"></div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    </body>
</html>