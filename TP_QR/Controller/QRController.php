<?php
include_once "../config.php";

class QRController
{

    public function crearQR($datos)
    {
        $res = array('resultado' => null,
            'error' => "");

        if (isset($datos['errorLevel'])) {
            $errorLevel = $datos['errorLevel'];
        } else {
            $res['error'] = "ERROR AL GENERAR EL CODIGO QR";

        }

        if (isset($datos['telefono'])) {
            $telefono = $datos['telefono'];
        } else {
            $res['error'] = "ERROR AL GENERAR EL CODIGO QR";

        }

        if (isset($datos['msg'])) {
            $msg = $datos['msg'];
        } else {
            $res['error'] = "ERROR AL GENERAR EL CODIGO QR";
        }

        if ($res['error'] == "") {
            $outdir = $ROOT . "/View/imagen";

            $output_data = 'https://wa.me/' . $telefono . '/?text=' . urlencode($msg);

            $archivo = $outdir . md5($output_data . '|' . $errorLevel) . '.png';

            QRcode::png($output_data, $archivo, $errorLevel);
            //QRcdr::svg($output_data, $archivo, $errorLevel);


            $res['resultado'] = basename($archivo);
        }


        return $res;
    }

}