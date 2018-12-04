<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistema_biblioteca";

    class Connection
    {
        public function getConn()
        {
            $conn = new mysqli("localhost", "root", "", "sistema_biblioteca");
            if ($conn->connect_error) {
                $erros['conexao'] = "Erro de conexão: " . $conn->connect_error;
            }
            return $conn;
        }
    }
    
?>



