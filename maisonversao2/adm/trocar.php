<?php

// Cabeça do documento HTML

@require_once ("./php/header.php");

// Verifica se o usuario esta logado

@require_once ("./php/session.php");

$userdeslogado = userdeslogado();

// MENSAGENS AO USUARIO - O uso do @ serve para ocultar mensagem de aviso do PHP.

echo @$_SESSION['mensagemStatus'];
unset($_SESSION['mensagemStatus']);

// Chama o arquivo que pega as informações no banco
include_once ("./php/verDados.php");

?>



    <body class="bg-dark">
        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header"><strong>Alterar Senha de Acesso</strong></div>
                
                <div class="card-body">

                    <form action="./php/insert.php" method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputName">Senha</label>
                                    <input class="form-control" name="senha" type="password" aria-describedby="nameHelp" placeholder="Minha Senha" required>
                                </div>
                                <!--Botão de Trocar Senha-->
                                <div class="col-md-6">
                                    <label for="exampleInputName">Confirmar Senha</label>
                                    <input class="form-control" name="senha2" type="password" aria-describedby="nameHelp" placeholder="Minha Senha" required>
                                </div>

                            </div>
                        </div>
                                           
                        <input class="btn btn-primary btn-block" type="hidden" name="idgerente" value="<?php
echo perfil('idgerente'); ?>">
                        <a>
                            <button class="btn btn-danger btn-block" name="atualizeSeu" type="submit">Atualizar Senha</button>
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
