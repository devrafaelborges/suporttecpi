<?php 
@session_start();
require_once("../conexao.php");
require_once("verificar.php");

?>

<!DOCTYPE html>
<html>
<head>

<link href="../img/ico.ico" rel="shortcut icon" type="image/x-icon>">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<title><?php echo $nome_sistema ?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
	<a class="navbar-brand" href="#"><img src="../img/suporttec2.svg"></a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Home</a>
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Cadastros
				</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="#">Something else here</a></li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled">Disabled</a>
			</li>
		</ul>
		<div class="d-flex mr-4px">
			<img class="img-profile rounded-circle" src="../img/login.png" width="40px" height="40px">
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav ">
					<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<?php echo @$_SESSION['nome_usuario']; ?>
				</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Editar Dados</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="../logout.php">Sair</a></li>
				</ul>
			</li>
				</ul>
			</div>

		</div>
	</div>
</div>
</nav>

</body>
</html>