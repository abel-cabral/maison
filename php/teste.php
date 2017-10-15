<?php
@require_once './config.php';
@require_once './session.php';
?>



<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Sistema de Login ULTIMATE PHP</title>
    </head>
 
    <body>
         
        <h1>Sistema de Login ULTIMATE PHP</h1><br>
        <?php 
            echo ("Seja Bem-Vinda " . ucwords($_SESSION['user_name']));
        ?>
        
        <a href="./logout.php"><button type="button" class="btn btn-default">Deslogar</button></a>
        
       
    <div class='col-sm-4'><iframe style="border: 0;" src="../index.php" width="100%" height="600px" frameborder="0" scrolling="no"></iframe></div>
    </body>
</html>