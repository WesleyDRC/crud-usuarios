<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css?=<?php echo time() ?>">
	<link rel="stylesheet" href="pages/listar_usuario.css?=<?php echo time() ?>" >
	<link rel="stylesheet" href="pages/novo_usuario.css?=<?php echo time() ?>" >
	<link rel="stylesheet" href="pages/editar_usuario.css?=<?php echo time() ?>" >
</head>

<body>
	<nav>
		<ul class="nav-list">
			<li class="nav-item"> <a href="./index.php"> Home  </a> </li>
			<li class="nav-item"> <a href="?page=novo"> Novo Usuário  </a> </li>
			<li class="nav-item"> <a href="?page=listar"> Listar Usuários </a> </li>
		</ul>
	</nav>

	<main>
		<?php
			include('./classes/config.php');
			switch(@$_REQUEST["page"]){
				case "novo":
					include('./pages/novo_usuario.php');
					break;
				case "listar":
					include('./pages/listar_usuario.php');
					break;
				case "salvar":
					include('./pages/salvar_usuario.php');
					break;
				case "editar":
					include('./pages/editar_usuario.php');
					break;
				default:
					print "<h1> Bem-vindo! </h1>";
			}
		?>
	</main>

	<footer>

	</footer>
	<body>

</html>