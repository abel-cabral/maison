<!--localhost/maison/php/insert.php?gerente=Abel&senha=123&nome=Juracer-->
<?php
session_start();
@require_once ("./config.php");
$pdo = conectar();

//Variaveis que capturam
    $login=$_GET["login"];
    $senha=crypt($_GET["senha"],"somesalt");
    $adm=$_GET["adm"];
$row = [
    'id' => 1,
    'username' => 'bob',
    'email' => 'bob2@example.com'
];
$sql = "UPDATE users SET username=:username, email=:email WHERE id=:id;";
$status = $pdo->prepare($sql)->execute($row);

// prepare sql and bind parameters
    $stmt = $pdo->prepare("INSERT INTO gerente(login, adm, senha) VALUES(:login, :adm, :senha)");
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':adm', $adm);
    $stmt->bindParam(':senha', $senha);

// Aqui Gravamos no Banco caso de tudo certo vamos para login, caso nao ficamos em cadastro.    
try{
    $stmt->execute();      
    $_SESSION['mensagemSucesso'] = "Sucesso ao Adicionar Novo Administrador :)";
    header("Location: ../login.php");
}catch(Exception $e){
    $_SESSION['mensagemErro'] = "Opa! Houve algum erro, tente de novo.";
    header("Location: ../register.php");
}    

?>