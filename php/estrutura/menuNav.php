<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Centro de Controle do Maison Chic Web App</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Visão Geral</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Atualizações do Site</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="./fotos.php">Atualizar Fotos</a>
                    </li>
                    <li>
                        <a href="./textos.php">Atualizar Textos</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Central do Administrador</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="register.php">Cadastrar Administradores</a>
                    </li>
                    <li>
                        <a href="meusDados.php">Alterar Meus Dados</a>
                    </li>
                    <li>
                        <a href="verAdm.php">Ver Administradores do Site</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Visitar Site</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <!--Botão de Logout-->
            <li class="nav-item">

                <a class="nav-link" data-toggle="modal">

                    <h4 id="saudacao">
                        <!--Esse script sauda o usuario com base na hora. Obs: se não estiver num script externo, você deve coloca-lo dentro da div que irá usar, ou nao vai funcionar.-->
                        <script>
                            var today = new Date();
                            var curHr = today.getHours();
                            var saudacao;

                            if (curHr < 12) {
                                saudacao = "Olá, Bom Dia! ";
                            } else if (curHr < 18) {
                                saudacao = "Oi, Boa Tarde! ";
                            } else {
                                saudacao = "Boa Noite ";
                            }
                            document.getElementById("saudacao").textContent = saudacao;
                        </script>
                        
                        <!--Aqui continuamos com o php, nao é preciso concatenar-->
                        <?php echo ucwords($_SESSION['user_name']);?>
                        <!--Resultado: Bom dia, senhor Tal-->
                    </h4>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <!--Borão de Logout-->
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Sair</a>
            </li>
        </ul>
    </div>
</nav>
