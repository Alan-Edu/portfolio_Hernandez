<?php

include_once __DIR__.'/../datasource/DataSource.php';
include_once __DIR__.'/../dto/Login.php';
include_once __DIR__.'/../idao/IRegistroDAO.php';

class RegistroDAO implements IRegistroDAO
{
    public function insertRegistro(Login $login)
    {
        $dataSource = new DataSource();

        // Verificar si el usuario ya existe
        if ($this->usuarioExistente($login->getEmail())) {
            return false; // Usuario ya existe
        }

        // No es necesario cifrar la contraseña en este caso
        $sql = "INSERT INTO usuario(`email`, `clave_hash`) VALUES (:email, :clave_hash)";

        $result = $dataSource->executeQuery(
            $sql,
            array(
                ':email' => $login->getEmail(),
                ':clave_hash' => $login->getClave_hash()
            )
        );

        return $result;
    }

    private function usuarioExistente($email)
    {
        $dataSource = new DataSource();

        $sql = "SELECT * FROM usuario WHERE email = :email";
        $result = $dataSource->executeQuery(
            $sql,
            array(
                ':email' => $email
            )
        );

        return !empty($result); // Devuelve true si el usuario ya existe
    }
}
?>
