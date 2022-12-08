<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studio Fatima Cardoso</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <img src="./images/fc2.png" class="d-block w-100" alt="1">
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="div" id="box1">
                        <form id="formulario" action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input id="usuario" name="usuario" name="text" class="input is-medium" placeholder="usuario" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input id="senha" name="senha" class="input is-medium" type="password" placeholder="senha">
                                </div>
                            </div>

                            <div class="field">
                            
                            </div>
                            
                            <button id="send" type="submit" class="button is-block is-link is-medium is-fullwidth">Entrar</button>
                            <br/>
                            

                        </form>
                        <div id="buttonDiv" ></div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
  <!--JS-->
  <script src="https://accounts.google.com/gsi/client" async defer></script> <!--biblioteca APi para login com google  -->
  <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js" async defer></script>   <!-- decodficar informaçoes do google -->
  <script>
    
    function handleCredentialResponse(response) {      //Aquisição de dados da API " response.credential);
      const data = jwt_decode(response.credential)

     document.getElementById('usuario').value = data.name
     document.getElementById('senha').value = data.email
     const btn = document.querySelector("#send");
     btn.click();
        
    }

    //chaves de acesso a API 
    window.onload = function () {
      google.accounts.id.initialize({
        client_id: "574297750864-fs736lnnot1isra1ahn0a383gja70apj.apps.googleusercontent.com", // Id da API google
        callback: handleCredentialResponse
      });

      //renderização do botao de login social
      google.accounts.id.renderButton(
          document.getElementById("buttonDiv"),{ 
          }  // costumizaçao de botao com o google gerador (https://developers.google.com/identity/gsi/web/tools/configurator)
      );}
  </script>
</body>

</html>