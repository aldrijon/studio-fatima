<?php
    require_once 'conexao.php';     

    if (isset($_POST['submit']) && $_POST['submit'] != '') {          
        $usuario  = (!empty($_POST['usuario'])) ? $_POST['usuario'] : '';
        $nome = (!empty($_POST['nome'])) ? $_POST['nome'] : '';
        $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
        $usuario_id = (!empty($_POST['usuario_id'])) ? $_POST['usuario_id'] : '';
        

        if (!empty($usuario_id)) {
            //  ATUALIZAR usuario
            $usuario_query = "UPDATE `usuario` SET usuario ='" . $usuario  . "',nome='" . $nome . "',senha= '" . $senha ."' WHERE usuario_id ='" . $usuario_id . "'";
            $msg = "update";
        } else {
            // CRIAR usuaro
            $usuario_query = "INSERT INTO `usuario` (usuario ,nome, senha) VALUES ('" . $usuario  . "',  '" . $nome . "', '" . $senha . "')";
            $msg = "add";
        }
        //enviando resultado para o banco
        $result = mysqli_query($conexao, $usuario_query); 

        if ($result) {
            //redirecionando para pagina principal 
            header('location:/studio-fatima/busca.php?msg=' . $msg);            
        }
        //fechando conexao com o banco
        $conexao->close();         
    }

    //pegando dados para preencer se for necessario atualizar
    if (isset($_GET['usuario_id']) && $_GET['usuario_id'] != '') {

        

        $usuario_id = $_GET['usuario_id'];
        $usuario_query = "SELECT * FROM `usuario` WHERE usuario_id='" . $usuario_id . "'";
        $stu_res = mysqli_query($conexao, $usuario_query);
        $results = mysqli_fetch_row($stu_res);  
        $nome = $results[3];
        $usuario  = $results[1];
        

    } else {
        $nome = "";
        $usuario  = "";    
        $senha = "";
        $usuario_id = "";
    }
    $conexao->close();
?>