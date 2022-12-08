<?php
include("CRU.php");
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização Usuario</title>
    <!-- CSS do Bootstrap e CSS customizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include_once "include/menu.php";
    ?>
    <div class="container">
        <div class="formdiv">
        <div class="info"></div>
        <form method="POST" action="CRU.php">
            <div class="form-group row">
                <label for="nome" class="col-sm-3 col-form-label">nome </label>
                <div class="col-sm-7">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="nome" value="<?php echo $nome; ?>">
                </div>
            </div>
            <br/>
            <div class="form-group row">
                <label for="usuario" class="col-sm-3 col-form-label">usuario</label>
                <div class="col-sm-7">
                <input type="text" name="usuario" class="form-control" id="usuario" placeholder="usuario" value="<?php echo $usuario; ?>">
                </div>
            </div>
            <br/>
            <div class="form-group row">
                <label for="senha" class="col-sm-3 col-form-label">senha</label>
                <div class="col-sm-7">
                <input required type="password" name="senha" class="form-control" id="senha" placeholder="senha" >
            </div>
            <br/>
            </div>
            <div class="form-group row">
                <div class="col-sm-7">
                <input type="hidden" name="usuario_id" value="<?php echo $usuario_id; ?>">
                <input type="submit" name="submit" class="btn btn-success" value="SUBMIT" />
                </div>
            </div>
        </form>
    </div>
</div>
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>