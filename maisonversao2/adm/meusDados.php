<?php

// Cabeça do documento HTML

@require_once ("./php/header.php");

// Verifica se o usuario esta logado

@require_once ("./php/session.php");

$userdeslogado = userdeslogado();

// chama as configurações com o banco de dados

@require_once ("./php/config.php");

// MENSAGENS AO USUARIO - O uso do @ serve para ocultar mensagem de aviso do PHP.

echo @$_SESSION['mensagemStatus'];
unset($_SESSION['mensagemStatus']);

// Chama o arquivo que pega as informações no banco
include_once ("./php/verDados.php");

?>



    <body class="bg-dark">
        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Editar Meus Dados</div>
                <div class="card-body">

                    <form action="./php/insert.php" method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputName">Login de Acesso</label>
                                    <input class="form-control" name="login" type="text" aria-describedby="nameHelp" placeholder="<?php
echo perfil('login'); ?>" required>
                                </div>
                                <!--Botão de Trocar Senha-->
                                <div class="col-md-6">
                                    <label>Minha Senha</label><br>
                                    <button onClick="parent.location='./trocar.php'" class="btn btn-danger btn-block">Mudar Senha</button>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Administrador</label>
                            <input class="form-control" name="adm" type="text" aria-describedby="emailHelp" placeholder="<?php
echo perfil('adm'); ?>" required>
                        </div>                       
                        <input class="btn btn-primary btn-block" type="hidden" name="idgerente" value="<?php
echo perfil('idgerente'); ?>">
                        <a>
                            <input class="btn btn-primary btn-block danger" name="atualizeSeu" type="submit" value="Atualizar">
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
