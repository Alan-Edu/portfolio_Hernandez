
<?php

class Registro
{
    private $codigo;
    private $email;
    private $clave_hash;

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getClave_hash()
    {
        return $this->clave_hash;
    }

    public function setClave_hash($clave_hash)
    {
        $this->clave_hash = $clave_hash;
    } 
}