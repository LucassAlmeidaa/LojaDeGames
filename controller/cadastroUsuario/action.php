<?php

require '../../model/Usuario.php';

if (!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $retorno = Usuario::cadastrarUsuario($_POST['usuario'], $_POST['email'], $_POST['senha']);
    if ($retorno = 1) {
        header('location: ../../index.php?cadastro="Y"');
    };
} else {
    header('location: ../../view/cadastroUsuario/cadastro.php?cadastro="N"');
}
