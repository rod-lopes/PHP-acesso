<?php 
require_once('config.php');

//VARIAVEIS GLOBAIS
$nome_sistema = "ACESSO PHP";
$email_adm = 'admin@admin.com';
$rodape = 'Desenvolvido por: RODRIGO BASSO LOPES';

date_default_timezone_set('America/Sao_Paulo');	

try {
	$pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch (Exception $e) {
	echo 'Erro ao Conectar com o banco de dados! <p>' .$e;
}

 ?>