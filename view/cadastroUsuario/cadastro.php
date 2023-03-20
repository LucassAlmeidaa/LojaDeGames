<?php
require '../../model/Conexao.php';
$conn = Conexao::conectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>

</head>

<body>
    <div class="container">
        <div class="row text-center">
            <h1>Preencha os items para se cadastrar</h1>
        </div>
        <div class="row text-center">
            <p>É rapidinho e vai valer super a pena =)</p>
        </div>
        <div class="row">
            <form action="../../controller/cadastroUsuario/action.php" method="post">
                <div class="row justify-content-center">
                    <div class="col-7 col-md-6 col-lg-6 text-center">
                        <div class="form-floating mb-3">
                            <input style="background-color: whitesmoke;" name="usuario" for="nome" type="text" class="form-control " id="floatingPassword" placeholder="Nome">
                            <label for="floatingPassword">Escolha seu Usuario</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-7 col-md-6 col-lg-6 text-center">
                        <div class="form-floating mb-3">
                            <input style="background-color: whitesmoke;" name="email" for="nome" type="text" class="form-control " id="floatingPassword" placeholder="Nome">
                            <label for="floatingPassword">Seu melhor Email</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-7 col-md-6 col-lg-6">
                        <div class="form-floating mb-3">
                            <input style="background-color: whitesmoke;" name="senha" for="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Digite sua Senha</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 text-center">
                            <button type="submit" class="btn btn-outline-primary">Realizar o cadastro</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php if (!empty($_GET['cadastro'])) { ?>
            <div class="col">
                <div class="form-floating mb-12">
                    <div class="alert alert-danger" role="alert">
                        Preencha os campos para realizar o cadastro!
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    </div>
</body>

</html>