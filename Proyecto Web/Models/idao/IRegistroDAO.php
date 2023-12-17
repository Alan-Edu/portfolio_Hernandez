<?php

include_once __DIR__.'/../dto/Login.php';

interface IRegistroDAO
{

    public function insertRegistro(Login $login); // insert
    // public function usuarioExistente($email);
}