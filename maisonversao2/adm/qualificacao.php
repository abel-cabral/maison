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
$exibirQlf = qualifica();
while($msg_qlf = $exibirQlf->fetch(PDO::FETCH_ASSOC)):    
    $paidesanto[] = $msg_qlf['qlf'];
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
                <li class="breadcrumb-item active">MaisonChic.com.br - Controle de Qualificações</li>
            </ol>
            <div class="row">

                <!----------------------------------------------------------------------------------------------------------------------->
                <!--Primeira Coluna de Fotos Primeira Sessão-->
                <form class="form-horizontal col-md-6" action="./php/insert.php" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="textarea"></label>
                            <div class="col-md-12">
                                <?php echo ucwords($paidesanto[0]); ?>
                                <!-- Appended Input-->
                                
                                    <label class="col-md-8 control-label" for="appendedtext"></label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input id="appendedtext" name="qlf" class="form-control" placeholder="" required="" type="text">
                                            <span class="input-group-addon">Facebook</span>
                                        </div>
                                        <p class="help-block">Link de Incorporação</p>
                                        <input type="hidden" name="idqlf" value="1">
                                        <a><button name="atualizeQlf" type="submit" class="btn btn-warning">Atualizar</button></a>
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                </form><br><br><br>
                <!----------------------------------------------------------------------------------------------------------------------->
                <!--Primeira Coluna de Fotos Primeira Sessão-->
                <form class="form-horizontal col-md-6" action="./php/insert.php" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="textarea"></label>
                            <div class="col-md-12">
                                <?php echo ucwords($paidesanto[1]); ?>
                                <!-- Appended Input-->
                                
                                    <label class="col-md-8 control-label" for="appendedtext"></label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input id="appendedtext" name="qlf" class="form-control" placeholder="" required="" type="text">
                                            <span class="input-group-addon">Facebook</span>
                                        </div>
                                        <p class="help-block">Link de Incorporação</p>
                                        <input type="hidden" name="idqlf" value="2">
                                        <a><button name="atualizeQlf" type="submit" class="btn btn-warning">Atualizar</button></a>
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                </form><br><br><br>
                <!-----------------------------------------------------------------------------------------------------------------------><!--Primeira Coluna de Fotos Primeira Sessão-->
                <form class="form-horizontal col-md-6" action="./php/insert.php" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="textarea"></label>
                            <div class="col-md-12">
                                <?php echo ucwords($paidesanto[2]); ?>
                                <!-- Appended Input-->
                                
                                    <label class="col-md-8 control-label" for="appendedtext"></label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input id="appendedtext" name="qlf" class="form-control" placeholder="" required="" type="text">
                                            <span class="input-group-addon">Facebook</span>
                                        </div>
                                        <p class="help-block">Link de Incorporação</p>
                                        <input type="hidden" name="idqlf" value="3">
                                        <a><button name="atualizeQlf" type="submit" class="btn btn-warning">Atualizar</button></a>
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                </form>
                <!-----------------------------------------------------------------------------------------------------------------------><!--Primeira Coluna de Fotos Primeira Sessão-->
                <form class="form-horizontal col-md-6" action="./php/insert.php" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="textarea"></label>
                            <div class="col-md-12">
                                <?php echo ucwords($paidesanto[3]); ?>
                                <!-- Appended Input-->
                                
                                    <label class="col-md-8 control-label" for="appendedtext"></label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input id="appendedtext" name="qlf" class="form-control" placeholder="" required="" type="text">
                                            <span class="input-group-addon">Facebook</span>
                                        </div>
                                        <p class="help-block">Link de Incorporação</p>
                                        <input type="hidden" name="idqlf" value="4">
                                        <a><button name="atualizeQlf" type="submit" class="btn btn-warning">Atualizar</button></a>
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                </form>
                <!-----------------------------------------------------------------------------------------------------------------------><!--Primeira Coluna de Fotos Primeira Sessão-->
                <br><br><br>
                <form class="form-horizontal col-md-6" action="./php/insert.php" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="textarea"></label>
                            <div class="col-md-12">
                                <?php echo ucwords($paidesanto[4]); ?>
                                <!-- Appended Input-->
                                
                                    <label class="col-md-8 control-label" for="appendedtext"></label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input id="appendedtext" name="qlf" class="form-control" placeholder="" required="" type="text">
                                            <span class="input-group-addon">Facebook</span>
                                        </div>
                                        <p class="help-block">Link de Incorporação</p>
                                        <input type="hidden" name="idqlf" value="5">
                                        <a><button name="atualizeQlf" type="submit" class="btn btn-warning">Atualizar</button></a>
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                </form>
                <!----------------------------------------------------------------------------------------------------------------------->






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
