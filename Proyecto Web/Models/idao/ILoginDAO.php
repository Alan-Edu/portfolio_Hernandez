
<?php

include_once __DIR__.'/../dto/Login.php';

interface ILoginDAO
{

    public function selectlo($email, $clave_hash); // insert

}