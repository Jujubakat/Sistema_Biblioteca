<?php

	require_once("Connection.php");

    class LivroModel
    {    

        public function AdicionarLivro($livro)
        {
            $conn = new Connection();
            $conn = $connection->getConn();
            
            //$stmt = $conn->prepare("INSERT INTO usuario('$user->Nome', '$user->Email', '$user->Senha', '$user->Apelido', '$user->dataNasc', '$user->Tipo')");            

            $sqlC = "INSERT INTO livro values('$livro->NomeL', '$livro->NomeA', '$livro->Cat')";


            $stmt = $conn->prepare($sqlC);
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

            echo json_encode($form_data);
            die();
        }

        public function VerificaLogin($email, $senha)
        {
            $connection = new Connection();
            $conn = $connection->getConn();

            $sql = "SELECT nome_usuario, senha_usuario, email_usuario, tipo_usuario FROM usuario where email_usuario = ? and senha_usuario = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ss', $email, $senha); // 's' especifica o tipo => 'string'

            $stmt->execute();
            if ($stmt->error) {
                $erros['nome'] = "Erro: " . $conn->error;
                $form_data['success'] = false;
                $form_data['erros']  = $erros; 
                
            } else {
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    if($row = $result->fetch_assoc()) {

                        session_start([
                            'cookie_lifetime' => 86400,
                        ]);
                        $_SESSION['email'] = $row["email_usuario"];
                        $_SESSION['nome'] = $row["nome_usuario"];
                        $_SESSION['tipo'] = $row["tipo_usuario"];
                        $_SESSION['cpf'] = $row["cpf_usuario"];                        
                        $_SESSION['dataCadas'] = $row["data_cadastro"];                     
                        $dataSQL = $row["data_cadastro"];
                        $dataDDMMAAAA = date("d/m/Y", strtotime($dataSQL));
                        $_SESSION['data'] = $dataDDMMAAAA;

                        $form_data['success'] = true;

                        $desc = "Login feito por ".$_SESSION['nome'];

                        $form_data['posted'] = 'Login feito com sucesso';

                    }
                } 
                else
                {
                    $erros['email'] = 'usuário ou senha inválidos';
                    $form_data['success'] = false;
                    $form_data['erros']  = $erros;
                }
            }
            $conn->close();	

            echo json_encode($form_data);
            die();
        }
    }
    






?>