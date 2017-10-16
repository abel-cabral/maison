<?php
session_start();
//Com esse if apenas  id 29 maison podera fazer qualquel alteração/inclusao no banco
if ($_SESSION['user_id'] != 29)
{
    $_SESSION['mensagemStatus'] = "<script>alert('Apenas o Administrador Maison pode efetuar essas alterações');</script>";
    header("location: ../index.php");
}
else
{

    @require_once ("./config.php");
    $pdo = conectar();

    // Estava com problemas para unificar essas funções, assim como solução peguei todas e coloquei em um lugar só e usando if e elseif consigui organizar.
    @$cadastre = $_POST['cadastre'];
    @$atualize = $_POST['atualize'];
    @$exclua = $_GET['exclua'];

    //Essas variaveis recebem o valor dos campos do fomulario, usando seu name como guia.
    @$login = strtolower($_POST['login']);
    @$senha = crypt($_POST['senha'], "somesalt");
    @$adm = ucwords($_POST['adm']);

    if (isset($cadastre))
    {

        // Prepara o SQL e seus paramentros
        $stmt = $pdo->prepare("INSERT INTO gerente(login, adm, senha) VALUES(:login, :adm, :senha)");
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':adm', $adm);
        $stmt->bindParam(':senha', $senha);

        // Aqui Gravamos no Banco caso de tudo certo vamos para login, caso nao ficamos em cadastro.
        try
        {
            $stmt->execute();
            $_SESSION['mensagemStatus'] = "<script>alert('Cadastro Realizado com Sucesso.');</script>";
            header("Location: ../index.php");
        }

        catch(Exception $e)
        {
            $_SESSION['mensagemStatus'] = "Opa! Houve algum erro, tente de novo.";
            header("Location: ../register.php");
        }
    }
    elseif (isset($atualize))
    {
        //Essa Variavel só existem em atualização ou exclusão.
        $idgerente = $_POST["idgerente"];

        //Com essa variavel informo o que quero buscar no banco de dados
        $sql_msg_contatos = "UPDATE gerente SET login = :login, adm = :adm, senha = :senha WHERE idgerente = :idgerente";
        //Aqui de fato eu conecto e verifico se elas existem
        $insert_msg_contato = $pdo->prepare($sql_msg_contatos);

        //Aqui eu mostro de que variavel vem as informações do php e para onde vao no sql
        $insert_msg_contato->bindParam(':login', $login);
        $insert_msg_contato->bindParam(':adm', $adm);
        $insert_msg_contato->bindParam(':senha', $senha);
        $insert_msg_contato->bindParam(':idgerente', $idgerente, PDO::PARAM_INT);

        //basicamente aqui eu faço o ->execute() que de fato realiza a operação
        if ($insert_msg_contato->execute())
        {

            $_SESSION['mensagemStatus'] = "<script>alert('Cadastro Atualizado');</script>";
            header("Location: ../index.php");
        }
        else
        {
            echo "Erro ao cadastrar";
            $_SESSION['mensagemStatus'] = "Opa! Houve algum erro, tente de novo.";
            header("Location: ../register.php");
        }

    }
    elseif (isset($exclua))
    {
        //Essa Variavel só existem em atualização ou exclusão estou a puxando pela barra de navegação
        $idgerente = $_GET["idgerente"];

        //Com essa variavel informo o que quero buscar no banco de dados
        $sql_msg_contatos = "DELETE FROM gerente WHERE idgerente = :idgerente";
        //Aqui de fato eu conecto e verifico se elas existem
        $insert_msg_contato = $pdo->prepare($sql_msg_contatos);
        $insert_msg_contato->bindParam(':idgerente', $idgerente, PDO::PARAM_INT);

        if ($insert_msg_contato->execute())
        {

            $_SESSION['mensagemStatus'] = "<script>alert('Deletado Com Sucesso');</script>";
            header("Location: ../index.php");
        }
        else
        {
            echo "Erro ao cadastrar";
            $_SESSION['mensagemStatus'] = "Opa! Houve algum erro, tente de novo.";
            header("Location: ../index.php");
        }

    }
}
?>
