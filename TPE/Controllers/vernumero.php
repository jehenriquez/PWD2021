<?php
if ($_GET) {
    $num = $_GET['numero'];
    if ($num == 0) {
        $res = "cero";
    } else if ($num > 0) {
        $res = "positivo";
    } else {
        $res = "negativo";
    }
    echo "<h1 class='h1'>El numero ingresado es {$res}</h1>";
} else {
    echo "<h1 class='h1'>No ha ingresado ningun numero</h1>";
}
?>
<button type="button"><a href="Ejercicio1.html">ATRÁS</a></button>
