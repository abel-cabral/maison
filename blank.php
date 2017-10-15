<!--Com esse Require a página só pode ser acessada se estiver com usuario logado.-->
<?php 
@require_once("./php/session.php");
$userdeslogado = userdeslogado();
//Inclui que inseri a nossa header do html
@require_once("./php/header.php");

//Local onde está a PDO que puxa do banco de dados
@require_once("./php/verDados.php");


?>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!--Aqui incluimos os nosso Menu de navegação-->
        <?php @require_once ('./php/menuNav.php');?>

            <div class="content-wrapper">
                <div class="container-fluid">
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Administradores</li>
                    </ol>
                    
                    
                    <!--Aqui eu criei uma tabela em bootstrap que faz o while do array e joga os dados nas colunas abaixo descritas-->
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Login</th>
                                        <th>Administrador</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($msg_login = $resultado_msg->fetch(PDO::FETCH_ASSOC)): ?>
                                        <tr>
                                            <td>
                                                <?php echo $msg_login['idgerente']; ?>
                                            </td>
                                            <td>
                                                <?php echo $msg_login['login']; ?>
                                            </td>
                                            <td>
                                                <?php echo $msg_login['adm']; ?>
                                            </td>
                                            <td>
                                                <a href="./editar.php?idgerente=<?php echo $msg_login['idgerente']; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a href="./editar.php"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>                                                
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>

                                </tbody>
                            </table>

                            <!--Aqui faço um while pra jogar os dados gerados no array-->



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
