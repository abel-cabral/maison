<!--Com esse Require a página só pode ser acessada se estiver com usuario logado.-->
<?php 
@require_once("./php/session.php");
$userdeslogado = userdeslogado();
//Inclui que inseri a nossa header do html
@require_once("./php/header.php");




//VAI PARA O HTML
//Local onde está a PDO que puxa do banco de dados
//A variavel recebe o valor do return da function assim posso trabalhar tanto a tabela usuarios quanto a img
@require_once("./php/verDados.php");
$exibirImg = exibirImg();
$msg_login = $exibirImg->fetch(PDO::FETCH_ASSOC);

?>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!--Aqui incluimos os nosso Menu de navegação-->
        <?php @require_once ('./php/estrutura/menuNav.php');?>

            <div class="content-wrapper">
                <div class="container-fluid">
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                    <div class="row">
                        <div class="col-12">
                            <div class="container">
                                <h2>Foto de Capa</h2>
                                <p>Colando um URL aqui você altera a imagem que está na página index logo a baixo do </p>
                                <img class="img-responsive" src="<?php echo $msg_login['url']; ?>" alt="Chania" width="460" height="345">
                            </div>
                            <div class="container">
                                <h2>Foto da</h2>
                                <p>The .img-responsive class makes the image scale nicely to the parent element (resize the browser window to see the effect):</p>
                                <img class="img-responsive" src="<?php echo $msg_login['url']; ?>" alt="Chania" width="460" height="345">
                            </div>
                            <div class="container">
                                <h2>Image</h2>
                                <p>The .img-responsive class makes the image scale nicely to the parent element (resize the browser window to see the effect):</p>
                                <img class="img-responsive" src="<?php echo $msg_login['url']; ?>" alt="Chania" width="460" height="345">
                            </div>



                        </div>
                    </div>
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
            </div>
    </body>

    </html>
