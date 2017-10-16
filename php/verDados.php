<?php
    @require_once './php/config.php';

function exibirNomes(){

$PDO= conectar();
//Puxa e Exibir do Banco de Dados, se usarmos * seleciona tudo na tabela
$sql_msg = "SELECT idgerente, login, adm FROM gerente ORDER BY idgerente ASC";

//Seleciona os Registro no BD e joga em Array
$resultado_msg = $PDO->prepare($sql_msg);
$resultado_msg->execute();
    return $resultado_msg;        
}

function exibirImg(){    
    $PDO= conectar();
//Puxa e Exibir do Banco de Dados
$sql_msg = "SELECT * FROM img";

//Seleciona os Registro no BD e joga em Array
$resultado_msg = $PDO->prepare($sql_msg);
$resultado_msg->execute();
    return $resultado_msg;
}





?>