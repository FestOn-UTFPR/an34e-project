<?php
	session_start();

	if(!isset($_SESSION['username'])){
        header('Location: cadastro_evento_erro.php?erro=1');
    }

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
	$classificacao = $_POST['classificacao_evento'];

	$objDB = new db();
	$link = $objDB -> conecta_mysql();

	$username = $_SESSION['username'];	

	$sql = "INSERT INTO cadastro_evento (NOME_EVENTO, ATRACOES_EVENTO, DATA_EVENTO, HORARIO_INICIO_EVENTO, HOTARIO_TERMINO_EVENTO, ID_PAIS, ID_ESTADO, ID_CIDADE, ENDERECO_EVENTO, QUANTIDADE_INGRESSOS, PRECO_INGRESSOS, ORGANIZADOR_EVENTO, CLASSIFICACAO_EVENTO) VALUES ('$nome_evento', '$atracoes_evento','$data_evento','$hora_inicio','$hora_termino','$pais_evento','$estado_evento', '$cidade_evento', '$endereco_evento', '$quantidade_ingressos', '$preco_ingressos', '$username','$classificacao')";

	//executar query
	if(mysqli_query($link, $sql)){
		header('Location: registra_evento_sucesso.php');
	} else{
		header('Location: registra_evento_erro.php');
	}
?>
