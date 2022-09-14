<?php
$nivel_user = @$_SESSION['nivel_usuario'];
//VERIFICAR PERMISSÃO DO USUÁRIO
if(($nivel_user != 'Administrador') ){

	echo "<script language='javascript'>window.location='index.php'</script>";
} 

 ?>