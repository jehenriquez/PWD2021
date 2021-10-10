<?php
include_once "../../config.php";
include_once "../../Controller/UsuarioController.php";

$sesion = new Session();

print_r("actualizarLogin.php//////////");

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


?>
<?php
include_once "../structure/Footer.php";
?>