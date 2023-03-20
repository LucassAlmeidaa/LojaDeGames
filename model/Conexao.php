<?php

class Conexao
{
    public static function conectar()
    {
        $host = '192.168.1.91';
        $user = 'sga2';
        $pass = 'tsSpenb@130519';
        $dbname = 'estagio_lucas';

        try {
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $pdo = new mysqli($host, $user, $pass, $dbname);
        } catch (Exception $e) {
            echo 'Erro: ' + $e->getMessage();
        }
        return $pdo;
    }
}
