<?php

abstract class Conexao {

    const USER = "root";
    const PASS = "";

    private static $instance = null;

    private static function conectar() {

        try {
            if (self::$instance == null):
                $base = "mysql:host=localhost;dbname=teuremedio";
            //cria a instancia com o banco de dados
                self::$instance = new PDO($base, self::USER, self::PASS);
                //se não retorna erro
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            endif;
        } catch (PDOException $erro) {
            //escreve o erro
            echo "Erro: " . $erro->getMessage();
        }
        return self::$instance;
    }

    protected static function getDataBase() {
        return self::conectar();
    }
}
?>