<?php
    
    @include_once './php/config.php';
    @include_once './adm/php/config.php';
    


//Busca os Adm cadastrados
function exibirNomes(){

$PDO= conectar();
//Puxa e Exibir do Banco de Dados, se usarmos * seleciona tudo na tabela
$sql_msg = "SELECT idgerente, login, adm FROM gerente ORDER BY idgerente ASC";

//Seleciona os Registro no BD e joga em Array
$resultado_msg = $PDO->prepare($sql_msg);
$resultado_msg->execute();
    return $resultado_msg;        
}

//Pega as imagens no Banco
function exibirImg(){    
    $PDO= conectar();
//Puxa e Exibir do Banco de Dados
$sql_msg = "SELECT * FROM img";

//Seleciona os Registro no BD e joga em Array
$resultado_msg = $PDO->prepare($sql_msg);
$resultado_msg->execute();
    return $resultado_msg;
}

//Pega os Textos no Banco
function exibirTxt(){    
    $PDO= conectar();
//Puxa e Exibir do Banco de Dados
$sql_msg = "SELECT * FROM txt";

//Seleciona os Registro no BD e joga em Array
$resultado_msg = $PDO->prepare($sql_msg);
$resultado_msg->execute();
    return $resultado_msg;
}





?>