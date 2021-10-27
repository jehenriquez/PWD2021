<?php
include_once ("../../config.php");
include_once "../Structure/Header.php";
#include_once ("../../Controller/QRController.php");

$datos = data_submitted();

$controllerImagenQR = new QRController();
if (!empty($datos)) {
    $imagen = $controllerImagenQR->crearQR($datos);
    var_dump($imagen);
    echo "<div class='container'>";
    if(empty($imagen["error"])){
        // ubicar la imagen
        echo '<div class=""><img src=../image/'.$imagen["resultado"].'></div>';

        // botones para descargar las imagenes

//        echo '<a class="btn btn-default" href="get.php?path='.$imagen.'"><i class=""></i> PNG</a>';
    }else{
        echo "<div class='alert alert-danger mt-5' role='alert'><h3>Ha ocurrido un error. No se genero el codigo QR. Intentelo nuevamente</h3></div>";
    }
    echo "<div><form action='../index/listaUsuarios.php'><input type='submit' class='btn btn-primary' value='VOLVER'></form></div></div>";
}
include_once ("../Structure/Footer.php");
?>

