<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: cadastro_evento_erro.php?erro=1');
    }
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
                            <textarea class="form-control comment-event" rows="5" id="comment" name="atracoes_evento" placeholder="Comente as atrações do evento ex: ColdPlay e Mc Livinho"></textarea>
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
                            <label for="">Selecione o país<a class="a">*</a></label>
                            <select type="option" id="combo-estado" class="form-control" name="pais_evento" required="requiored">
                                <option selected="selected">Brasil</option> 
                            </select>
                            
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Selecione o estado<a class="a">*</a></label>
                            <select type="option" class="form-control" name="estado_evento" required="requiored"> 
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
                                <option selected="selected">São Paulo</option> 
                                <option>Sergipe</option> 
                                <option>Tocantins</option>
                            </select>    
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Digite a cidade<a class="a">*</a></label>
                            <input type="text" class="form-control" name="cidade_evento" required="requiored" placeholder="Digite a cidade do seu evento">
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
                            <label for="">Classificação do seu evento<a class="a">*</a></label>
                            <input type="number" class="form-control" id="" max="100" name="classificacao_evento" placeholder="Digite classificação indicativa do seu evento" required="requiored">
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
                        <button type="submit" class="btn btn-default">Cadastrar evento</button> 
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>                   
        </div>
        <footer id="rodape">
            <div id="footer"></div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    </body>
</html>