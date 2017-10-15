<?php
    @require_once("./php/gravacaoSucesso.php");     
    @require_once("./php/session.php");    
    @require_once("./php/header.php");
    $userlogado = userlogado();
    
    
    
?>
    

    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login MaisonChic.com.br</div>
                <div class="card-body">

                    <form method="post" action="./php/autentica.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login de Acesso</label>
                            <input class="form-control" name="login" type="text" placeholder="Seu Login" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input class="form-control" name="senha" type="password" placeholder="Senha de Acesso" required>
                        </div>                        
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </form>
                    <div class="text-center">
                        
                        <!--Aqui chamo a variavel de sessao que vai informar que deu erro o login, e depois destroi a sessao-->
                        <?php 
                        if(!empty($_SESSION['statusLogin'])){
                            echo ($_SESSION['statusLogin']);
                            @session_destroy();   
                        }             
                        ?>
                        
                    </div>
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
