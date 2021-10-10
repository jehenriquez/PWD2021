<?php

class Session
{


    public function __construct()
    {
        session_start();
    }

    public function iniciar($nombreUsuario, $psw)
    {
        $_SESSION['usnombre'] = $nombreUsuario;
        $_SESSION['uspass'] = md5($psw);
        $_SESSION['activa'] = false;
        $_SESSION['err'] = null;
    }


    public function validar()
    {
        $resp = false;
        if (isset($_SESSION['usnombre'])) {
            if (isset($_SESSION['uspass'])) {
                $usuario = new UsuarioController();
                $lista = $usuario->buscar($_SESSION);
                if ($lista != null) {
                    if (is_null($lista[0]->getUsDeshabilitado())) {
                        $_SESSION['activa'] = true;
                        $resp = true;
                    } else {
                        $_SESSION['err'] = "Banned";
                    }
                } else {
                    $_SESSION['err'] = "Usuario y/o nombre incorrectos";
                }
            } else {
                $_SESSION['err'] = "Usuario y/o nombre incorrectos";
            }
        }
        return $resp;
    }

    public function activa()
    {
        $resp = false;
        if (isset($_SESSION['activa'])) {
            $resp = $_SESSION['activa'];
        }
        return $resp;
    }

    public function getUsuario()
    {
        $loggedUser = null;
        if ($this->validar() && $this->activa()) {
            $user = new UsuarioController();
            $lista = $user->buscar($_SESSION);
            $loggedUser = $lista[0];
        }
        return $loggedUser;
    }

    public function getRol()
    {
        $rol = null;
        //TODO: fix this
        if ($this->getUsuario() !== null) {
            $loggedUser = $this->getUsuario();
            $tempSesion = array();
            $tempSesion['idusuario'] = $loggedUser->getIdUsuario();
            $usuarioRol = new UsuarioRolController();
            $lista = $usuarioRol->buscar($tempSesion);
            $objUsuarioRol = $lista[0];
            $rol = $objUsuarioRol->getObjRol();
        }
        return $rol;
    }

    public function getErr()
    {
        $text = null;
        if (isset($_SESSION['err'])) {
            $text = $_SESSION['err'];
        }

        return $text;
    }

    public function cerrar()
    {
        $resp = false;
        if ($this->activa()) {
            session_unset();
            $resp = session_destroy();
        }
        return $resp;
    }

    public function actualizarSesion($usnombre, $uspass)
    {
        $_SESSION['usnombre'] = $usnombre;
        $_SESSION['uspass'] = $uspass;
    }

    public function borrar()
    {
        session_unset();
    }
}

