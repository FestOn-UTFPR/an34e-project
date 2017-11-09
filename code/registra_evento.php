<?php
	require_once('db.class.php');

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
	$preco_ingressos = $_POST['preco_ingressos'];

	$objDB = new db();
	$link = $objDB -> conecta_mysql();

	$pais_existe = false;
	$estado_existe = false;
	$cidade_existe = false;

	//verifica se o país existe no banco de dados
	$sql_pais = "SELECT * FROM pais AS p WHERE p.nome = '$pais_evento'";

	if($resultado_pais = mysqli_query($link, $sql_pais)){
		$dados_pais = mysqli_fetch_array($resultado_pais);

		if(isset($dados_pais['pais_evento'])){
			$pais_existe = true;
		}
	} else{
		echo 'Erro ao tentar localizar o registro de pais';
	}

	//verifica se o estado existe no banco de dados
	$sql_estado = "SELECT * FROM estado AS e WHERE e.nome = '$estado_evento'";

	if($resultado_estado = mysqli_query($link, $sql_estado)){
		$dados_estado = mysqli_fetch_array($resultado_estado);

		if(isset($dados_estado['estado_evento'])){
			$estado_existe = true;
		}
	} else{
		echo 'Erro ao tentar localizar o registro de estado';
	}

	//verifica se a cidade existe no banco de dados
	$sql_cidade = "SELECT * FROM cidade AS c WHERE c.nome = '$cidade_evento'";

	if($resultado_cidade = mysqli_query($link, $sql_cidade)){
		$dados_cidade = mysqli_fetch_array($resultado_cidade);

		if(isset($dados_cidade['cidade_evento'])){
			$cidade_existe = true;
		}
	} else{
		echo 'Erro ao tentar localizar o registro de cidade';
	}

	if($pais_existe || $estado_existe || $cidade_existe){
		$retorno_get = '';

		if($pais_existe){
			$retorno_get .= "erro_pais=1&";
		}

		if($estado_existe){
			$retorno_get .= "erro_estado=1&";
		}

		if($cidade_existe){
			$retorno_get .= "erro_cidade=1&";
		}

		header('Location: cadastro-eventos.php?'. $retorno_get);
		die();
	}

	$sql = "INSERT INTO cadastro_evento(nome_evento, atracoes_evento, data_evento, horario_inicio_evento, horario_termino_evento, id_pais, id_estado, id_cidade, endereco_evento, quantidade_ingressos, preco_ingressos) VALUES ('$nome_evento', '$atracoes_evento','$data_evento','$hora_inicio','$hora_termino','$pais_evento','$estado_evento', '$cidade_evento', '$endereco_evento', '$quantidade_ingressos', '$preco_ingressos')";

	//executar query
	if(mysqli_query($link, $sql)){
		echo 'Evento registrado com sucesso!';
	} else{
		echo 'Erro ao registrar evento';
	}
?>