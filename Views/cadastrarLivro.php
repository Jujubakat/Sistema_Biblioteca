<!DOCTYPE html>
<html>
	<body class="main-cadastrar-livro">
		<div style="color: white;" class="container-fluid">
			<h1>Cadastro de livro</h1>
			<div id="divMensagem"></div>

			<form id="formCadastroLivro" class="form-cadastrar-livro">

			  <div class="row">
			  	<div class="form-group col-xs-6 col-lg-6">
				    <label for="inputNome">Nome</label>
				    <input type="text" class="form-control" id="inputNome" name="inputNome" aria-describedby="nomeHelp" placeholder="Informe nome do livro">
			  	</div>
			  	<div class="form-group col-xs-6 col-lg-6">
				    <label for="inputNomeA">Nome do Autor</label>
				    <input type="text" class="form-control" id="inputNomeA" name="inputNomeA" aria-describedby="nomeAHelp" placeholder="Informe nome do autor">
					</div>
			  </div>

			  <div class="row">
			  	<div class="form-group col-xs-6 col-lg-6">
				    <label for="inputCat">Categoria</label>
				    <input type="text" class="form-control" id="inputCat" name="inputCat" aria-describedby="nomeCat" placeholder="Informe a categoria do livro">
					</div>
					<div class="form-group col-xs-3 col-lg-3">
						<label></label>
						<button class="form-control btn-cadastrar-livro" type="submit" class="btn btn-primary">Registrar</button>
					</div>
			  </div>
			</form>
		</div>

	</body>
</html>