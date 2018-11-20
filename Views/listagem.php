<!DOCTYPE html>
<html>
<head>
		<title>Lista de Livros</title>
</head>
<body>
		<div class="container-fluid">
		<h1>Livros</h1>
		<?php
		require_once("model/Connection.php");

				$connection = new Connection();
        		$conn = $connection->getConn();
				
				if ($conn->connect_error) {
				    die("Erro de conexão: " . $conn->connect_error);
				} 

				$sql = "SELECT * FROM livro 
						WHERE status_livro = 'D' OR status_livro = 'I'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    echo "<table id='t01'>
				    		<th>Livro</th>
				    		<th>Autor</th>
				    		<th>Categoria</th>
				    		<th>Status</th>			    		
				    		</tr>";
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<tr>
				        		<td>".$row["nome_livro"]."</td>
				        		<td>".$row["nome_autor"]."</td>
				        		<td>".$row["categoria_livro"]."</td>
				        		<td>".$row["status_livro"]."</td>				        	
				        	  </tr>";
				    }
				    echo "</table>";
				} else {
				    echo "0 results"; 	
				    }			
			?>
		</div>
</body>
</html>