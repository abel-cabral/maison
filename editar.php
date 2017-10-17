<?php
//Cabeça do documento HTML
@require_once("./php/header.php");
//VErifica se o usuario esta logado
@require_once("./php/session.php");
$userdeslogado = userdeslogado();

//chama as configurações com o banco de dados
@require_once("./php/config.php");

//Com esse if apenas  id 29 maison podera fazer qualquel alteração/inclusao no banco
if($_SESSION['user_id'] != 29){
    $_SESSION['mensagemStatus'] = "<script>alert('Apenas o Administrador Maison pode efetuar essas alterações');</script>";    
    header ("location: ./index.php");     
}


  // pega o ID da URL
$idgerente = isset($_GET['idgerente']) ? (int) $_GET['idgerente'] : null;

//Valida a variavel da URL
if (empty($idgerente)){
	echo "ID para alteração não definido";
    exit;
}

$pdo = conectar();
$sql_msg_contato = "SELECT idgerente, login, adm, senha FROM gerente WHERE idgerente='$idgerente'";
$result_msg_contato = $pdo->prepare($sql_msg_contato);
$result_msg_contato->bindParam(':idgerente', $idgerente, PDO::PARAM_INT);

$result_msg_contato->execute();

$resultado_msg_contato = $result_msg_contato->fetch(PDO::FETCH_ASSOC);

if(!is_array($resultado_msg_contato)){
	echo "Nenhum contato encontrado";
    exit;	
}
?>



    <body class="bg-dark">
        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Editar Registro de Administradores</div>
                <div class="card-body">

                    <form action="./php/insert.php" method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputName">Login de Acesso</label>
                                    <input class="form-control" name="login" type="text" aria-describedby="nameHelp" value="<?php echo $resultado_msg_contato['login'];?>" required>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Administrador</label>
                            <input class="form-control" name="adm" type="text" aria-describedby="emailHelp" value="<?php echo $resultado_msg_contato['adm'];?>" required>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input class="form-control" id="senha" name="senha" type="password" value="<?php echo $resultado_msg_contato['senha'];?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleConfirmPassword">Confirmar Senha</label>
                                    <input class="form-control" name="senha2" type="password" value="<?php echo $resultado_msg_contato['senha'];?>" required>

                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary btn-block" type="hidden" name="idgerente" value="<?php echo $resultado_msg_contato['idgerente'];?>">
                        <a>
                            <input class="btn btn-primary btn-block danger" name="atualize" type="submit" value="Atualizar">
                        </a>
                    </form>

                    <!-- <div class="text-center">
                    <a class="d-block small mt-3" href="login.php">Login Page</a>
                    <a class="d-block small" href="meusDados.php">Forgot Password?</a>
                </div> -->
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>

    </html>
