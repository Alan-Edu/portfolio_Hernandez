

<?php

include_once('../../../Models/dto/Login.php');
include_once('../../../Models/dao/LoginDAO.php');

if (isset($_REQUEST['btnIngresar'])) {

    $email = $_REQUEST['email'];
    $clave_hash = $_REQUEST['clave_hash'];

    $loginDAO = new LoginDAO();
    $result = $loginDAO->selectlo($email, $clave_hash);

    if ($result) {
        // Usuario autenticado, redirigir a la página de inicio
        header('Location: /Proyecto Web/indexh.php');
    } else {
        // Usuario no registrado, mostrar mensaje de error
        echo "El usuario no está registrado. Por favor, <a href='/Proyecto Web/registro.php'>Regístrate</a>";
    }
}

