<?php 

switch($page)
    {
        case 'Pg-jogo':
            $script = "pg-jogo";
            break;
        case 'Cadastrar':
            $script = "cadastrar";
            break;
        case 'Ranking':
            $script = "ranking";
            break;
        case 'Descricao':
            $script = "descricao";
            break;
        case 'Perfil':
            $script = "perfil";
            break;
        case 'Jogadores':
            $script = "jogadores";
            break;
        case 'Logs':
            $script = "logs";
            break;
        case 'Regras':
            $script = "regras";
            break;
        case 'CadastrarAdmin':
            $script = "cadastrarAdmin";
            break;    
        case 'Esqueci':
            $script = "esqueci";
            break;
        case 'Login':
        default:
            $script = "login";
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