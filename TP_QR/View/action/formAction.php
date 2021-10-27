<?php
include_once("../../config.php");
include_once "../Structure/Header.php";

$datos = data_submitted();

$controllerImagenQR = new QRController();
if (!empty($datos)) {
    $imagen = $controllerImagenQR->crearQR($datos);
    echo "<div class='container p-4'>";
    if (empty($imagen["error"])) {
        echo '<div class="alert alert-success">';
        echo "<h2 class='text-center p-2'>Escanea el código QR con tu celular!</h2>";
        // ubicar la imagen
        echo '<div class="text-center"><img src=../imagen/' . $imagen["resultado"] . '></div>';
        $ruta = "{$imagen['resultado']}";
        // botones para descargar las imagenes
        echo '<a class="btn btn-success" href="../../Util/get.php?path=' . $ruta . '"><i class=""></i> PNG</a></div>';
    } else {
        echo "<div class='alert alert-danger mt-5' role='alert'><h3>Ha ocurrido un error. No se genero el codigo QR. Intentelo nuevamente</h3></div>";
    }
    echo "<div><form action='../index/index.php'><input type='submit' class='btn btn-primary' value='VOLVER'></form></div></div>";
}
include_once("../Structure/Footer.php");
?>

