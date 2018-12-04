<?php

	include_once '../Model/Connection.php';
    include_once '../Model/UsuarioModel.php';

    $erros = array(); //Para armazenar os erros
    $form_data = array(); //Para enviar os dados de volta à página
    
    $erros['nome'] = "";
    $erros['email'] = "";
    $erros['senha'] = "";

    $aplicacao = new UsuarioModel();

    if (empty($_POST['operacao'])) {
		$erros['operacao'] = 'Operacao não foi informada';
    }
    else
    {                
        $operacao = $_POST['operacao'];
        switch($operacao)
        {
            case "VerificarLogin":
                if (empty($_POST['inputEmail'])) {
                    $erros['email'] = 'Você deve informar um email';
                }
            
                if (empty($_POST['inputSenha'])) {
                    $erros['senha'] = 'Você deve informar uma senha';
                }

                $Senha = $_POST['inputSenha'];
                $Email = $_POST['inputEmail'];


                $form_data = $aplicacao->VerificaLogin($Email, MD5($Senha));
                break;
            case "AdicionarUsuario":
                if (empty($_POST['inputEmail'])) {
                    $erros['email'] = 'Você deve informar um email';
                }
            
                if (empty($_POST['inputSenha'])) {
                    $erros['senha'] = 'Você deve informar uma senha';
                }
            
                if (empty($_POST['inputNome'])) {
                    $erros['nome'] = 'Você deve informar um nome';
                }
            
                $user = new Usuario();
                $user->Nome = $_POST['inputNome'];
                $user->Email = $_POST['inputEmail'];
                $user->Senha = $_POST['inputSenha'];
                $user->Cpf = $_POST['inputCpf'];                
                $user->DataCadastro = date("Y-m-d H:i:s");
                $user->Tipo = 'A';
                
                $form_data = $aplicacao->AdicionarUsuario($user);
                
                break;
        }
    }

    if (!empty($erros)) { //Se houve erros
		$form_data['success'] = false;
		$form_data['erros']  = $erros;
    }
    
    echo json_encode($form_data);






?>