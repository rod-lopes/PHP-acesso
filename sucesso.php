<?php

$nome = $_POST['nome'];

//Transforma a string em maiúscula
$nome = strtoupper($nome);
$nome = mb_strtoupper ($nome,"utf-8" );

$nome = explode(" ", $nome);


//Deletando os conectores
$key = array_search('DE', $nome);
if($key!==false){
    unset($nome[$key]);
}

$key2 = array_search('DA', $nome);
if($key2!==false){
    unset($nome[$key2]);
}

$key3 = array_search('DAS', $nome);
if($key3!==false){
    unset($nome[$key3]);
}

$key4 = array_search('DOS', $nome);
if($key4!==false){
    unset($nome[$key4]);
}

$key5 = array_search('DO', $nome);
if($key5!==false){
    unset($nome[$key5]);
}

$key6 = array_search('E', $nome);
if($key6!==false){
    unset($nome[$key6]);
}

//Coletando o ultimo valor do array
$ultimo = end($nome);
$tamanho = count($nome);
$contar_palavra = 1;

//Apagando o ultimo valor do array
$chave = array_search($ultimo, $nome);
if($chave!==false){
    unset($nome[$chave]);
}

function iniciais($str){
  $pos = 0;
  $saida = '';
  while(($pos = strpos($str, ' ', $pos)) !== false ){
      if(isset($str[$pos +1]) && $str[$pos +1] != ' '){
          $saida .= substr($str, $pos +1, 1);
      }   
      $pos++;
  }
  return $str[0]. $saida;
}

$erro = array();
if(empty($nome))
  $erro[] = "Preencha o nome do Colaborador.";

$ultimo = $ultimo . ', '


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

    <title>Formulário - Crachá</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h2>IDENTIFICAÇÃO</h2>
      </div>
      <form id="form" class="form" action="index.php">
        <div class="form-control">
        
    <img src="user.png"  height="100" width="100"/><br>

        <div>
          <label for="name" class="nome"><?php echo $ultimo;?> <?php foreach($nome as $item){
    $nomeFinal = print_r(iniciais($item).". ");
}; ?></label>
</div>

          
          
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <?php if(isset($erro) && count($erro) > 0) {
          ?>
          <small>Mensagem de Erro</small>
          <?php foreach($erro as $e) { echo "$e<br>"; } ?>
          <?php
        }
        ?>
        </div>

        <img class="imagem" src="logo.png" alt="ModalGR" />
        <button type="submit">Voltar</button>
      </form>
    </div>
    <script
      src="https://kit.fontawesome.com/d09b7fbd45.js"
      crossorigin="anonymous"
    ></script>    
  </body>
</html>
