<!--Com esse Require a página só pode ser acessada se estiver com usuario logado.-->
<?php 
@require_once("./php/session.php");
$userdeslogado = userdeslogado();
//Inclui que inseri a nossa header do html
@require_once("./php/header.php");
//MENSAGENS AO USUARIO - O uso do @ serve para ocultar mensagem de aviso do PHP.
    echo @$_SESSION['mensagemStatus'];
    unset($_SESSION['mensagemStatus']);




//VAI PARA O HTML
//Local onde está a PDO que puxa do banco de dados
//A variavel recebe o valor do return da function assim posso trabalhar tanto a tabela usuarios quanto a img
//Fazemos um while para jogar as imagens num array e de lá puxamos por sua id.
@require_once("./php/verDados.php");
$exibirImg = exibirImg();
while($msg_login = $exibirImg->fetch(PDO::FETCH_ASSOC)):
    $maedesanto[] = $msg_login['url'];
endwhile;

//Numero do Array começa a contar em 0, mas numero da linha na tabela começa em 1, então o arquivo no array 0 deve ter value 1:
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
                        <li class="breadcrumb-item active">MaisonChic.com.br - Atualização de Fotos </li>
                    </ol>
                    <div class="row">

                        <!----------------------------------------------------------------------------------------------------------------------->
                        <!--Primeira Coluna de Fotos Primeira Sessão-->
                        <div class="col-sm-4">                            
                            <h2 class="text-center">Imagem da Introdução</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[0]; ?>" alt="Chania" width="460" height="345">
                            <form class="form-horizontal" action="./php/insert.php" method="post">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input name="url" placeholder="URL da Imagem" class="form-control input-md" required="Para Atualizar você deve inserir um Link" type="text">
                                            <input type="hidden" name="idimg" value="1">
                                            
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">

                                            <button name="atualizeImg" value="atualizeImg" type="submit" class="btn btn-success" style="cursor:pointer">Atualizar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>                            
                        </div>

                        <div class="col-sm-4">
                            <h2 class="text-center">Capa Promocional</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[1]; ?>" alt="Chania" width="460" height="345">
                            <form class="form-horizontal" action="./php/insert.php" method="post">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input name="url" placeholder="URL da Imagem" class="form-control input-md" required="Para Atualizar você deve inserir um Link" type="text">
                                            <input type="hidden" name="idimg" value="2">
                                            
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">

                                            <button name="atualizeImg" value="atualizeImg" type="submit" class="btn btn-success" style="cursor:pointer">Atualizar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>                            
                        </div>

                        <div class="col-sm-4">
                            <h2 class="text-center">Fundadora</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[2]; ?>" alt="Chania" width="460" height="345">
                            <form class="form-horizontal" action="./php/insert.php" method="post">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input name="url" placeholder="URL da Imagem" class="form-control input-md" required="Para Atualizar você deve inserir um Link" type="text">
                                            <input type="hidden" name="idimg" value="3">
                                            
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">

                                            <button name="atualizeImg" value="atualizeImg" type="submit" class="btn btn-success" style="cursor:pointer">Atualizar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>                            
                        </div>

                    </div>
                    
                    <div class="row">

                        <!----------------------------------------------------------------------------------------------------------------------->
                        <!--Primeira Coluna de Fotos Primeira Sessão-->
                        <div class="col-sm-4">                      
                            <h2 class="text-center">Foto de Capa</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[3]; ?>" alt="Chania" width="460" height="345">
                            <form class="form-horizontal" action="./php/insert.php" method="post">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input name="url" placeholder="URL da Imagem" class="form-control input-md" required="Para Atualizar você deve inserir um Link" type="text">
                                            <input type="hidden" name="idimg" value="4">
                                            
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">

                                            <button name="atualizeImg" value="atualizeImg" type="submit" class="btn btn-success" style="cursor:pointer">Atualizar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>

                        <div class="col-sm-4">                            
                            <h2 class="text-center">Foto de Capa</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[4]; ?>" alt="Chania" width="460" height="345">
                            <form class="form-horizontal" action="./php/insert.php" method="post">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input name="url" placeholder="URL da Imagem" class="form-control input-md" required="Para Atualizar você deve inserir um Link" type="text">
                                            <input type="hidden" name="idimg" value="5">
                                            
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">

                                            <button name="atualizeImg" value="atualizeImg" type="submit" class="btn btn-success" style="cursor:pointer">Atualizar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>

                        <div class="col-sm-4">
                            <!--Primeira Coluna de Fotos, Segunda Sessão-->
                            <h2 class="text-center">Foto de Capa</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[5]; ?>" alt="Chania" width="460" height="345">
                            <form class="form-horizontal" action="./php/insert.php" method="post">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input name="url" placeholder="URL da Imagem" class="form-control input-md" required="Para Atualizar você deve inserir um Link" type="text">
                                            <input type="hidden" name="idimg" value="6">
                                            
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">

                                            <button name="atualizeImg" value="atualizeImg" type="submit" class="btn btn-success" style="cursor:pointer">Atualizar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
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
