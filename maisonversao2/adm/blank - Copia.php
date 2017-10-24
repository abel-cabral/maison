<!--Com esse Require a página só pode ser acessada se estiver com usuario logado.-->
<?php 
@require_once("./php/session.php");
$userdeslogado = userdeslogado();
//Inclui que inseri a nossa header do html
@require_once("./php/header.php");

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!--Aqui incluimos os nosso Menu de navegação-->
    <?php @require_once ('./php/estrutura/menuNav.php');?>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Visão Geral</a>
                </li>
                <li class="breadcrumb-item active">Blank Page</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <h1>Blank</h1>
                    <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Desenvolvido por <a href="http://www.github.com/abel-cabral">Abel</a></small>
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
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>
    </div>
</body>

</html>
