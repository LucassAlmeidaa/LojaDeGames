<?php

switch ($_POST['acao']) {
    case 'consulta-cep':
        require __DIR__ . '../../../model/Usuario.php';
        $cep = Usuario::pegarEndereco(['cep' => $_POST['cep']]);
        $cep = json_decode($cep);
        require '../../view/detalhes/textoCep.php';
        break;
}
