<!DOCTYPE html>
<html>

<body>
<<<<<<< HEAD
		<h1><i class="fas fa-list-alt"></i> Livros</h1>
		<div style="margin-top: 10px;" class="container-fluid">
		
		<?php
		require_once("model/Connection.php");
=======
		<div class="container-fluid">
		<h1><i class="fas fa-list-alt"></i>  Livros</h1>
		<div>
			<table id="tabela-livros" data-url="http://localhost/api_sistema-biblioteca/livro/read.php" data-toggle="table" data-url="WS/Usuario"
				data-striped="true" data-sortable="true"
				data-classes="table table-hover table-striped table-condensed" data-refresh="true">
				<thead>
					<tr>
						<th data-field="nome_livro" data-sortable="true">Nome livro</th>
						<th data-field="nome_autor" data-sortable="true">Nome autor</th>
						<th data-field="categoria_livro" data-sortable="true">Categoria livro</th>
						<th data-field="situacao_livro" data-sortable="true">Situação livro</th>
						<th data-formatter="editarFormatter" class="th-span"></th>
						<th data-formatter="excluirFormatter" class="th-span"></th>
					</tr>
				</thead>
			</table>
		</div>
		<!--<div>
			<?php
			require_once("model/Connection.php");
>>>>>>> 25d2be5fa60e29372b1def647c8022266e25e75f

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
			</div>-->
		</div>
</body>
</html>