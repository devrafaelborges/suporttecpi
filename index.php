<?php 
require_once("conexao.php");

//CRIAR O USUÁRIO ADMINISTRADOR CASO ELE NÃO EXISTA

$query = $pdo->query("SELECT * from usuarios where nivel = 'Administrador'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

if($total_reg ==0){
    $pdo->query("INSERT INTO usuarios SET nome = '$nome_admin', email = '$email_adm', senha = '123', nivel = 'Administrador'");
}


?>

<!DOCTYPE html>
<html>
<head>

<link href="./img/ico.ico" rel="shortcut icon" type="image/x-icon>">;


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link href="css/estilo-login.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

       <title><?php echo $nome_sistema ?> </title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="">
            <div class="account-wall">
                <img class="profile-img" src="./img/suporttec.svg";
                    alt="">
                <form class="form-signin" method="post" action="autenticar.php">
                <input type="e-mail" name="email" class="form-control mb-2" placeholder="Email" required autofocus>
                <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                <div class="d-grid gap-2 mt-2">
                <button class="btn btn-primary" type="submit">
                    Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>    
</body>
</html>