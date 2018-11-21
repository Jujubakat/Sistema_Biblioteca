<?php 
    if(!isset($_GET['page'])){
    $page = "Jogo";
    } else {
    $page = $_GET['page'];
    }
    switch($page)
    {
        
        case 'Login':
        default:
            $script = "login";
            break;  
        case 'CadastrarLivro':
            $script = "cadastrarLivro";    
            break;
        case 'Lista':
            $script = "listagem";
            break;
        case 'Emprestimos':
            $script = "emprestimos";
            break;
        case 'CadastrarUsuario':
            $script = "cadastrarUsuario";
            break;
    }
?>



<!DOCTYPE html>
<html>
	<head>
		<?php include 'includes/header.php' ?>
		<title>Sistema biblioteca</title>
	</head>
	<body>
        <?php 
            include 'Includes/verificaLogin.php';
            include 'Includes/navbar.php';
            include 'views/'.$script.'.php';
        ?>
       
	</body>
</html>