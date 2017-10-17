<?php

function conectar(){
try{
    $host = 'lgg2gx1ha7yp2w0k.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    $dbname = 'maison';
    $username = 'pvyia7kons2d8a3u';
    $password = 'thp7b58xbqnorg11';
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