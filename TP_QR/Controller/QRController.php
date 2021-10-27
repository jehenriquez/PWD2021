<?php

class QRController
{

    public function crearQR($datos)
    {
        $res = array('resultado' => null,
            'error' => "");


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
            $outdir = $GLOBALS['ROOT'] . "View/imagen/";

            $output_data = 'https://wa.me/' . $telefono . '/?text=' . urlencode($msg);

            $archivo = $outdir . md5($output_data) . '.png';

            QRcode::png($output_data, $archivo, QR_ECLEVEL_H, 8);
            //QRcdr::svg($output_data, $archivo);


            $res['resultado'] = basename($archivo);
        }


        return $res;
    }

}