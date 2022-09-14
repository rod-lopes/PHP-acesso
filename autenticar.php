<?php 
@session_start();
require_once("conexao.php");


$usuario = $_POST['email'];
$senha = $_POST['senha'];

$query_con = $pdo->prepare("SELECT * from usuario WHERE email = :email and senha = :senha");
	$query_con->bindValue(":email", $usuario);
	$query_con->bindValue(":senha", $senha);
	$query_con->execute();
	$res_con = $query_con->fetchAll(PDO::FETCH_ASSOC);

	if(@count($res_con) > 0){
		$nivel = $res_con[0]['nivel'];

		$_SESSION['nome_usuario'] = $res_con[0]['nome'];
		$_SESSION['nivel_usuario'] = $res_con[0]['nivel'];
		$_SESSION['id_usuario'] = $res_con[0]['id'];


		if($nivel == 'Administrador'){
			echo "<script language='javascript'>window.location='admin.php'</script>";
		}

		else if ($nivel == 'Usuario'){
			echo "<script language='javascript'>window.location='usuario.php'</script>";
		}
		
	}else{

		echo "<script language='javascript'>window.alert('Dados Incorretos!')</script>";

		echo "<script language='javascript'>window.location='index.php'</script>";
	}

 ?>