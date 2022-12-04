
<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="painel.php" class="navbar-brand">
            <span>Studio Fatima Cardoso</span>
        </a>

        <div class="collapse navbar-collapse" id="menu">
            <div class="navbar-header">
                <ul class="navbar-nav">
                    <li><a href="painel.php">Home</a></li>
                    <li><a href="busca.php">Buscar</a></li>
                    <li><a href="cadastro.php">Cadastrar</a></li>
                    <li><a href="logout.php">logout:<?php echo $_SESSION['nome'];?></a></li>
                    
                </ul>
            </div>
        </div> <!-- fecha /menu -->
    </div> <!-- fecha /container -->
</nav> <!-- fecha /barra de navegação -->