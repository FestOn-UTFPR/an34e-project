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

	$sql = "INSERT INTO cadastro_evento(nome_evento, atracoes_evento, data_evento, horario_inicio_evento, horario_termino_evento, id_pais, id_estado, id_cidade, endereco_evento, quantidade_ingressos, preco_ingressos) VALUES ('$nome_evento', '$atracoes_evento','$data_evento','$hora_inicio','$hora_termino','$pais_evento','$estado_evento', '$cidade_evento', '$endereco_evento', '$quantidade_ingressos', '$preco_ingressos')";

	//executar query
	if(mysqli_query($link, $sql)){
		header('Location: registra_evento_sucesso.php');
	} else{
		header('Location: registra_evento_erro.php');
	}
?>
