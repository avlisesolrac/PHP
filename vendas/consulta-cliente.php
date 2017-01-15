<?php include("conexao-bd-mysql.php"); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Consulta de Clientes</title>
	</head>
	<body>
		
		<table width="100%" border="0" cellspacing="0" cellpading="0">
			<tr align="center">
				<td bgcolor="#fdffe8"><font color="#660000" size="4" face="Arial, Helvetica, sans-serif"><strong>:: <? echo $opcao; ?> Cliente </strong></font></td>
			</tr>

			<tr align="center">
				<td bgcolor="#fdffe8">
					<table cellspacing="0">
						<form action="" method="get">
							
							<tr>
								<td width="45"><font size="2"><strong>Apelido:</strong></font></td>
								<td width="155"><input type="text" id="apelido" name="apelido"></td>
								<td width="72"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nome:</strong></font></td>
								<td width="148"><input type="text" id="nome2" size="40" name="nome"></td>
								<td width="273"><input type="submit" name="Submit" value="Procurar">
									<input type="hidden" id="opcao" value="<? echo $opcao; ?>" name="opcao">
									<input type="hidden" id="link" value="3" name="link">
								</td>
							</tr>
						</form>
					</table>
				</td>				
			</tr>

			<td bgcolor="#fdffe8">
				<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#660000">
					<tr bgcolor="#993300" align="center">
						<td width="40%" height="20"><strong><font size="2" color="#ffffff">NOME</font></strong></td>
						<td width="35%" height="20" bgcolor="#993300"><strong><font size="2" color="#ffffff">Email</font></strong></td>
						<td width="19%" height="20"><strong><font size="2" color="#ffffff">Apelido</font></strong></td>
						<td width="6%" height="20"><strong><font size="2" color="#ffffff">Opção</font></strong></td>
					</tr>
					
					<?php
						if($apelido != "") {
							$sql = "SELECT * FROM cliente WHERE apelido LIKE '$apelido%'";
						} elseif ($nome != "") {
							$sql = "SELECT * FROM cliente WHERE nome LIKE '$nome%'";
						} else {
							$sql = "SELECT * FROM cliente limit 0,10";
						}

						$query = mysql_query($sql);
						$linha = 0;

						while(linha < mysql_num_rows($query)) {
							print "
								<tr bgcolor=\"#ffffff\">
								<td><font size='2' face='verdana, arial, helvetica, sans-serif'><?= mysql_result($query, $linha, nome); ?></font></td>
								<td><font size='2' face='verdana, arial, helvetica, sans-serif'><?= mysql_result($query, $linha, email); ?></font></td>
								<td><font size='2' face='verdana, arial, helvetica, sans-serif'><?= mysql_result($query, $linha, apelido); ?></font></td>

								<td><div align='center'><font size='2' face='verdana, arial, helvetica, sans-serif'>
									<? if ($opcao == 'Consultar') {
											$pagina = 'index.php?link=4';
										} else {
											$pagina = 'index.php?link=2';
										}?>
								</div></td>
							";
						}
					?>

				</table>
			</td>
		</table>

	</body>
</html>