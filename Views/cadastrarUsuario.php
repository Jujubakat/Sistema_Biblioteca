<!DOCTYPE html>
<html>
		<div class="container-fluid">
			<h1>Cadastro de Usuario</h1>
			<div id="divMensagem"></div>
			<form id="formCadastroUsuario">
			  <div class="row">
			  	<div class="form-group col-xs-5 col-lg-5">
				    <label for="inputEmail">Email</label>
				    <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Informe o seu email">
				    <small id="emailHelp" class="form-text text-muted">O email será utilizado para administração</small>
			  	</div>
			  </div>
			  <div class="row">
			  	<div class="form-group col-xs-5 col-lg-5">
				    <label for="inputNome">Nome</label>
				    <input type="text" class="form-control" id="inputNome" name="inputNome" aria-describedby="nomeHelp" placeholder="Informe o seu nome completo">
				    <small id="nomeHelpHelp" class="form-text text-muted">Seu nome aqui..</small>
				</div>
			  </div>
			  <div class="row">
			  	<div class="form-group col-xs-5 col-lg-5">
				    <label for="inputSenha">Senha</label>
				    <input type="password" class="form-control" id="inputSenha" name="inputSenha" placeholder="Informe uma senha">
				    <small id="senhaHelp" class="form-text text-muted"></small>
				</div>
			  </div>			  
			  <div class="row">
			  	<div class="form-group col-xs-5 col-lg-5">
				    <label for="inputCpf">CPF</label>
				    <input type="text" class="form-control" id="inputCpf" name="inputCpf" aria-describedby="CpfHelp" placeholder="Informe o seu CPF">
				    <small id="cpfHelp" class="form-text text-muted">Seu CPF aqui..</small>
				</div>
			  </div>			 
			  <button type="submit" class="btn btn-primary">Registrar</button>
			</form>
		</div>

		

	</body>
</html>