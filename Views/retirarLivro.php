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


					$query = "SELECT * FROM livro
							  WHERE status_livro = 'D'
							  ORDER BY nome_livro";
					$result1 = mysqli_query($conn, $query);

				?>

				<form id="formCadastroAluga" class="form-cadastrar">
					<div class="row">
						<div class="form-group col-xs-6 col-lg-6">
							<label>Aluno:</label>
							<label><?php $_SESSION['nome_usuario'] ?></label>
						</div>
						<div class="form-group col-xs-6 col-lg-6">
							<label>Email:</label>
							<label><?php $_SESSION['email_usuario'] ?></label>
						</div>			
					</div>
					<div class="row">					
						<div class="form-group col-xs-12 col-lg-12">
							<label for="inputLivro"><i class="fas fa-braille"></i>  Livro</label>
							<select class="form-control" id="selectTipo" name="selectTipo" aria-describedby="tipoHelp">
								<?php while($row1 = mysqli_fetch_array($result1)):;?>
								<option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
							<?php endwhile;?>
							</select>
						</div>
					
					<div class="btn-principal">
						<button class="form-control btn-cadastrar-livro" type="submit"><i class="fas fa-plus-square"></i>  Alugar</button>
					</div>
				</form>
			</div>

		</div>

		

	</body>
</html>