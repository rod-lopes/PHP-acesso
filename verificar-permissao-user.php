<?php
@session_start();
$nivel_user = @$_SESSION['nivel_usuario'];
//VERIFICAR PERMISSÃO DO USUÁRIO
if(($nivel_user != 'Usuario') ){

	echo "<script language='javascript'>window.location='index.php'</script>";
} 

 ?>