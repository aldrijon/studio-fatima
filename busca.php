<?php
//validação de conexao
include('verifica_login.php');
// mysql connection
include("conexao.php");
//Recuperar dados do banco para a presentar para o usuario
$query = "SELECT * FROM `usuario`";

$results = mysqli_query($conexao, $query);
$records = mysqli_num_rows($results);
$msg = "";
if (!empty($_GET['msg'])) {
    $msg = $_GET['msg'];
    $alert_msg = ($msg == "add") ? "Adicionado com sucesso!" : (($msg == "del") ? "Deletado com sucesso!" : "Atualizado com sucesso!");
} else {
    $alert_msg = "";
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca</title>
    <!-- CSS do Bootstrap e CSS customizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>
    <?php
        include_once "include/menu.php";
        ?>
        <div class="container">
    <?php if (!empty($alert_msg)) {?>
            <div class="alert alert-success"><?php echo $alert_msg; ?></div>
    <?php }?>
        <div class="info"></div>
            <table class="table" id="tb1" >
                <thead>
                    <tr>
                    <th scope="col" >usuario_id </th>
                    <th scope="col">usuario</th>
                    <th scope="col">nome</th>
                    <th scope="col">data_cadastro</th>
                    <th scope="col">ação</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
        if (!empty($records)) {
            while ($row = mysqli_fetch_assoc($results)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['usuario_id']; ?></th>
                        <td><?php echo $row['usuario']; ?></td>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['data_cadastro']; ?></td>
                        <td>
                        <a href="/studio-fatima/add.php?usuario_id=<?php echo $row['usuario_id']; ?>" class="btn btn-primary btn-sm" >EDIT</a>
                        <a href="/studio-fatima/delete.php?usuario_id=<?php echo $row['usuario_id']; ?>" class="btn btn-danger btn-sm" onClick="javascript:return confirm('Realmente deseja REMOVER?');" >DELETE</a>
                        </td>
                    </tr>

                <?php
            }   
        }
    ?>



                </tbody>
            </table>
        </div>
        <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>