<!DOCTYPE html>
<html>
<head>
		<title>Lista de Livros</title>
</head>
<body>
		<div class="container-fluid">
		<h1>Livros</h1>
		<?php
		require_once("model/Connection.class.php");

				$connection = new Connection();
        		$conn = $connection->getConn();
				
				if ($conn->connect_error) {
				    die("Erro de conexão: " . $conn->connect_error);
				} 

				$sql = "CALL new_ranking()";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    echo "<table class='table'>
				    		<th>Apelido</th>
				    		<th>Pontuação</th>			    		
				    		</tr>";
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<tr>
				        		<td>".$row["apelido"]."</td>
				        		<td>".$row["score"]."</td>				        	
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