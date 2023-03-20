<?php
require_once 'Conexao.php';
class Jogo extends Conexao
{
    public static function apiJogos(array $data)
    {
        if ($data['url']) {
            return json_decode(file_get_contents($data['url']));
        } else {
            return false;
        }
    }

    public static function apiBuscaDesc(array $data)
    {
        if ($data['id']) {
            return json_decode(file_get_contents("https://api.rawg.io/api/games/{$data['id']}?key=c537d7652ce545c784d3d97d98df1bbe"));
        } else {
            return false;
        }
    }

    public static function cadastrarJogo(array $data)
    {
        $banco = Conexao::conectar();
        $data['img'] = mysqli_real_escape_string($banco, $data['img']);
        $sql = "INSERT INTO jogos (nome, descricao, situacao, id_usuario, data_cadastro, imagem) VALUES('{$data['nomeNovoJogo']}','{$data['descNovoJogo']}', 'A', '{$data['id_usuario']}', '" . date('Y-m-d') . "', '{$data['img']}')";
        // print_r($sql);
        // die;
        $consulta = mysqli_query($banco, $sql);
        return mysqli_affected_rows($banco);
    }

    public static function buscarJogos()
    {
        $banco = Conexao::conectar();
        $sql = "SELECT id, nome, descricao, data_cadastro FROM jogos;";
        $consulta = mysqli_query($banco, $sql);
        $total = mysqli_num_rows($consulta);
        $array = [];
        while ($jogo = mysqli_fetch_assoc($consulta)) {
            $array[] = $jogo;
        }
        return $array;
    }

    public static function buscarJogoPorId($data)
    {
        $banco = Conexao::conectar();
        $sql = "SELECT id, nome, descricao FROM jogos WHERE id={$data}";
        $consulta = mysqli_query($banco, $sql);
        return mysqli_fetch_assoc($consulta);
    }

    public static function atualizarJogo(array $data)
    {
        $banco = Conexao::conectar();
        $sql = "UPDATE jogos SET nome = '{$data['nomeNovoJogo']}', descricao = '{$data['descNovoJogo']}' WHERE id = '{$data['id']}'";
        $consulta = mysqli_query($banco, $sql);
        return mysqli_affected_rows($banco);
    }

    public static function deletarJogo(array $data)
    {
        $banco = Conexao::conectar();
        $sql = "DELETE FROM jogos WHERE id = '{$data['id']}'";
        $consulta = mysqli_query($banco, $sql);
        return mysqli_affected_rows($banco);
    }
}
