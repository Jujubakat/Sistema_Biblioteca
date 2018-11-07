<!DOCTYPE html>
<html>
		<div class="container-fluid">
			<h1>Cadastro de jogador</h1>
			<div id="divMensagem"></div>
			<form id="formCadastroLivro">
			  <div class="row">
			  	<div class="form-group col-xs-5 col-lg-5">
				    <label for="inputNome">Nome</label>
				    <input type="text" class="form-control" id="inputNome" name="inputNome" aria-describedby="nomeHelp" placeholder="Informe nome do livro">
				    <small id="nomeHelp" class="form-text text-muted">Nome</small>
			  	</div>
			  </div>
			  <div class="row">
			  	<div class="form-group col-xs-5 col-lg-5">
				    <label for="inputNomeA">Nome do Autor</label>
				    <input type="text" class="form-control" id="inputNomeA" name="inputNomeA" aria-describedby="nomeAHelp" placeholder="Informe nome do autor">
				    <small id="nomeAHelp" class="form-text text-muted">Nome do autor</small>
				</div>
			  </div>
			  <div class="row">
			  	<div class="form-group col-xs-5 col-lg-5">
				    <label for="inputCat">Categoria</label>
				    <input type="text" class="form-control" id="inputCat" name="inputCat" aria-describedby="nomeCat" placeholder="Informe a categoria do livro">
				    <small id="nomeCat" class="form-text text-muted"></small>
				</div>
			  </div>			  
			  <div class="row">
			  	<div class="form-group col-xs-5 col-lg-5">
				    <label for="inputStatus">Status</label>
				    <input type="text" class="form-control" id="inputStatus" name="inputStatus" aria-describedby="StatusHelp" placeholder="Informe o Status (Disponível/Indisponível)">
				    <small id="StatusHelp" class="form-text text-muted">Disponível/Indisponível</small>
				</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Registrar</button>
			</form>
		</div>

	</body>
</html>