<?php
require_once("conexao.php");

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
        <h2>Acesso em PHP</h2>
        
      </div>
      <form id="form" class="form" method="POST" action="autenticar.php">
        <div class="form-control">
          <label for="email">Insira seu Email</label>
          <input
            type="email"
            name="email"
            placeholder="Digite o seu Email"
          />
         
        </div>
        <div class="form-control">
          <label for="name">Insira sua Senha</label>
          <input
            type="password"
            name="senha"
            placeholder="Digite a sua Senha"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de Erro</small>
          
        </div>

        <button type="submit" name="envia" value="enviar">Entrar</button>
      </form>
      <div class="h5">
        <h5>Exemplo de Acesso</h5>
      </div>
      <div>
      <table class="tabela">
        <tr>
        <th>Usuário</th>
        <th>Administrador</th>
        </tr>
        <tr>
          <td>user@user.com.br</td>
          <td>senha: 1234</td>
        </tr>
        <tr>
          <td>admin@admin.com.br</td>
          <td>senha: 1234</td>
        </tr>
        

      </table>
      </div>
      
    </div>
    <div id="footer">
        <span><?php echo $rodape; ?></span> 
    </div>
    <script
      src="https://kit.fontawesome.com/d09b7fbd45.js"
      crossorigin="anonymous"
    ></script>

  </body>
</html>
