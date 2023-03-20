<?php
require '../../cabecalho.php';
require '../../model/Jogo.php';

$detalheJogo = Jogo::apiBuscaDesc($_GET);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Detalhes sobre o jogo</title>
</head>

<body>
    <div id="container" class="container">
        <div class="row mt-2">
            <div class="col">
                <h1><?php echo $detalheJogo->name ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="<?php echo $detalheJogo->background_image ?>" alt="">
            </div>
            <div class="col text-justify">
                <div class="row">
                    <p><?php echo $detalheJogo->description ?></p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Comprar <?php echo $detalheJogo->name ?></h5>
                        <p class="card-text">Comprar este jogo na opção comum, sem nenhuma extensão</p>
                        <a href="#" class="btn btn-outline-primary">Comprar Jogo</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Comprar <?php echo $detalheJogo->name ?></h5>
                        <p class="card-text">Comprar este jogo com a DLC "Não sei pensar em um nome" Junto</p>
                        <a href="#" class="btn btn-outline-primary">Comprar Jogo</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card p-3 mt-3 mb-3">
            <div class="card-body text-center">
                <p><b>Confira o preço de Frete para seu produto =)</b></p>
            </div>
            <div class="row text-center">
                <div class="col">
                    <div class="mb-3">
                        <article id="formCep">
                            <div class="row justify-content-center">
                                <div class="col text-center">
                                    <div class="form-floating mb-3">
                                        <input style="background-color: whitesmoke;" name="cep" for="cep" type="number" class="form-control " id="floatingPassword" placeholder="Nome">
                                        <label for="floatingPassword">Digite seu CEP</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3 text-center">
                                        <button id="button" type="" class="btn btn-outline-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <span id="textCep"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>