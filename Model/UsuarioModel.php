<?php

	require_once("Connection.php");

    class UsuarioModel
    {    

        public function AdicionarUsuario($usuario)
        {
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            //$stmt = $conn->prepare("Call new_jogador('$user->Nome', '$user->Email', '$user->Senha', '$user->Apelido', '$user->dataNasc', '$user->Tipo')");            

            $sqlC = "CALL new_jogador('$usuario->Email', '$usuario->Senha', '$usuario->Nome', '$usuario->Apelido', '$usuario->dataNasc')";


            //i   corresponding variable has type integer
            //d   corresponding variable has type double
            //s   corresponding variable has type string
            //b   corresponding variable is a blob and will be sent in packets
            //$stmt->bind_param('sssss', $user->email, $user->senha, $user->nome, $user->apelido, $user->dataNasc);
            $stmt = $conn->prepare($sqlC);
            // 's' especifica o tipo => 'string'
            $stmt->execute();

            if ($stmt->error) {
                $erros['nome'] = "Erro: " . $conn->error;
                $form_data['success'] = false;
                $form_data['erros']  = $erros; 
                
            } else {
                $form_data['success'] = true;
                $form_data['posted'] = 'Usuario cadastrado com sucesso!';
            }

            $conn->close();	

            echo json_encode($form_data);
            die();
        }

        public function VerificaLogin($email, $senha)
        {
            $connection = new Connection();
            $conn = $connection->getConn();

            $sql = "SELECT email, senha, tipo, apelido, nome, dt_cadastro, dt_nascimento FROM usuario where email = ? and senha = ?";
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
                        $_SESSION['email'] = $row["email"];
                        $_SESSION['nome'] = $row["nome"];
                        $_SESSION['tipo'] = $row["tipo"];
                        $_SESSION['apelido'] = $row["apelido"];
                        $_SESSION['dataNasc'] = $row["dt_nascimento"];
                        $_SESSION['dataCadas'] = $row["dt_cadastro"];
                     
                        $dataSQL = $row["dt_nascimento"];
                        $dataDDMMAAAA = date("d/m/Y", strtotime($dataSQL));
                        $_SESSION['data'] = $dataDDMMAAAA;

                        $form_data['success'] = true;

                        $desc = "Login feito por ".$_SESSION['nome'];
                        $sqlLoginLog = "call inserir_log('".$desc."', 'L')";
                        $stmt2 = $conn->prepare($sqlLoginLog);
                        $stmt2->execute();

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