<html>
    <body class="body-login">
        <div class="container">
            <div class="login-principal">
                <form class="form-signin login-form" id="formLogin">
                <div id="divMensagem"></div>
                
                    <div class="row row-form titulo-login">
                        <div class="txt-login col-sm-12 col-md-12">
                            <h1>Login</h1>
                            <h1 class="h3 mb-3 font-weight-normal">Faça o login para acessar</h1>
                        </div>
                    </div>
                    <div class="row row-form">
                        <div style="margin-bottom: 10px" class="txt-login col-sm-12 col-md-12">
                            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email / Usuário" required autofocus>
                        </div>
                    </div>
                    <div class="row row-form senha-login">
                        <div class="txt-login col-sm-12 col-md-12">
                            <input type="password" id="inputSenha" name="inputSenha" class="form-control" placeholder="Senha" required>
                            <a href="esqueci.php"><small id="esqueci" class="form-text text-muted">Esqueci minha senha</small></a>
                        </div>
                    </div>
                    <div class="row row-form">
                        <div class="txt-login col-sm-12 col-md-12">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                            <h1 class="h6 mb-3 font-weight-normal">Primeiro acesso? Registre-se!</h1>
                            <button class="btn btn-lg btn-secondary btn-block" id="btnRegistrar" type="button">Registrar</button>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </body>
</html>