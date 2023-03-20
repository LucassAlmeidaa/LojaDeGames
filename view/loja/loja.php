<?php
require '../../cabecalho.php';
require '../../model/Jogo.php';

$resultJogosTiro = Jogo::apiJogos(['url' => 'https://api.rawg.io/api/games?key=c537d7652ce545c784d3d97d98df1bbe&genres=shooter']);
$resultJogosAcao = Jogo::apiJogos(['url' => 'https://api.rawg.io/api/games?key=c537d7652ce545c784d3d97d98df1bbe&genres=action']);
$resultJogosIndie = Jogo::apiJogos(['url' => 'https://api.rawg.io/api/games?key=c537d7652ce545c784d3d97d98df1bbe&genres=indie']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Loja</title>
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1>Lojinha</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h2>Jogos de Tiro</h2>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div style="height: 31em;" class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../imagens/horizon.jpg" class="d-block w-100" alt="...">
                        </div>
                        <?php
                        foreach ($resultJogosTiro->results as $jogo) { ?>
                            <div class="carousel-item">
                                <img src="<?php echo $jogo->background_image ?>" class="d-block w-100" alt="...">
                            </div>
                        <?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-3">
                <h2>Destaques em jogos de Tiro</h2>
            </div>
        </div>
        <div class="row">
            <?php
            foreach (array_slice($resultJogosTiro->results, 10, 5) as $jogo) { ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?php echo $jogo->background_image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $jogo->name ?></h5>
                            <a href="../detalhes/detalhes.php?id=<?php echo $jogo->id ?>" class="btn btn-outline-primary" target="_blank">Saiba Mais</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"> &#x1F4C5; <?php echo substr($jogo->released, 0, 4)  ?></small>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="container">
            <div class="row mt-2">
                <h2>Jogos Indie</h2>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="card-deck">
                            <?php
                            foreach (array_slice($resultJogosIndie->results, 0, 5) as $jogo) { ?>
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $jogo->background_image ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $jogo->name ?></h5>
                                        <a href="../detalhes/detalhes.php?id=<?php echo $jogo->id ?>" class="btn btn-outline-primary" target="_blank">Saiba Mais</a>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">&#x1F4C5; <?php echo substr($jogo->released, 0, 4) ?></small>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>