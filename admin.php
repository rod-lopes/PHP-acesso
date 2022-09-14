<?php
@session_start();
require_once("conexao.php");
require_once("verificar-permissao-admin.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;0,900;1,400&display=swap"
      rel="stylesheet"
    />

    <title><?php echo $nome_sistema; ?></title>
  </head>
  <body>
  <div class="imagem">
      <img src="img/logo.png" alt="PHP Acesso">

  </div>
    <div class="container">
      <div class="header">
        <h2>Acesso Administrador</h2>
      </div>
      <form id="form" class="form" method="POST" action="logout.php">    
        <div class="form-control">
          <label for="email">Você acessou como Administrador</label>


          <button type="submit" name="envia" value="enviar">Logout</button>
      </form>      
    </div>
</div>
    <div id="footer">
        <span><?php echo $rodape; ?></span> 
    </div>

    <script
      src="https://kit.fontawesome.com/d09b7fbd45.js"
      crossorigin="anonymous"
    >
</script>

  </body>
</html>
