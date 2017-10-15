<?php 
// Inicia sessões 
session_start(); 

// Verifica se Há Sessão Ativa.

function userdeslogado(){
    if(!isset($_SESSION["user_id"]) || !isset($_SESSION["user_name"])){ 
        // Usuário não logado! Redireciona para a página de login 
    header("Location: ./login.php"); 
    exit; 
    }
}

//Para impedir usuario logado vai para login.php novamente

function userlogado(){
    if(isset($_SESSION["user_id"]) || isset($_SESSION["user_name"])){
        header("Location: ./index.php"); 
        exit;   
    }
};

?>
