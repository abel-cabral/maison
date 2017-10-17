<?php

function conectar(){
try{
    $host = 'us-cdbr-iron-east-05.cleardb.net';
    $dbname = 'heroku_629545ab3ab0fce';
    $username = 'b2038f1ecb1008';
    $password = 'e85e48c7';
    $charset = 'utf8';
    $collate = 'utf8_unicode_ci';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
    $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"        
];    
    $pdo = new PDO($dsn, $username, $password, $options);            
}catch(PDOException $e){
    echo "<script>alert('Não foi Possivel Conectar ao Banco de Dados');</script>";
}
    return $pdo;
};