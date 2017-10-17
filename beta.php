<!--Com esse Require a página só pode ser acessada se estiver com usuario logado.-->
<?php 
@require_once("./php/session.php");
$userdeslogado = userdeslogado();
//Inclui que inseri a nossa header do html
@require_once("./php/header.php");




//VAI PARA O HTML
//Local onde está a PDO que puxa do banco de dados
//A variavel recebe o valor do return da function assim posso trabalhar tanto a tabela usuarios quanto a img
//Fazemos um while para jogar as imagens num array e de lá puxamos por sua id.
@require_once("./php/verDados.php");
$exibirImg = exibirImg();
while($msg_login = $exibirImg->fetch(PDO::FETCH_ASSOC)):
    $maedesanto[] = $msg_login['url'];
endwhile;


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
                        <li class="breadcrumb-item active">MaisonChic.com.br - Atualização de Fotos </li>
                    </ol>
                    <div class="row">

                        <!----------------------------------------------------------------------------------------------------------------------->
                        <!--Primeira Coluna de Fotos Primeira Sessão-->
                        <div class="col-sm-4">
                            <h2>Foto de Capa</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[0]; ?>" alt="Chania" width="460" height="345" border="5px">
                            <form class="form-horizontal">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input id="url" name="url" placeholder="URL da Imagem" class="form-control input-md" required="" type="text">
                                            <span class="help-block">Cole aqui sua URL de nova imagem</span>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-success">Atualizar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>

                            <!--Primeira Coluna de Fotos Segunda Sessão-->
                            <h2>Foto de Capa</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[2]; ?>" alt="Chania" width="460" height="345" border="5px">
                            <form class="form-horizontal">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input id="url" name="url" placeholder="URL da Imagem" class="form-control input-md" required="" type="text">
                                            <span class="help-block">Cole aqui sua URL de nova imagem</span>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-success">Atualizar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>

                        <!----------------------------------------------------------------------------------------------------------------------->
                        <!--Primeira Coluna de Fotos Primeira Sessão-->
                        <div class="col-sm-4">
                            <h2>Foto de Capa</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[1]; ?>" alt="Chania" width="460" height="345" border="5px">
                            <form class="form-horizontal">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input id="url" name="url" placeholder="URL da Imagem" class="form-control input-md" required="" type="text">
                                            <span class="help-block">Cole aqui sua URL de nova imagem</span>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-success">Atualizar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>

                            <!--Primeira Coluna de Fotos Segunda Sessão-->
                            <h2>Foto de Capa</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[4]; ?>" alt="Chania" width="460" height="345" border="5px">
                            <form class="form-horizontal">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input id="url" name="url" placeholder="URL da Imagem" class="form-control input-md" required="" type="text">
                                            <span class="help-block">Cole aqui sua URL de nova imagem</span>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-success">Atualizar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>

                        </div>

                        <!----------------------------------------------------------------------------------------------------------------------->
                        <!--Primeira Coluna de Fotos Primeira Sessão-->
                        <div class="col-sm-4">
                            <h2>Foto de Capa</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[3]; ?>" alt="Chania" width="460" height="345" border="5px">
                            <form class="form-horizontal">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input id="url" name="url" placeholder="URL da Imagem" class="form-control input-md" required="" type="text">
                                            <span class="help-block">Cole aqui sua URL de nova imagem</span>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-success">Atualizar</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>

                            <!--Primeira Coluna de Fotos Segunda Sessão-->
                            <h2>Foto de Capa</h2>
                            <img class="img-responsive img-thumbnail" src="<?php echo $maedesanto[5]; ?>" alt="Chania" width="460" height="345" border="5px">
                            <form class="form-horizontal">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="url"></label>
                                        <div class="col-md-10">
                                            <input id="url" name="url" placeholder="URL da Imagem" class="form-control input-xl" required="" type="text">
                                            <span class="help-block">Cole aqui sua URL de nova imagem</span>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-success">Atualizar</button>
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
