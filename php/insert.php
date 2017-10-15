<?php
session_start();
@require_once ("./config.php");
$pdo = conectar();


function cadastro(){

//Variaveis que capturam
    $login=strtolower($_POST["login"]);
    $senha=crypt($_POST["senha"],"somesalt");
    $adm=ucwords($_POST["adm"]);
// prepare sql and bind parameters
    $stmt = $pdo->prepare("INSERT INTO gerente(login, adm, senha) VALUES(:login, :adm, :senha)");
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':adm', $adm);
    $stmt->bindParam(':senha', $senha);

// Aqui Gravamos no Banco caso de tudo certo vamos para login, caso nao ficamos em cadastro.    
try{
    $stmt->execute();      
    $_SESSION['mensagemSucesso'] = "<script>alert('Cadastro Realizado com Sucesso.');</script>";
    header("Location: ../index.php");
}catch(Exception $e){
    $_SESSION['mensagemErro'] = "Opa! Houve algum erro, tente de novo.";
    header("Location: ../register.php");
}    
}
?>