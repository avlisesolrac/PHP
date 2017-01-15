<?php
include ("conexao-bd-mysql.php");

$opcao				= $_POST["opcao"];
$codigo				= $_POST["id_cliente"];
$nome				= $_POST["nome"];
$endereco			= $_POST["endereco"];
$bairro				= $_POST["bairro"];
$complemento		= $_POST["complemento"];
$cidade				= $_POST["cidade"];
$uf					= $_POST["uf"];
$cep				= $_POST["cep"];
$fone				= $_POST["fone"];
$email				= $_POST["email"];
$sexo				= $_POST["sexo"];
$apelido			= $_POST["apelido"];

if($opcao == "Excluir") {
	mysql_query("DELETE FROM cliente WHERE id_cliente = '$codigo'") or die ("<strong style='color:red;'>Não foi possível excluir!</strong>");
} elseif ($opcao == "Alterar"){
	print "Alterar";
} else {

	$sql = "INSERT INTO cliente (nome, endereco, bairro, complemento, cidade, uf, cep, fone, email, sexo, apelido) VALUES ('$nome', '$endereco',' $bairro', '$complemento',' $cidade', '$uf', '$cep', '$fone', '$email', '$sexo', '$apelido')";

	$query = mysql_query($sql) or die ("Não foi possível incluir os dados!");

	print "<strong style='color:green;'>Dados gravado com sucesso!</strong>";
}

?>