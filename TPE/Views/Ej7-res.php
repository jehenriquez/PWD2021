<?php
include_once "structure/Header.php";
include_once "../Controllers/ej7Controller.php";

$controller = new ej7Controller();
if ($_GET) {
    $respuesta = $controller->realizarCalculo($_GET);
}

?>
    <div class="container text-center p-3">
        <?php
        echo $respuesta;
        ?>
        <button class="btn btn-primary bg-dark" type="button" onclick="window.history.back()">ATRÁS</button>
    </div>
<?php
include_once "structure/Footer.php"; ?>