<?php include ("conexao.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha' AND ativo = 'S'";

$consulta = mysql_query($sql) or die (mysql_error());

$registros = mysql_num_rows($consulta);

print $registros;

if($registros) {
  header("location: index.php?link=1");
} else {
print "<html>
        <body>
          <p align=\"center\">Verifique o usuário e senha!</p>
          <p align=\"center\"><a href=\"formulario-login.php\">Voltar</p>
        </body>
      </html>
        ";
}

?>