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
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Desenvolvido por <a href="https://www.facebook.com/abel.yuracer">Lord Warakia</a></small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!--Confirmação de Saida-->
    <?php @require_once ('./php/estrutura/modalSaida.php');?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    </div>
</body>

</html>
