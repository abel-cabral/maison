<?php 
session_start(); 
    

if(!empty($_SESSION['mensagemSucesso'])){
    echo "<script>alert('".($_SESSION['mensagemSucesso'])."')</script>";
    session_unset();     
}elseif(!empty($_SESSION['mensagemErro'])){
    echo "<script>alert('".($_SESSION['mensagemErro'])."')</script>";
    session_unset();     
}
?>
