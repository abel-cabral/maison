<?php
session_start();
//Com esse if apenas  id 29 maison podera fazer qualquel alteração/inclusao no banco

@require_once("./config.php");
$pdo = conectar();

// Estava com problemas para unificar essas funções, assim como solução peguei todas e coloquei em um lugar só e usando if e elseif consigui organizar.
@$cadastre = $_POST['cadastre'];
@$atualize = $_POST['atualize'];
@$atualizeSeu = $_POST['atualizeSeu'];
@$exclua = $_GET['exclua'];
@$atualizeImg = $_POST['atualizeImg'];
@$atualizeTxt = $_POST['atualizeTxt'];
@$atualizeQlf = $_POST['atualizeQlf'];



//Essas variaveis recebem o valor dos campos do fomulario, usando seu name como guia.
@$login = strtolower($_POST['login']);
@$senha = crypt($_POST['senha'], "somesalt");
@$senha2 = crypt($_POST['senha2'], "somesalt");
@$adm = ucwords($_POST['adm']);


if (isset($cadastre)) {
    if ($_SESSION['user_id'] != 29) {
        $_SESSION['mensagemStatus'] = "<script>alert('Apenas o Administrador Maison pode efetuar essas alterações');</script>";
        header("location: ../index.php");
    }
    //Aqui verifico se as senhas são identicas
    elseif ($senha != $senha2) {
        $_SESSION['mensagemStatus'] = "<script>alert('Senhas Divergentes');</script>";
        header("location: ../register.php");
        exit;
    } else {
        
        
        // Prepara o SQL e seus paramentros
        $stmt = $pdo->prepare("INSERT INTO gerente(login, adm, senha) VALUES(:login, :adm, :senha)");
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':adm', $adm);
        $stmt->bindParam(':senha', $senha);
        
        // Aqui Gravamos no Banco caso de tudo certo vamos para login, caso nao ficamos em cadastro.
        try {
            $stmt->execute();
            $_SESSION['mensagemStatus'] = "<script>alert('Cadastro Realizado com Sucesso.');</script>";
            header("Location: ../index.php");
        }
        
        catch (Exception $e) {
            $_SESSION['mensagemStatus'] = "Opa! Houve algum erro, tente de novo.";
            header("Location: ../register.php");
        }
    }
}
//------------------------------------------------------------------------------------------
elseif (isset($atualize)) {
    if ($_SESSION['user_id'] != 29) {
        $_SESSION['mensagemStatus'] = "<script>alert('Apenas o Administrador Maison pode efetuar essas alterações');</script>";
        header("location: ../index.php");
    }
        else {
        
        //Essa Variavel só existem em atualização ou exclusão.
        $idgerente = $_POST["idgerente"];
        
        //Com essa variavel informo o que quero buscar no banco de dados
        $sql_msg_contatos   = "UPDATE gerente SET login = :login, adm = :adm WHERE idgerente = :idgerente";
        //Aqui de fato eu conecto e verifico se elas existem
        $insert_msg_contato = $pdo->prepare($sql_msg_contatos);
        
        //Aqui eu mostro de que variavel vem as informações do php e para onde vao no sql
        $insert_msg_contato->bindParam(':login', $login);
        $insert_msg_contato->bindParam(':adm', $adm);        
        $insert_msg_contato->bindParam(':idgerente', $idgerente, PDO::PARAM_INT);
        
        //basicamente aqui eu faço o ->execute() que de fato realiza a operação
        if ($insert_msg_contato->execute()) {
            
            $_SESSION['mensagemStatus'] = "<script>alert('Cadastro Atualizado');</script>";
            header("Location: ../verAdm.php");
        } else {
            echo "Erro ao cadastrar";
            $_SESSION['mensagemStatus'] = "Opa! Houve algum erro, tente de novo.";
            header("Location: ../register.php");
        }
    }
}
//------------------------------------------------------------------------------------------
    elseif (isset($atualizeSeu)) {
    if ($_SESSION['user_id'] != $_SESSION['user_id']) {
        $_SESSION['mensagemStatus'] = "<script>alert('Apenas o Administrador Maison pode efetuar essas alterações');</script>";
        header("location: ../index.php");
    }
    //Aqui verifico se as senhas são identicas
    elseif ($senha !== $senha2) {
        $_SESSION['mensagemStatus'] = "<script>alert('Senhas Divergentes');</script>";
        header("location: ../trocar.php");
        exit;
    }
    
    else {
        
        //Essa Variavel só existem em atualização ou exclusão.
        $idgerente = $_POST["idgerente"];
        
        //Com essa variavel informo o que quero buscar no banco de dados
             
        //Aqui estamos utilizando if/else para aproveitarmos a função para gravar tanto senha quanto nick
        if(!empty($login)){
        $sql_msg_contatos   = "UPDATE gerente SET login = :login, adm = :adm WHERE idgerente = :idgerente";
        //Aqui de fato eu conecto e verifico se elas existem
        $insert_msg_contato = $pdo->prepare($sql_msg_contatos);        
        //Aqui eu mostro de que variavel vem as informações do php e para onde vao no sql
        $insert_msg_contato->bindParam(':login', $login);
        $insert_msg_contato->bindParam(':adm', $adm); 
            
        }else{
            $sql_msg_contatos   = "UPDATE gerente SET senha = :senha WHERE idgerente = :idgerente";
            //Aqui de fato eu conecto e verifico se elas existem
            $insert_msg_contato = $pdo->prepare($sql_msg_contatos);   
            $insert_msg_contato->bindParam(':senha', $senha);
            
            
        }
        $insert_msg_contato->bindParam(':idgerente', $idgerente, PDO::PARAM_INT);
        
        //basicamente aqui eu faço o ->execute() que de fato realiza a operação
        if ($insert_msg_contato->execute()) {
            
            $_SESSION['mensagemStatus'] = "<script>alert('Dados Atualizados');</script>";
            header("Location: ../index.php");
        } else {
            echo "Erro ao cadastrar";
            $_SESSION['mensagemStatus'] = "Opa! Houve algum erro, tente de novo.";
            header("Location: ../register.php");
        } 
    }
}
//------------------------------------------------------------------------------------------    
    elseif (isset($exclua)) {
    if ($_SESSION['user_id'] != 29) {
        $_SESSION['mensagemStatus'] = "<script>alert('Apenas o Administrador Maison pode efetuar essas alterações');</script>";
        header("location: ../index.php");
    }
    
    else {
        
        //Essa Variavel só existem em atualização ou exclusão estou a puxando pela barra de navegação
        $idgerente = $_GET["idgerente"];
        
        //Aqui evito que ADM Maison apague a si proprio
        if ($idgerente == 29) {
            $_SESSION['mensagemStatus'] = "<script>alert('Essa Conta Não Pode Ser Apagada :/');</script>";
            header("location: ../verAdm.php");
            exit;
        }
        
        //Com essa variavel informo o que quero buscar no banco de dados
        $sql_msg_contatos   = "DELETE FROM gerente WHERE idgerente = :idgerente";
        //Aqui de fato eu conecto e verifico se elas existem
        $insert_msg_contato = $pdo->prepare($sql_msg_contatos);
        $insert_msg_contato->bindParam(':idgerente', $idgerente, PDO::PARAM_INT);
        
        if ($insert_msg_contato->execute()) {
            
            $_SESSION['mensagemStatus'] = "<script>alert('Deletado Com Sucesso');</script>";
            header("Location: ../verAdm.php");
        } else {
            echo "Erro ao cadastrar";
            $_SESSION['mensagemStatus'] = "Opa! Houve algum erro, tente de novo.";
            header("Location: ../verAdm.php");
        }
    }
    
}
//------------------------------------------------------------------------------------------
    elseif (isset($atualizeImg)) {
    //Essas Variaveis aqui recebem o URL e ID das imagens
    $idimg = $_POST['idimg'];
    $url   = $_POST['url'];
    
    //Com essa variavel informo o que quero buscar no banco de dados
    $sql_msg_contatos   = "UPDATE img SET url = :url WHERE idimg = :idimg";
    //Aqui de fato eu conecto e verifico se elas existem
    $insert_msg_contato = $pdo->prepare($sql_msg_contatos);
    
    //Aqui eu mostro de que variavel vem as informações do php e para onde vao no sql
    $insert_msg_contato->bindParam(':url', $url);
    $insert_msg_contato->bindParam(':idimg', $idimg, PDO::PARAM_INT);
    
    //basicamente aqui eu faço o ->execute() que de fato realiza a operação
    if ($insert_msg_contato->execute()) {
        
        $_SESSION['mensagemStatus'] = "<script>alert('Atualizado com Sucesso!');</script>";
        header("Location: ../fotos.php");
    } else {
        echo "Erro ao cadastrar";
        $_SESSION['mensagemStatus'] = "Opa! Houve algum erro, tente de novo.";
        header("Location: ../fotos.php");
    }
    
}
//------------------------------------------------------------------------------------------
    elseif (isset($atualizeTxt)) {
    //Essas Variaveis aqui recebem o URL e ID das imagens
    $idtxt = $_POST['idtxt'];
    $txt   = $_POST['txt'];
    
    //Com essa variavel informo o que quero buscar no banco de dados
    $sql_msg_contatos   = "UPDATE txt SET txt = :txt WHERE idtxt = :idtxt";
    //Aqui de fato eu conecto e verifico se elas existem
    $insert_msg_contato = $pdo->prepare($sql_msg_contatos);
    
    //Aqui eu mostro de que variavel vem as informações do php e para onde vao no sql
    $insert_msg_contato->bindParam(':txt', $txt);
    $insert_msg_contato->bindParam(':idtxt', $idtxt, PDO::PARAM_INT);
    
    //basicamente aqui eu faço o ->execute() que de fato realiza a operação
    if ($insert_msg_contato->execute()) {
        
        $_SESSION['mensagemStatus'] = "<script>alert('Atualizado com Sucesso!');</script>";
        header("Location: ../textos.php");
    } else {
        echo "Erro ao cadastrar";
        $_SESSION['mensagemStatus'] = "Opa! Houve algum erro, tente de novo.";
        header("Location: ../textos.php");
    }
}
//------------------------------------------------------------------------------------------
    elseif (isset($atualizeQlf)) {
    //Essas Variaveis aqui recebem o URL e ID das imagens
    $idqlf = $_POST['idqlf'];
    $qlf   = $_POST['qlf'];
    
    //Com essa variavel informo o que quero buscar no banco de dados
    $sql_msg_contatos   = "UPDATE qlf SET qlf = :qlf WHERE idqlf = :idqlf";
    //Aqui de fato eu conecto e verifico se elas existem
    $insert_msg_contato = $pdo->prepare($sql_msg_contatos);
    
    //Aqui eu mostro de que variavel vem as informações do php e para onde vao no sql
    $insert_msg_contato->bindParam(':qlf', $qlf);
    $insert_msg_contato->bindParam(':idqlf', $idqlf, PDO::PARAM_INT);
    
    //basicamente aqui eu faço o ->execute() que de fato realiza a operação
    if ($insert_msg_contato->execute()) {
        
        $_SESSION['mensagemStatus'] = "<script>alert('Atualizado com Sucesso!');</script>";
        header("Location: ../qualificacao.php");
    } else {
        echo "Erro ao cadastrar";
        $_SESSION['mensagemStatus'] = "Opa! Houve algum erro, tente de novo.";
        header("Location: ../qualificacao.php");
    }
}

?>