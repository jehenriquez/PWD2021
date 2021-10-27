<?php /*header('Content-Type: text/html; charset=utf-8');
header ("Cache-Control: no-cache, must-revalidate ");*/

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////
$PROYECTO = 'PWD2021/TP_QR';

//variable que almacena el directorio del proyecto
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/$PROYECTO/";

include_once($ROOT . 'Util/funciones.php');

// Variable que define la pagina de autenticacion del proyecto
$INICIO = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/Views/index/login.php";

// variable que define la pagina principal del proyecto (menu principal)
$PRINCIPAL = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/index/index.php";


$_SESSION['ROOT'] = $ROOT;

?>
