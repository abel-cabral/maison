<!--Com esse Require a página só pode ser acessada se estiver com usuario logado.-->
<?php   
    @require_once("./php/session.php");    
    @require_once("./php/header.php");
    
    //Com chamando essa function de session.php apenas usuarios logados podem acessa o index.php
    $userdeslogado = userdeslogado();
    
    //MENSAGENS AO USUARIO - O uso do @ serve para ocultar mensagem de aviso do PHP.
    echo @$_SESSION['mensagemStatus'];
    unset($_SESSION['mensagemStatus']);
?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!--Aqui incluimos o menu que acompanha o painel todo.-->
    <?php @require_once ('./php/estrutura/menuNav.php');?>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Visão Geral</a>
        </li>
        <li class="breadcrumb-item active">Meu Web Site</li>
    </ol>
    
        <!-- Icon Cards-->
    <div class="row">
       
        <!--Com esse Iframe nós importamos o site da cliente para podermos ter uma visao mais realista do trabalho-->
        <iframe src="http://www.republicadoclaudinho.com" width="100%" height="1000px" style="overflow-y: hidden"></iframe>
           
        </div>
    </div>
    
              
    </div>
    
    <?php
    //footer + restante dos scripts da página
    @require_once ("./php/estrutura/footer.php");
    ?>
