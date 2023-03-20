<?php
include '../../cabecalho.php';
require '../../controller/listarJogos/action.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Jogos Cadastrados</title>
</head>

<body>
    <div class="container 11 mt-3">
        <table id="tabela" class="table" width="100%">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data de cadastro</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($retorno as $jogo) { ?>
                    <tr>
                        <td><?php echo  $jogo['id'] ?></td>
                        <td><?php echo  $jogo['nome'] ?></td>
                        <td><?php echo $jogo['descricao'] ?></td>
                        <td><?php echo $jogo['data_cadastro'] ?></td>
                        <td>
                            <a href="../../view/cadastroJogos/cadastroJogos.php?id=<?php echo $jogo['id'] ?>" id="buttonEditar" class="btn btn-outline-primary">Editar</a>
                            <a href="../../controller/cadastroJogo/action.php?id=<?php echo $jogo['id'] ?>&excluir=Y" id="buttonExcluir" class="btn btn-outline-primary">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>