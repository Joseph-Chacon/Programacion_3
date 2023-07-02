<?php

class Database{
    private $host = "localhost";
    private $User = "root";
    private $pass = "";
    private $db = "pagina";
    private $charset = "utf8";

    function conectar()
    {
        try{
            $conexion = "mysql:host=" .$this->host. "; dbname=" .$this->db. "; charset=" .$this->charset;

            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            $pdo = new PDO($conexion, $this->User, $this->pass, $option);

            return $pdo;

        }catch(PDOException $e){
            echo "Error conexion: " .$e->getMessage();
            exit;
        }
    }
}

?>