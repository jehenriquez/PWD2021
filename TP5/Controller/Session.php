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
        $_SESSION['uspass'] = $psw;
    }


    public function validar()
    {
        $resp = false;
        if (isset($_SESSION['usnombre'])) {
            if (isset($_SESSION['uspass'])) {
                $usuario = new UsuarioController();
                $lista = $usuario->buscar($_SESSION);
                if ($lista != null) {
                    $_SESSION['activa'] = true;
                    $resp = true;
                }
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

    public function cerrar()
    {
        $resp = false;
        if ($this->activa()) {
            session_unset();
            $resp = session_destroy();
        }
        return $resp;
    }
}

