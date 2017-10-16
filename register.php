<?php
@require_once("./php/header.php");
@require_once("./php/session.php");
$userdeslogado = userdeslogado();

@require_once("./php/config.php");
//Verifica se o 

if($_SESSION['user_id'] != 29){
    $_SESSION['mensagemStatus'] = "<script>alert('Você não possui privilégios para executar esta ação.');</script>";    
    header ("location: ./index.php");     
}
?>

    <body class="bg-dark">
        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Cadastro de Administradores</div>
                <div class="card-body">

                    <form action="./php/insert.php" method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputName">Login Desejado</label>
                                    <input class="form-control" name="login" type="text" aria-describedby="nameHelp" placeholder="Login de Acesso" required>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Administrador</label>
                            <input class="form-control" name="adm" type="text" aria-describedby="emailHelp" placeholder="Nome Completo" required>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input class="form-control" name="senha" type="password" placeholder="Senha Desejada" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleConfirmPassword">Confirmar Senha</label>
                                    <input class="form-control" type="password" placeholder="Repetir Senha" required>
                                </div>
                            </div>
                        </div>                        
                        <button class="btn btn-primary btn-block" name="cadastre" value="cadastre" type="submit">Efetuar Cadastro</button>
                    </form>                

                        <!-- <div class="text-center">
                    <a class="d-block small mt-3" href="login.php">Login Page</a>
                    <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
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
