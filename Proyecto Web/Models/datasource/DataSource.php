<?php

define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'minimarket');

class DataSource extends PDO
{
    // private $conexion;

    public function __construct()
    {
        try {

            parent::__construct('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST, DB_USER, DB_PASS);
            // echo "Conexion exitosa";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function executeQuery($sql = "", $values = array())
    {
        if ($sql != "") {
            $query = $this->prepare($sql);
            $query->execute($values);
            $tablaDatos = $query->fetchAll(PDO::FETCH_ASSOC);
            return $tablaDatos;
        } else {
            return 0;
        }
    }

    public function executeUpdate($sql = "", $values = array())
    {
        if ($sql != "") {
            $query = $this->prepare($sql);
            $query->execute($values);
            $numeroTablasAfectadas = $query->rowCount();
            return $numeroTablasAfectadas;
        } else {
            return 0;
        }
    }
}
