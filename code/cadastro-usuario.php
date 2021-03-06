<?php
    session_start();

    $erro_username = isset($_GET['erro_username']) ? $_GET['erro_username'] : 0;
    $erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;
    $erro_cidade = isset($_GET['erro_cidade']) ? $_GET['erro_cidade'] : 0;
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
        <script type="text/javascript">
            $(document).ready( function() {
            
                // initialize with defaults
                $("#arquivos").fileinput();

                // with plugin options
                $("#arquivos").fileinput({'showUpload':false, 'previewFileType':'any'});
                
            });
        </script>
    </head>
    <body>
        <?php include('_subtamplates/header.php') ?>
    	
        <div class="container container-corpo">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form enctype="multipart/form-data" method="post" action="registra_usuario.php" id="formCadastroUsuario">
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
                            <label for="">Selecione seu país<a class="a">*</a></label>
                            <select type="option" id="combo-estado" class="form-control" name="pais" required="requiored">
                                <option selected="selected">Brasil</option> 
                            </select>
                            
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Selecione seu estado<a class="a">*</a></label>
                            <select type="option" class="form-control" name="estado" required="requiored"> 
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
                                <option selected="selected">Paraná</option> 
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

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Digite sua cidade<a class="a">*</a></label>
                            <input type="text" class="form-control" name="cidade" required="requiored">
                            <?php
                                if($erro_cidade){
                                    echo '<font color="#FF0000">O nome da cidade digitado foi digitado incorretamente</font>';
                                }
                            ?>
                        </div>
                    </div>   
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Selecione os arquivos desejados:</label>
                            <input id="arquivos" name="arquivos[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                            <input type="submit" value="Enviar arquivo" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info"  name="cadastrar" value="Cadastrar">Cadastrar Usuário</button> 
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