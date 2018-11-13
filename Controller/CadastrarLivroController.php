<?php

	$nome = "";
	$nomeA = "";
	$categoria = "";

	include '../Includes/Connection.php';
	

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	}

	$erros = array(); //Para armazenar os erros
	$form_data = array(); //Para enviar os dados de volta à página

	/* Validação */
	if (empty($_POST['inputNome'])) {
		$erros['nome'] = 'Você deve informar um nome';
	}

	if (empty($_POST['inputNomeA'])) {
		$erros['nomeA'] = 'Você deve informar o nome do autor';
	}

	if (empty($_POST['inputCat'])) {
		$erros['categoria'] = 'Você deve informar a categoria do livro';
	}

	if (!empty($erros)) { //Se houve erros
		$form_data['success'] = false;
		$form_data['erros']  = $erros;
	}

	else { //Se não, processa o formulário e retorna

		$nome = $_POST['inputNome'];
		$nomeA = $_POST['inputNomeA'];
		$categoria = $_POST['inputCat'];

		$stmt = $conn->prepare("INSERT INTO livro (nome_livro, nome_autor, categoria_livro, status_livro) VALUES (?, ?, ?, 'D')");
        //i   corresponding variable has type integer
        //d   corresponding variable has type double
        //s   corresponding variable has type string
        //b   corresponding variable is a blob and will be sent in packets
        $stmt->bind_param('sss', $nome, $nomeA, $categoria); // 's' especifica o tipo => 'string'
        $stmt->execute();

        if ($stmt->error) {
            $erros['nome'] = "Erro: " . $conn->error;
            $form_data['success'] = false;
            $form_data['erros']  = $erros; 
            
        } else {
            $form_data['success'] = true;
            $form_data['posted'] = 'Livro cadastrado com sucesso!';
        }

        $conn->close();		
	}

	//retorna os dados
	echo json_encode($form_data);

	


?>