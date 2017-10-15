<?php

//Puxa e Exibir do Banco de Dados
@require_once './php/config.php';
$PDO= conectar();
$sql_msg = "SELECT idgerente, login, adm FROM gerente ORDER BY idgerente ASC";

//Seleciona os Registro no BD e joga em Array
$resultado_msg = $PDO->prepare($sql_msg);
$resultado_msg->execute();


?>