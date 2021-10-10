<?php
include_once "../../config.php";
include_once "../../Controller/UsuarioController.php";

$sesion = new Session();


if (!$sesion->activa()) {
    header('Location: login.php');
    exit();
} else if ($sesion->getRol()->getIdRol() != 1) {
    header('Location: errorAcceso.php');
    exit();
}

$datos = data_submitted();
$controller = new UsuarioController();

$usuario = array();
if (!empty($datos)) {
    $datos['usdeshabilitado'] = null;
    $usuarioSesion = $sesion->getUsuario()->getIdUsuario();

    $datos['uspass'] = md5($datos['uspass']);
    $exito = $controller->modificacion($datos);
    if ($exito && $usuarioSesion == $datos['idusuario']) {
        $sesion->actualizarSesion($datos['usnombre'], $datos['uspass']);
    }
}


include_once "../structure/Header.php";
echo "<div class='container'>";
if ($exito) {
    echo "<div class='alert alert-success mt-5' role='alert'><h3>Usuario modificado con éxito!</h3></div>";
} else {
    echo "<div class='alert alert-danger mt-5' role='alert'><h3>Ha ocurrido un error. Intentelo nuevamente</h3></div>";
}
echo "<div><form action='../index/listaUsuarios.php'><input type='submit' class='btn btn-primary' value='VOLVER'></form></div></div>";

include_once "../structure/Footer.php";
?>