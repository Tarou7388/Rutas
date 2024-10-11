<?php

require_once '../config/Server.php';

class Conexion
{
    /**
     * Establece una conexión a la base de datos utilizando PDO.
     *
     * @return PDO|null Retorna una instancia de PDO si la conexión es exitosa, de lo contrario, retorna null.
     * @throws PDOException Si ocurre un error durante la conexión, se captura y se registra en el log de errores.
     */
    protected static function connect()
    {
        try{
            $pdo = new PDO(SGDB, USER, PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException $e){
            error_log("Error: ".$e->getMessage());
        }
    }

    public function encryption($string)
    {

    }
    public function decryption($string)
    {
      
    }

    public function query($sql)
    {
      
    }

}