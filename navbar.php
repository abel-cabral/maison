<?php 
@require_once("./php/session.php");
$userdeslogado = userdeslogado();
//Inclui que inseri a nossa header do html
@require_once("./php/header.php");

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!--Aqui incluimos o menu que acompanha o painel todo.-->
    <?php @require_once ('./php/menuNav.php');?>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Navbar</li>
            </ol>
            <h1>Navbar</h1>
            <hr>
            <p>The SB Admin navbar can be either fixed or static, and it supports the navbar-light and navbar-dark Bootstrap 4 classes.</p>
            <a class="btn btn-primary" href="#" id="toggleNavPosition">Toggle Fixed/Static Navbar</a>
            <a class="btn btn-primary" href="#" id="toggleNavColor">Toggle Navbar Color</a>
            <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
            <div style="height: 1000px;"></div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © Your Website 2017</small>
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
        <!-- Custom scripts for this page-->
        <!-- Toggle between fixed and static navbar-->
        <script>
            $('#toggleNavPosition').click(function() {
                $('body').toggleClass('fixed-nav');
                $('nav').toggleClass('fixed-top static-top');
            });

        </script>
        <!-- Toggle between dark and light navbar-->
        <script>
            $('#toggleNavColor').click(function() {
                $('nav').toggleClass('navbar-dark navbar-light');
                $('nav').toggleClass('bg-dark bg-light');
                $('body').toggleClass('bg-dark bg-light');
            });

        </script>
    </div>
</body>

</html>
