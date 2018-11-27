<!DOCTYPE html>
<html>

<body>
		<h1><i class="far fa-list-alt"></i> Empréstimos</h1>
		<div style="margin-top: 10px;" class="container-fluid">
		
		<?php
		require_once("model/Connection.php");

				$connection = new Connection();
        		$conn = $connection->getConn();
				
				if ($conn->connect_error) {
				    die("Erro de conexão: " . $conn->connect_error);
				} 

				$sql = "SELECT * FROM usuario_livro";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    echo "<table id='t01'>
				    		<th>Livro</th>
				    		<th>Usuario</th>
				    		<th>Retirada</th>
				    		<th>Entrega</th>			    		
				    		</tr>";
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<tr>
				        		<td>".$row["id_livro"]."</td>
				        		<td>".$row["id_usuario"]."</td>
				        		<td>".$row["data_retirada"]."</td>
				        		<td>".$row["data_entrega"]."</td>				        	
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


