<?php

// Chama as configuraÃ§Ãµes de conexÃ£o com o BD

@include_once './config.php';

// Busca os Adm cadastrados

function exibirNomes()
{
	$PDO = conectar();

	// Puxa e Exibir do Banco de Dados, se usarmos * seleciona tudo na tabela

	$sql_msg = "SELECT idgerente, login, adm FROM gerente ORDER BY idgerente ASC";

	// Seleciona os Registro no BD e joga em Array

	$resultado_msg = $PDO->prepare($sql_msg);
	$resultado_msg->execute();
	return $resultado_msg;
}

// Pega as imagens no Banco

function exibirImg()
{
	$PDO = conectar();

	// Puxa e Exibir do Banco de Dados

	$sql_msg = "SELECT * FROM img";

	// Seleciona os Registro no BD e joga em Array

	$resultado_msg = $PDO->prepare($sql_msg);
	$resultado_msg->execute();
	return $resultado_msg;
}

// Pega os Textos no Banco

function exibirTxt()
{
	$PDO = conectar();

	// Puxa e Exibir do Banco de Dados

	$sql_msg = "SELECT * FROM txt";

	// Seleciona os Registro no BD e joga em Array

	$resultado_msg = $PDO->prepare($sql_msg);
	$resultado_msg->execute();
	return $resultado_msg;
}

function qualifica()
{
	$PDO = conectar();

	// Puxa e Exibir do Banco de Dados

	$sql_qlf = "SELECT * FROM qlf";

	// Seleciona os Registro no BD e joga em Array

	$resultado_qlf = $PDO->prepare($sql_qlf);
	$resultado_qlf->execute();
	return $resultado_qlf;
}

function perfil($go)
{
	@session_start();

	// Pega a variavel de sessÃ£o

	$idgerente = $_SESSION['user_id'];
	$pdo = conectar();
	$sql_msg_contato = "SELECT idgerente, login, adm, senha FROM gerente WHERE idgerente='$idgerente'";
	$result_msg_contato = $pdo->prepare($sql_msg_contato);
	$result_msg_contato->bindParam(':idgerente', $idgerente, PDO::PARAM_INT);
	$result_msg_contato->execute();
	$resultado_msg_contato = $result_msg_contato->fetch(PDO::FETCH_ASSOC);
	if (!is_array($resultado_msg_contato)) {
		echo "Nenhum contato encontrado";
		exit;
	}

	return $resultado_msg_contato[$go];
}

?>