<?php include ("conexao-bd-mysql.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title>Controle de Alunos</title>
</head>
<body>

<table width="763" height="100" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#ff0000">
	<tr>
		<td colspan="2">
			<img src="../imagens/logo.png" alt="Logo do Index">
		</td>
	</tr>

	<tr>
		<td width="20%">
			<table width="100%" align="center" cellspacing="0" cellpadding="0" bgcolor="#993333">
<!--MENU DE NAVEGAÇÃO-->
				<tr> <td bgcolor="#990000" align="center"><font color="#ffffff"> CADASTRO </td> </tr>
				<tr> <td bgcolor="#ffb3b3"> <a href="index.php?link=1">Clientes</a></td> </tr>
			</table>
		</td>

		<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<?php
						//Receber o link que o usuário clicou no menu
							$link = $_GET["link"];
							$pagina[1] = "home.php";
							$pagina[2] = "form-cliente.php";

							if(!empty($link)) {
								if(file_exists($pagina[$link])) {
									include $pagina[$link];
								} else {
									print "Página não localizada!";
								}
							}

						?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>