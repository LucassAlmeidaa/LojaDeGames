<?php
require '../../model/Jogo.php';
require '../../cabecalho.php';

$resultJogosTiro = Jogo::apiJogos(['url' => 'https://api.rawg.io/api/games?key=c537d7652ce545c784d3d97d98df1bbe&genres=shooter']);
$resultJogosAcao = Jogo::apiJogos(['url' => 'https://api.rawg.io/api/games?key=c537d7652ce545c784d3d97d98df1bbe&genres=action']);
$resultJogosIndie = Jogo::apiJogos(['url' => 'https://api.rawg.io/api/games?key=c537d7652ce545c784d3d97d98df1bbe&genres=indie']);
// print_r(dirname(__DIR__));exit;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <h1>Destaques</h1>
        </div>

        <div class="row">
            <?php
            foreach (array_slice($resultJogosIndie->results, 2, 2) as $destaque) { ?>
                <div class="col-sm-12 col-md-6">
                    <div class="card mt-2 ">
                        <img src="<?php echo $destaque->background_image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $destaque->name ?></h5>
                            <p class="card-text">Nota metacritic: <?php echo $destaque->metacritic ?></p>
                            <a href="../../../projeto-loja-de-games-mvc/view/detalhes/detalhes.php?id=<?php echo $destaque->id ?>" class="btn btn-outline-primary" target="_blank">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="row mt-4">
            <h2>Jogos que você pode gostar</h2>
        </div>

        <div class="row">
            <?php
            foreach (array_slice($resultJogosAcao->results, 0, 4) as $comum) { ?>
                <div class="col">
                    <div class="card mt-2 ">
                        <img src="<?php echo $comum->background_image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $comum->name ?></h5>
                            <p class="card-text">Nota metacritic: <?php echo $comum->metacritic ?></p>
                            <a href="../../../projeto-loja-de-games-mvc/view/detalhes/detalhes.php?id=<?php echo $comum->id ?>" class="btn btn-outline-primary" target="_blank">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        Promoção Especial
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Titulos Aleatorios de promoção</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Visitar Pagina</a>
                    </div>
                    <div class="card-footer text-muted">
                        A promoção expira em 23:12:45
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="js/script.js"></script>

</html>