<?php

require '../../model/Jogo.php';

if (!empty($_GET['excluir'])) {
    $result = Jogo::deletarJogo($_GET);
    if (isset($result)) {
        header('Location: ../../view/jogosCadastrados/jogosCadastrados.php');
        die;
    } else {
        echo 'Jogo não foi excluido';
    }
}

if (empty($_POST['id'])) {
    $data = $_POST;
    $data['img'] = file_get_contents($_FILES['imgNovoJogo']['tmp_name']);  
    $retorno = Jogo::cadastrarJogo($data);

    if (isset($retorno)) {
        include '../../view/jogoCadastrado/jogoCadastrado.php';
    } else {
        echo 'Jogo não foi cadastrado';
    }
} else if (!empty($_POST['id']) && empty($_POST['excluir'])) {
    $result = Jogo::atualizarJogo($_POST);
    if (isset($result)) {
        header('Location: ../../view/jogosCadastrados/jogosCadastrados.php');
        die;
    } else {
        echo 'Jogo não foi alterado';
    }
}
