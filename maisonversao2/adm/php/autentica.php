<?php
 
// inclui o arquivo de inicialização
include_once './config.php';
 
// resgata variáveis do formulário, pego a entrada de login e jogo toda pra Minusculo
$login = isset($_POST['login']) ? strtolower($_POST['login']) : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$crypt_pass = crypt($senha,"somesalt");
 
if (empty($login) || empty($senha))
{
    echo "<script>alert('Nenhum campo pode estar vazio!');</script>";
    exit;
}
 
// cria o hash da senha
//$passwordHash = make_hash($senha);
 
$PDO = conectar();
 
$sql = "SELECT idgerente, adm FROM gerente WHERE login = :login AND senha = :senha";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':login', $login);
$stmt->bindParam(':senha', $crypt_pass);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    session_start();
    $_SESSION['statusLogin'] = '<script>alert("Login ou Senha Inválidos")</script>';
    header('Location: ../login.php');
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();

$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['idgerente'];
$_SESSION['user_name'] = $user['adm'];
 
header('Location: ../index.php');