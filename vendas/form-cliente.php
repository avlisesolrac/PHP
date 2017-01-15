<?php include("conexao-bd-mysql.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Controle de Alunos</title>
</head>
<body>

<table border="0" align="center" cellspacing="1" cellpadding="0">
	<tr>
		<td bgcolor="#660000">
			<table width="100%" border="1" cellspacing="0" bordercolor="#ff0000">
				<form action="cadastro-cliente.php" method="post">
					<tr>
						<td height="20" align="center" bgcolor="#993300">
							<font size="2" color="#ffffff">
							<strong> CADASTRO DE CLIENTES</strong></font>
						</td>
					</tr>
					<tr>
						<td height="20" bgcolor="#ffffff">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" bordercolor="#ff00ff">
								<tr>
									<td width="14%" align="right"><font size="1" color="#882418"><strong>NOME</strong></font></td>
									<td><input type="text" value="" maxlenght="60" size="68" name="nome"></td>
								</tr>

								<tr>
									<td width="14%" align="right"><font size="1" color="#882418"><strong>ENDEREÇO</strong></font></td>
									<td><input type="text" value="" maxlenght="60" size="68" name="endereco"></td>
								</tr>

								<tr>
									<td width="14%" align="right"><font size="1" color="#882418"><strong>COMPLEMENTO</strong></font></td>
									<td><input type="text" value="" maxlenght="60" size="68" name="complemento"></td>
								</tr>

								<tr>
									<td width="14%" align="right"><font size="1" color="#882418"><strong>BAIRRO</strong></font></td>
									<td><input type="text" value="" maxlenght="60" size="68" name="bairro"></td>
								</tr>

								<tr>
									<td colspan="2" align="right">
										<table width="100%" border="0">
											<tr>
												<td align="right" width="16%"><font size="1" color="#993333"><strong>CIDADE</strong></font></td>
												<td width="36%"><input type="text" maxlength="40" name="cidade"></td>

												<td align="right" width="8%"><font size="1" color="#993333"><strong>CEP</strong></font></td>
												<td><input type="text" maxlength="40" name="cep"></td>

												<td align="right" width="8%"><font size="1" color="#993333"><strong>ESTADO</strong></font></td>
												<td>
													<select name="uf">
														<option value="AC">AC</option>
														<option value="AL">AL</option>
														<option value="AM">AM</option>
														<option value="AP">AP</option>
														<option value="BA">BA</option>
														<option value="CE">CE</option>
														<option value="DF">DF</option>
														<option value="ES">ES</option>
														<option value="GO">GO</option>
														<option value="MA">MA</option>
														<option value="MG">MG</option>
														<option value="MS">MS</option>
														<option value="MT">MT</option>
														<option value="PA">PA</option>
														<option value="PB">PB</option>
														<option value="PE">PE</option>
														<option value="PI">PI</option>
														<option value="PR">PR</option>
														<option value="RJ">RJ</option>
														<option value="RN">RN</option>
														<option value="RS">RS</option>
														<option value="RR">RR</option>
														<option value="RO">RO</option>
														<option value="RN">RN</option>
														<option value="SC">SC</option>
														<option value="SE">SE</option>
														<option value="SP" selected>SP</option>
														<option value="TO">TO</option>
													</select>
												</td>
											</tr>
										</table>
									</td>
								</tr>

								<tr>
									<td colspan="2" align="right">
										<table width="100%" border="0">
											<tr>
												<td width="16%" align="right"><font size="1" color="#993333"><strong>FONE</strong></font></td>
												<td width="22%"><input type="text" size="15" name="fone"></td>

												<td width="11%" align="right"><font size="1" color="#993333"><strong>SEXO</strong></font></td>
												<td width="19%">
													<select name="sexo">
														<option value="M" checked> Masculino </option>
														<option value="M"> Feminino </option>
													</select>
												</td>

												<td width="16%" align="right"><font size="1" color="#993333"><strong>APELIDO</strong></font></td>
												<td width="22%"><input type="text" size="20" name="apelido"></td>
											</tr>
										</table>
									</td>
								</tr>

								<tr>
									<td width="14%" align="right"><font size="1" color="#882418"><strong>E-MAIL:</strong></font></td>
									<td><input type="text" value="" maxlenght="60" size="68" name="email"></td>
								</tr>

								<tr>
									<table cellspacing="5">
										<tr>
											<td height="21"><input type="image" src="../imagens/bt_incluir.gif" height="20" border="0"></td>

											<td><a href="index.php?link=3&opcao=Consultar"><img src="../imagens/bt_consultar.gif" width="100" height="20" border="0"></a></td>

											<td><a href="index.php?link=3&opcao=Alterar"><img src="../imagens/bt_alterar.gif" width="100" height="20" border="0"></a></td>

											<td><a href="index.php?link=3&opcao=Excluir"><img src="../imagens/bt_excluir.gif" width="100" height="20" border="0"></a></td>
										</tr>
									</table>
								</tr>

							</table>
						</td>
					</tr>
				</form>
			</table>
			
		</td>
	</tr>
</table>

</body>
</html>