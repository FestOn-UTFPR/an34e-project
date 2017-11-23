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
	$pais_existe = false;
	$estado_existe = false;
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

	
	//verifica se o país existe no banco de dados
	$sql_pais = "SELECT * FROM pais AS p WHERE p.nome = '%$pais%'";

	if($resultado_pais = mysqli_query($link, $sql_pais)){
		$dados_pais = mysqli_fetch_array($resultado_pais);

		if(isset($dados_pais['nome'])){
			$pais_existe = true;
		}
	} else{
		echo 'Erro ao tentar localizar o registro de pais';
	}

	//verifica se o estado existe no banco de dados
	$sql_estado = "SELECT * FROM estado AS e WHERE e.nome = '%$estado%'";

	if($resultado_estado = mysqli_query($link, $sql_estado)){
		$dados_estado = mysqli_fetch_array($resultado_estado);

		if(isset($dados_estado['nome'])){
			$estado_existe = true;
		}
	} else{
		echo 'Erro ao tentar localizar o registro de estado';
	}

	//verifica se a cidade existe no banco de dados
	$sql_cidade = "SELECT * FROM cidade AS c WHERE c.nome = '%$cidade%'";

	if($resultado_cidade = mysqli_query($link, $sql_cidade)){
		$dados_cidade = mysqli_fetch_array($resultado_cidade);

		if(isset($dados_cidade['nome'])){
			$cidade_existe = true;
		}
	} else{
		echo 'Erro ao tentar localizar o registro de cidade';
	}


	if($username_existe || $email_existe || $pais_existe || $estado_existe || $cidade_existe){
		$retorno_get = '';

		if($username_existe){
			$retorno_get .= "erro_username=1&";
		}

		if($email_existe){
			$retorno_get .= "erro_email=1&";
		}
		
		if($pais_existe){
			$retorno_get .= "erro_pais=1&";
		}

		if($estado_existe){
			$retorno_get .= "erro_estado=1&";
		}

		if($cidade_existe){
			$retorno_get .= "erro_cidade=1&";
		}

		header('Location: cadastro-usuario.php?'. $retorno_get);
		die();
	}

	$sql = "INSERT INTO cadastro_usuario(username, nome_usuario, data_nascimento, email_usuario, senha_usuario, id_pais, id_estado, id_cidade) VALUES ('$username', '$nome','$data_nascimento','$email','$senha','$pais','$estado', '$cidade')";

	//executar query
	if(mysqli_query($link, $sql)){
		header('Location: cadastro-sucesso.php');
	} else{
		echo 'Erro ao registrar usuário';
	}
?>