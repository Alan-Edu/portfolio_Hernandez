
<?php

include_once __DIR__.'/../datasource/DataSource.php';
include_once __DIR__.'/../dto/Login.php';
include_once __DIR__.'/../idao/ILoginDAO.php';

class LoginDAO implements ILoginDAO
{
   
    public function selectlo($email, $clave_hash)
    {
        $dataSource = new DataSource();

        $sql = "SELECT * FROM usuario WHERE email = :email AND clave_hash = :clave_hash";
        $result = $dataSource->executeQuery(
            $sql,
            array(
                ':email' => $email,
                ':clave_hash' => $clave_hash
            )
        );

        // Devolver true si hay resultados, false si no hay resultados
        return !empty($result);
    }
}



