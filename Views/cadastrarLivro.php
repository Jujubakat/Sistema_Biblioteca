<!DOCTYPE html>
<html>
	<body class="main-cadastrar">
		<div style="margin-top: 10px;" class="container-fluid">

			<h1><i class="fas fa-atlas"></i>  Cadastro de livro</h1>
			<div id="divMensagem"></div>

			<div class="container">
				<form id="formCadastroLivro" class="form-cadastrar">

					<div class="row">
						<div class="form-group col-xs-6 col-lg-6">
							<label for="inputNome"><i class="fas fa-book"></i>  Nome do livro</label>
							<input type="text" class="form-control" id="inputNome" name="inputNome" aria-describedby="nomeHelp" placeholder="Informe nome do livro">
						</div>
						<div class="form-group col-xs-6 col-lg-6">
							<label for="inputNomeA"><i class="fas fa-male"></i>  Nome do Autor(a)</label>
							<input type="text" class="form-control" id="inputNomeA" name="inputNomeA" aria-describedby="nomeAHelp" placeholder="Informe nome do autor">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-xs-6 col-lg-6">
							<label for="inputCat"><i class="fas fa-certificate"></i>  Categoria</label>
							<input type="text" class="form-control" id="inputCat" name="inputCat" aria-describedby="nomeCat" placeholder="Informe a categoria do livro">
						</div>
						<div class="form-group col-xs-3 col-lg-3">
							<label></label>
							<button class="form-control btn-cadastrar-livro" type="submit"><i class="fas fa-plus-square"></i>  Cadastrar</button>
						</div>
					</div>
				</form>
			</div>

		</div>
	</body>
</html>