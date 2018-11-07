<?php 

switch($page)
    {
        case 'Login':
        default:
            $script = "login";
            break;  
        case 'Cadastrar':
            $script = "cadastrarLivro";    
            break;
        case 'Lista':
            $script = "listagem";
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