<?php
session_start();
require '../../model/Usuario.php';

if (!empty($_POST['emailUsuarioLogin']) && !empty($_POST['senhaUsuarioLogin'])) {
    $retorno = Usuario::loginUsuario($_POST);
    if (isset($retorno)) {
        $_SESSION = $retorno['id'];
        include '../../view/principal/principal.php';
    } else {
        include '../../view/loginNaoEncontrado/loginNaoEncontrado.php';
    };
} else {
    header('location: ../../index.php?login="N"');
}
