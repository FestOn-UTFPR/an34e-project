<?php
	require_once('db.class.php');

	$username = $_POST['username'];
	$nome = $_POST['nome'];
	$data_nascimento = $_POST['data_nascimento'];
	$email = $_POST['email_name'];
	$senha = md5($_POST['senha']);
	$pais = $_POST['pais'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];

	$objDB = new db();
	$link = $objDB -> conecta_mysql();

	$username_existe = false;
	$email_existe = false;
	$cidade_existe = false;

	//verificar se o usuario existe
	$sql_username = "SELECT * FROM cadastro_usuario WHERE username = '$username'";

	if($resultado_username = mysqli_query($link, $sql_username)){
		$dados_username = mysqli_fetch_array($resultado_username);

		if(isset($dados_username['username'])){
			$username_existe = true;
		}
	} else{
		echo 'Erro ao tentar localizar o registro de usuário';
	}

	//verificar se o email ja existe	
	$sql_email = "SELECT * FROM cadastro_usuario WHERE email_usuario = '$email'";

	if($resultado_email = mysqli_query($link, $sql_email)){
		$dados_email = mysqli_fetch_array($resultado_email);

		if(isset($dados_email['email_usuario'])){
			$email_existe = true;
		}
	} else{
		echo 'Erro ao tentar localizar o registro de e-mail';
	}

	//verifica se a cidade existe no banco de dados
	$sql_cidade = "SELECT * FROM cidade WHERE nome = '$cidade'";

	if($resultado_cidade = mysqli_query($link, $sql_cidade)){
		$dados_cidade = mysqli_fetch_array($resultado_cidade);

		if(isset($dados_cidade['nome'])){
			$cidade_existe = true;
		}
	} else{
		echo 'Erro ao tentar localizar o registro de cidade';
	}
	
	//verifica quantos arquivos estão sendo recebidos na superglobal $)FILES
	$total_arquivos = count($_FILES['arquivos']['name']);
	
	//diretório de upload
	$diretorio_upload = './uploads/';

	//percorre cada arquivo
	for ($i=0; $i < $total_arquivos; $i++) {
				
		//move o arquivo temporario para o destino
		$arquivo_upload = $diretorio_upload . basename($_FILES['arquivos']['name'][$i]);
		if (move_uploaded_file($_FILES['arquivos']['tmp_name'][$i], $arquivo_upload)) {
			echo "Sucesso<br />";
		} else {
			echo "Erro<br />";
		}
        
	}

	if($username_existe || $email_existe || $cidade_existe){
		$retorno_get = '';

		if($username_existe){
			$retorno_get .= "erro_username=1&";
		}

		if($email_existe){
			$retorno_get .= "erro_email=1&";
		}
		
		if($cidade_existe){
			$retorno_get .= "erro_cidade=1&";
		}

		header('Location: cadastro-usuario.php?'. $retorno_get);
		die();
	}

	$sql = "INSERT INTO cadastro_usuario(username, nome_usuario, data_nascimento, email_usuario, senha_usuario, id_pais, id_estado, id_cidade, foto_usuario) VALUES ('$username', '$nome','$data_nascimento','$email','$senha','$pais','$estado', '$cidade', '$total_arquivos')";

	//executar query
	if(mysqli_query($link, $sql)){
		header('Location: cadastro-sucesso.php');
	} else{
		echo 'Erro ao registrar usuário';
	}

?>