<?php
require 'Conexao.php';
class Usuario extends Conexao
{
    public static function pegarEndereco(array $data)
    {
        if ($data['cep']) {
            return file_get_contents("https://viacep.com.br/ws/{$data['cep']}/json/");
        } else {
            return false;
        }
    }

    public static function cadastrarUsuario($usuario, $email, $senha)
    {
        $banco =  Conexao::conectar();
        $query_usuario = "INSERT INTO usuario (nome, senha, usuario,  situacao, data_cadastro) VALUES('{$usuario}', '{$senha}', '{$email}', 'A', '" . date('Y-m-d') . "')";
        $retorno = mysqli_query($banco, $query_usuario);
        return mysqli_num_rows($retorno);
    }

    public static function loginUsuario($data)
    {
        $banco = Conexao::conectar();
        $sql = "SELECT id FROM usuario WHERE usuario = '{$data['emailUsuarioLogin']}' AND senha = '{$data['senhaUsuarioLogin']}'";
        $result = mysqli_query($banco, $sql);
        return mysqli_fetch_assoc($result);
    }
}
