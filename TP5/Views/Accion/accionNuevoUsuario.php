<?php
include_once "../../config.php";
include_once "../../Controller/UsuarioController.php";

$sesion = new Session();
if ($sesion->activa()) {
    header('Location: login.php');
    exit();
}

$datos = data_submitted();

$controllerUsuario = new UsuarioController();
$controllerUsuarioRol = new UsuarioRolController();
$usuario = array();
$exito = false;
if (!empty($datos)) {
    $datos['usdeshabilitado'] = null;
    $datos['uspass'] = md5($datos['uspass']);
    $datos['idusuario'] = "";

    if ($checkVacia = $controllerUsuario->vacia()) {
        if ($exito = $controllerUsuario->insertar($datos)) {
            unset($datos['idusuario']);
            $user = $controllerUsuario->buscar($datos);
            $data['idusuario'] = $user[0]->getIdUsuario();
            $data['idrol'] = 1;
            $controllerUsuarioRol->insertar($data);
        }
    } else {
        if ($exito = $controllerUsuario->insertar($datos)) {
            unset($datos['idusuario']);
            $user = $controllerUsuario->buscar($datos);
            $data['idusuario'] = $user[0]->getIdUsuario();
            $data['idrol'] = 2;
            $controllerUsuarioRol->insertar($data);
        }
    }

}


include_once "../structure/Header.php";
echo "<div class='container'>";
if ($exito) {
    echo "<div class='alert alert-success mt-5' role='alert'><h3>Usuario creado con éxito! Inicie sesión</h3></div>";
} else {
    echo "<div class='alert alert-danger mt-5' role='alert'><h3>Ha ocurrido un error. Intentelo nuevamente</h3></div>";
}
echo "<div><form action='../index/login.php'><input type='submit' class='btn btn-primary' value='VOLVER'></form></div></div>";

include_once "../structure/Footer.php";
?>