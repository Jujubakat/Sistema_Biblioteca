<?php 

	include_once '../Model/Connection.php';
    include_once '../Model/LivroModel.php';

    $erros = array(); //Para armazenar os erros
    $form_data = array(); //Para enviar os dados de volta à página
    
    $erros['livro'] = "";
    $erros['autor'] = "";
    $erros['categoria'] = "";

    $aplicacao = new LivroModel();

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
            case "AdicionarLivro":
                if (empty($_POST['inputNome'])) {
                    $erros['livro'] = 'Você deve informar um livro';
                }
            
                if (empty($_POST['inputNomeA'])) {
                    $erros['autor'] = 'Você deve informar um autor';
                }
            
                if (empty($_POST['inputCat'])) {
                    $erros['categoria'] = 'Você deve informar uma categoria';
                }
            
                $book = new Livro();
                $book->Nome = $_POST['inputNome'];
                $book->NomeA = $_POST['inputNomeA'];
                $book->Categoria = $_POST['inputCat'];             
                $book->Status = '';
                
                $form_data = $aplicacao->AdicionarLivro($book);
                
                break;
        }
    }

    if (!empty($erros)) { //Se houve erros
		$form_data['success'] = false;
		$form_data['erros']  = $erros;
    }
    
    echo json_encode($form_data);







?>