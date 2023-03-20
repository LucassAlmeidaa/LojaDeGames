<?php
require_once 'model/Conexao.php';
$conn = Conexao::conectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <h1>Bem vindo ao Game Project</h1>
        </div>
        <div class="row text-center">
            <p>Faça login ou cadastre-se para continuar</p>
        </div>
        <div class="row">
            <form id="formLogin" action="../projeto-loja-de-games-mvc/controller/login/action.php" method="post">
                <div class="row justify-content-center">
                    <div class="col-7 col-md-6 col-lg-6 text-center">
                        <div class="form-floating mb-3">
                            <input style="background-color: whitesmoke;" name="emailUsuarioLogin" for="nome" type="text" class="form-control " id="floatingPassword" placeholder="email">
                            <label for="floatingPassword">Usuario</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-7 col-md-6 col-lg-6">
                        <div class="form-floating mb-3">
                            <input style="background-color: whitesmoke;" name="senhaUsuarioLogin" for="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Senha</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 text-end">
                            <button id="btnLogin" type="submit" class="btn btn-outline-primary">Fazer Login</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3">
                            <button type="submit" formaction="view/cadastroUsuario/cadastro.php" class="btn btn-outline-primary">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
            <?php if (!empty($_GET['cadastro'])) { ?>
                <div class="col">
                    <div class="form-floating mb-12">
                        <div class="alert alert-success" role="alert">
                            Cadastro realizado com sucesso
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php if (!empty($_GET['login'])) { ?>
                <div class="col">
                    <div class="form-floating mb-12">
                        <div class="alert alert-danger" role="alert">
                            Preencha os campos para realizar o login!
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

</body>

</html>