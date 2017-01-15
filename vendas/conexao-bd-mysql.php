<?php
$host 		= "localhost";
$usuario 	= "root";
$senha 	= "GtU*k101";
$conexao	= mysql_connect($host, $usuario, $senha) or die ("<strong style='color:red;'>Não foi possível realizar a conexão com o BD!</strong>");

mysql_select_db("controle_vendas", $conexao) or die ("<strong style='color:red;'>Não foi possível encontrar o schema, verifique o nome do banco de dados!</strong>");
?>