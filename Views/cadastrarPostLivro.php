<?php

	$email = "";
	$senha = "";
	$nome = "";
	$apelido = "";
	$dataNasc = "";

	include 'connection.php';



	//https://php.eduardokraus.com/upload-de-imagens-com-php


	

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	}

	$erros = array(); //Para armazenar os erros
	$form_data = array(); //Para enviar os dados de volta à página

	/* Validação */
	if (empty($_POST['inputEmail'])) {
		$erros['email'] = 'Você deve informar um email';
	}

	if (empty($_POST['inputSenha'])) {
		$erros['senha'] = 'Você deve informar uma senha';
	}

	if (empty($_POST['inputNome'])) {
		$erros['nome'] = 'Você deve informar um nome';
	}

	if (empty($_POST['inputApelido'])) {
		$erros['apelido'] = 'Você deve informar um apelido';
	}

	if(empty($_POST['inputDataNasc'])) {
		$erros['dataNasc'] = 'Você deve informar sua data de nascimento';
	}

	if(empty($_POST['inputImagem'])) {
		$erros['imagemPerfil'] = 'Você deve informar uma imagem de perfil';
	}

	if (!empty($erros)) { //Se houve erros
		$form_data['success'] = false;
		$form_data['erros']  = $erros;
	}

	else { //Se não, processa o formulário e retorna

		$email = $_POST['inputEmail'];
		$senha = $_POST['inputSenha'];
		$apelido = $_POST['inputApelido'];
		$nome = $_POST['inputNome'];
		$dataNasc = $_POST['inputDataNasc'];

		$stmt = $conn->prepare("INSERT INTO usuario (Email, Senha, Nome, Apelido, dt_nascimento, dt_cadastro, tipo) VALUES (?, ?, ?, ?, ?, now(),'J')");
        //i   corresponding variable has type integer
        //d   corresponding variable has type double
        //s   corresponding variable has type string
        //b   corresponding variable is a blob and will be sent in packets
        $stmt->bind_param('sssss', $email, $senha, $nome, $apelido, $dataNasc); // 's' especifica o tipo => 'string'
        $stmt->execute();

        if ($stmt->error) {
            $erros['nome'] = "Erro: " . $conn->error;
            $form_data['success'] = false;
            $form_data['erros']  = $erros; 
            
        } else {
            $form_data['success'] = true;
            $form_data['posted'] = 'Jogador cadastrado com sucesso! Bora jogar!';
        }

        $conn->close();		
	}

	//retorna os dados
	echo json_encode($form_data);

	//Upload Imagem
	$imagemPerfil = $_POST['inputFile'];
	if ( 0 < $_FILES['file']['error'] ) {
        echo 'Erro: ' . $_FILES['file']['error'] . '<br>';
    }

    else {
        $target = 'img/usuarios_img/';
		$target = $target . basename( $_FILES['file']['name']);

		$Filename=basename( $_FILES['file']['name']);

	
		if(move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
		    
		    echo "O arquivo ". basename( $_FILES['file']['name']). " foi enviado";
		    
		    //INSERE NO MYSQL O CAMINHO E ID DO JOGADOR
		    $sqlImg = "INSERT INTO usuario(img_usuario) values(?);";
		    $stmt = $conn -> prepare($sqlImg);
		    $stmt-> bind_param('s', $imagemPerfil);

		    $stmt->execute();

		} else {
		   
		    echo "Ocorreu um problema no envio do arquivo.";
		}
    }


?>