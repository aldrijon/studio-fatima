<?php
if (!empty($_GET['usuario_id'])) {
    // require connection
    require_once 'conexao.php';  

    $usuario_id = $_GET['usuario_id'];
    $del_query = "DELETE FROM `usuario` WHERE usuario_id = '" . $usuario_id . "'";
    $result = mysqli_query($conexao, $del_query);
    if ($result) {
        header('location:/studio-fatima/busca.php?msg=del');
    }
}
