<?php

include_once ('../../../Models/dto/Login.php');
include_once('../../../Models/dao/RegistroDAO.php');

if (isset($_REQUEST['btnRegistrar'])) {
    $email = $_REQUEST['email'];
    $clave = $_REQUEST['clave_hash'];

    $login = new Login();
    $login->setEmail($email);
    $login->setClave_hash($clave);

    $registroDAO = new RegistroDAO();
    $registroExitoso = $registroDAO->insertRegistro($login);

    if ($registroExitoso !== false) {
        header('Location: /Proyecto Web/login.php');
    } else {
        echo "El usuario ya existe o hubo un problema durante el registro. <a href='/Proyecto Web/login.php'>Iniciar sesión</a>";
    }
}
?>


