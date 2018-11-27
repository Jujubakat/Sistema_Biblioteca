<!DOCTYPE html>
<html>
	<body class="main-cadastrar">

		<div style="margin-top: 10px;" class="container-fluid">

			<h1><i class="fab fa-algolia"></i> Alugar</h1>
			<div id="divMensagem"></div>
			<div class="container">

				<?php
					require_once("model/Connection.php");

					$connection = new Connection();
        			$conn = $connection->getConn();

        			if ($conn->connect_error) {
				    die("Erro de conexão: " . $conn->connect_error);
				} 


					$sql = "SELECT nome_livro FROM livro
							WHERE status_livro = 'D'";
					$result = $conn->query($sql);

				?>

				<form id="formCadastroUsuario" class="form-cadastrar">
					<div class="row">
						<div class="form-group col-xs-6 col-lg-6">
							<label for="inputEmail"><i class="fas fa-envelope"></i>  Email</label>
							<input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Informe o email">
						</div>						
					</div>
					<div class="row">
						<div class="form-group col-xs-4 col-lg-4">
							<label for="inputSenha"><i class="fas fa-unlock"></i>  Senha</label>
							<input type="password" class="form-control" id="inputSenha" name="inputSenha" placeholder="Informe sua senha">
							</div>						
						<div class="form-group col-xs-4 col-lg-4">
							<label for="inputLivro"><i class="fas fa-braille"></i>  Livro</label>
							<select class="form-control" id="selectTipo" name="selectTipo" aria-describedby="tipoHelp">
								<?php while($row = mysql_fetch_array($result)):;?>
								<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
							<?php endwhile;?>
							</select>
						</div>
					
					<div class="btn-principal">
						<button class="form-control btn-cadastrar-livro" type="submit"><i class="fas fa-plus-square"></i>  Cadastrar</button>
					</div>
				</form>
			</div>

		</div>

		

	</body>
</html>