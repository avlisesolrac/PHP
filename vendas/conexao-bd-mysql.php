<?php
$host 		= "localhost";
$usuario 	= "root";
$senha 		= "GtU*k101";
$conexao	= mysql_connect($host, $usuario, $senha) or die ("Não foi possível realizar a conexão com o BD!");

mysql_select_db("controle_vendas", $conexao) or die ("Não foi possível encontrar o schema, verifique o SGBD");

?>